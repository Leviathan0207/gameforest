<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\AuthController;
/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ForumController extends AppController
{   
   
    public function index(){
        $posts = $this->paginate($this->Posts);
        $this->set(compact('posts'));
    }

    public function forumTopic($slug){
        
    }

    public function createTopic(){
        $this->loadModel('Posts');
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            $post->PostDate = date("Y-m-d H:i:s",strtotime($this->request->getData('PostDate')));
             // *chua hien chinh xac gio`*
            $post->PostAuthor = $this->getRequest()->getSession()->read('Auth.User.Username');
            if( $post->PostAuthor==null ){
                $this->Flash->error(__('Vui lòng đăng nhập để tạo bài viết'));
                return $this->redirect(['controller'=>'Users','action'=>'login']);
            }
            else if ( $this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
            debug($post);
        }
        $this->set(compact('post'));
    }

    public function viewTopic($slug){

    }
}