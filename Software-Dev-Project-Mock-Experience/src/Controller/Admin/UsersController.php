<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\I18n\FrozenTime;
use Cake\Mailer\Mailer;
use Cake\Utility\Security;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \Authentication\Controller\Component\AuthenticationComponent $Authentication
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize(): void {
        parent::initialize();
        // Controller-level function/action whitelist for authentication
        $this->Authentication->allowUnauthenticated(['login', 'register', 'logout', 'forgetPassword', 'resetPassword']);
        $this->Auth->allow(['login', 'register', 'logout', 'forgetPassword', 'resetPassword']);
        $this->Authentication->addUnauthenticatedActions(['login', 'register', 'logout', 'forgetPassword', 'resetPassword']);

    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();

        if ($result && $result->isValid()) {
            return $this->redirect(['controller'=>'Sessions','action'=>'index']);
        }

        if ($this->request->is('post') && !$result->isValid()) {
            echo "<script>alert('Invalid username or password');</script>";

        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            $this->Flash->success(__('You have been logged out successfully. '));
        }
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $key = $this->request->getQuery('key');
        if($key){
            $query = $this->Users->find('all')->where(['Or'=>['email like' =>'%'.$key.'%','first_name like'=>'%'.$key.'%','last_name like'=>'%'.$key.'%','phone like'=>'%'.$key.'%','street like'=>'%'.$key.'%','suburb like'=>'%'.$key.'%','post_code like'=>'%'.$key.'%','state like'=>'%'.$key.'%']]);
        }else{
            $query = $this->Users;
        }
        $users = $this->paginate($query);
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

//            if(!$user->getErrors){
//                $image = $this->request->getData('image_file');
//
//                $name = $image->getClientFilename();
//
//                $targetPath = WWW_ROOT.'img'.DS.$name;
//
//                if($name)
//                    $image->moveTo($targetPath);
//
//                $user->image = $name;
//            }

            if ($this->Users->save($user)) {
//                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
//                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
//            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function register() {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been registered.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be registered. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Forget Password method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful email send, renders view otherwise.
     */
    public function forgetPassword() {
        if ($this->request->is('post')) {
            // Retrieve the user entity by provided email address
            if ($user = $this->Users->findByEmail($this->request->getData('email'))->first()) {
                // Set nonce and expiry date
                $user->nonce = Security::randomString(128);
                $user->nonce_expiry = new FrozenTime('7 days');
                if ($this->Users->save($user)) {
                    // Now let's send the password reset email
                    $mailer = new Mailer('default');

                    // email basic config
                    $mailer
                        ->setEmailFormat('both')
                        ->setTo($user->email)
                        ->setSubject('Reset your account password');

                    // select email template
                    $mailer
                        ->viewBuilder()
                        ->setTemplate('reset_password');

                    // transfer required view variables to email template
                    $mailer
                        ->setViewVars([
                            'first_name' => $user->first_name,
                            'last_name' => $user->last_name,
                            'nonce' => $user->nonce,
                            'email' => $user->email
                        ]);

                    //Send email
                    if (!$mailer->deliver()) {
                        // Just in case something goes wrong when sending emails
                        $this->Flash->error(__('We have encountered an issue when sending you emails. Please try again. '));
                        return $this->render();  // Skip the rest of the controller and render the view
                    }
                } else {
                    // Just in case something goes wrong when saving nonce and expiry
                    $this->Flash->error(__('We are having issue to reset your password. Please try again. '));
                    return $this->render();  // Skip the rest of the controller and render the view
                }
            }

            /*
             * **This is bit of a special design**
             * We don't tell the user if their account exists, or if the email has been sent,
             * because it may be used by someone with malicious intent. We only need to tell
             * the user that they'll get an email.
             */
            $this->Flash->success(__('Please check your inbox (or spam folder) for an email regarding how to reset your account password. '));
            return $this->redirect(['action' => 'login']);

        }
    }

    /**
     * Reset Password method
     *
     * @param string|null $nonce Reset password nonce
     * @return \Cake\Http\Response|null|void Redirects on successful password reset, renders view otherwise.
     */
    public function resetPassword($nonce = null) {
        $user = $this->Users->findByNonce($nonce)->first();

        debug($user);
        // If nonce cannot find the user, or nonce is expired, prompt for re-reset password
        if (!$user || $user->nonce_expiry < FrozenTime::now()) {
            $this->Flash->error(__('Your link is invalid or expired. Please try again. '));
            debug($user->nonce_expiry);
            return $this->redirect(['action'=>'change-password']);

        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            // Used a different validation set in Model/Table file to ensure both fields are filled
            $user = $this->Users->patchEntity($user, $this->request->getData(), ['validate' => 'resetPassword']);
            // Also clear the nonce-related fields on successful password resets
            $user->nonce = null;
            $user->nonce_expiry = null;

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Your password has been successfully reset. Please login with new password. '));
                return $this->redirect(['action'=>'login']);
            }
            $this->Flash->error(__('The password cannot be reset. Please try again.'));
        }

        $this->set(compact('user'));
    }



    /**
     * Change Password method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function changePassword($nonce = null) {
//        $user = $this->Users->get($id, [
//            'contain' => [],
//        ]);
        $user = $this->Users->findByNonce($nonce)->first();

        if ($this->request->is(['patch', 'post', 'put'])) {
            // Used a different validation set in Model/Table file to ensure both fields are filled
            $user = $this->Users->patchEntity($user, $this->request->getData(), ['validate' => 'resetPassword']);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

}
