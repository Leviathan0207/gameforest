<?php
namespace App\Controller;

use Cake\Event\Event;
use Facebook\Facebook;
use App\Controller\AuthController;
use Cake\Mailer\Email;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AuthController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }
    public function login(){
        
        if($this->request->is(['post'])){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect(['controller'=>'Profiles']);
            }
            $this->Flash->error('Sai thông tin tài khoản');
        }
    }
    public function register()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $grecaptcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LeZ-H0UAAAAAE8FRyWUZ6n-JTbk9a1QdwNdKIu1&response=' . $data['g-recaptcha-response']));
            $user = $this->Users->patchEntity($user, $this->request->getData());
            //Email
            $myemail = $this->request->getData('Email');
            $myname = $this->request->getData('Username');
            // $mypass = Security::hash($this->request->getData('Password'),'sha256',false);
    
            $mytoken = Security::hash(Security::randomBytes(32));           
            $user->token = $mytoken;
            if ($this->Users->save($user)) {              
                $this->Flash->success(__('Bạn đã đăng ký thành công'));         
                Email::configTransport('gmail', [
                    'host' => 'smtp.gmail.com',
                    'port' => 587,
                    'username' => 'quynguyen2310188@gmail.com',
                    'password' => 'Pclpct@123',
                    'className' => 'Smtp',
                    'tls' => true
                ]);
                $email = new Email('default');
                $email->transport('gmail');
                $email->emailFormat('html');
                $email->from('quynguyen2310188@gmail.com','Quy Nguyen');
                $email->subject('Xin hãy xác nhận Email của bạn');
                $email->to($myemail);
                $email->send('Xin chào'.$myname.'<br/>Xác nhận Email bằng cách nhấn vào đường link bên dưới<br/><a href="http://localhost:8765/users/verification/'.$mytoken.'">Verification Email</a><br/>Thank');              
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Đăng ký thất bại. Xin hãy thử lại'));
            
        }
        $this->set(compact('user'));
    }
    public function verification($token)
    {
        $userTable = TableRegistry::get('users');
        $verify = $userTable->find('all')->where(['token'=>$token])->first();
        $verify->verified='1';       
        $userTable->save($verify);
    }

    public function logout(){
        $this->Flash->success('Thoát thành công');
        return $this->redirect($this->Auth->logout());
    }

    public function fblogin()
    {
        $this->autoRender = false;

        if ($this->request->is(['post'])) {

            $fb = new Facebook([
                'app_id' => '717282398659064',
                'app_secret' => '78be8ede900c509fd637e97a52232667',
                'default_graph_version' => 'v3.2',
            ]);

            $data = $this->request->getData();

            try {
                $response = $fb->get('/me?fields=email,name,first_name,last_name,picture.type(large)', $data['access-token']);
            } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

            $me = $response->getGraphUser();
            $user = [
                'fbid' => $me->getId(),
                'name' => $me->getName(),
                'email' => $me->getField('email'),
                'picture' => $me->getField('picture')
            ];

            $this->Auth->setUser($user);
        }
    }

}
