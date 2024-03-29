<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 *
 */
namespace App\Controller\Admin;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @property \Authentication\Controller\Component\AuthenticationComponent $Authentication

     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth');

        $this->loadComponent('Authentication.Authentication');

        $this->Auth->allow(['login','index']);

        $this->viewBuilder()->disableAutoLayout();

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Auth->allow('forgetPassword');
        $this->Auth->allow('login');
        $this->Auth->allow('resetPassword');
        $this->Auth->allow('changePassword');
        $this->Auth->allow(['controller' => 'Users', 'action' => 'changePassword']);

        $this->Authentication->allowUnauthenticated(['login','forgetPassword','changePassword']);
        $this->Auth->allow('logout');
        $this->Auth->allow('add');
        $this->Auth->allow('delete');
        $this->Auth->allow('edit');
        $this->Auth->allow(['display', 'view', 'index']);

    }
}
