<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
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
            // debug($user);
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
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Bạn đã đăng ký thành công'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Đăng ký thất bại. Xin hãy thử lại'));
        }
        $this->set(compact('user'));
    }
    public function logout(){
        $this->Flash->success('Thoát thành công');
        return $this->redirect($this->Auth->logout());
    }

    
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function view($id = null)
    // {
    //     $user = $this->Users->get($id, [
    //         'contain' => []
    //     ]);

    //     $this->set('user', $user);
    // }

    // /**
    //  * Add method
    //  *
    //  * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
    //  */
    

    // /**
    //  * Edit method
    //  *
    //  * @param string|null $id User id.
    //  * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
    //  * @throws \Cake\Network\Exception\NotFoundException When record not found.
    //  */
    // public function edit($id = null)
    // {
    //     $user = $this->Users->get($id, [
    //         'contain' => []
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $user = $this->Users->patchEntity($user, $this->request->getData());
    //         if ($this->Users->save($user)) {
    //             $this->Flash->success(__('The user has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The user could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('user'));
    // }

    // /**
    //  * Delete method
    //  *
    //  * @param string|null $id User id.
    //  * @return \Cake\Http\Response|null Redirects to index.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $user = $this->Users->get($id);
    //     if ($this->Users->delete($user)) {
    //         $this->Flash->success(__('The user has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The user could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }
}
