<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\AuthController;
use Cake\Utility\Inflector;
use Cake\ORM\TableRegistry;
/**
 * Forum Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ForumController extends AppController
{   
   
    public function index(){
        
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function forumTopic(){
        $this->loadModel('Posts');
        $posts = $this->Posts->find('all');
        $this->set(compact('posts'));
    }

    public function stripUnicode($str){
        if(!$str) return false;
         $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
         );
      foreach($unicode as $nonUnicode=>$uni) 
        $str = preg_replace("/($uni)/i",$nonUnicode,$str);
      return $str;
    }

    public function createTopic(){
        $this->loadModel('Posts');
        $post = $this->Posts->newEntity();      
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            $post->PostDate = date("Y-m-d H:i:s",strtotime($this->request->getData('PostDate')));
             // *chua hien chinh xac gio`*
            $post->PostAuthor = $this->getRequest()->getSession()->read('Auth.User.Username');
            $lettersNumberSpacesHypens = '/[^\p{L}\p{N}\s]/u';
            $spaceDuplicateHypens = '/[\-\s]+/';          
            $post->PostSlug = preg_replace($lettersNumberSpacesHypens,'',mb_strtolower($this->request->getData('PostDesc')));
            $post->PostSlug = ForumController::stripUnicode($post->PostSlug);           
            $post->PostSlug = preg_replace($spaceDuplicateHypens,'-', $post->PostSlug);
            $post->PostSlug = trim($post->PostSlug,'-');
            ForumController::checkExist($post->PostSlug,$post); 
            if( $post->PostAuthor==null ){
                $this->Flash->error(__('Vui lòng đăng nhập để tạo bài viết'));
                return $this->redirect(['controller'=>'Users','action'=>'login']);
            }                
            else if ( $this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));
                return $this->redirect(['action' => 'forumTopic']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $this->set(compact('post'));
    }

    public function checkExist($slug,$post){
        $this->loadModel('Posts');     
        $query = $this->Posts->find()->where(['PostSlug ='=>$slug])->first();
        if($query!=null){               
            $identity = mt_rand(1,999999);              
            $post->PostSlug = $post->PostSlug.'-'.$identity;
        }   
    }

    public function viewTopic($slug){
        $this->loadModel('Posts');      
        $post = $this->Posts->find()->where(['PostSlug ='=>$slug])->first();
        debug($post);
        $this->set('post', $post);
    }
}