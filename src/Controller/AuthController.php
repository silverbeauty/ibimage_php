<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;
use Cake\Log\Log;
use App\Controller\AppController;


use lsolesen\pel\Pel;
use lsolesen\pel\PelDataWindow;
use lsolesen\pel\PelJpeg;
use lsolesen\pel\PelTiff;
use App\IptcJpeg\Iptc;

/**
 * Auth Controller
 *
 */
class AuthController extends AppController
{
    use MailerAwareTrait;

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow('login','recover');
    }

    public function login()
    {

        ini_set('memory_limit', '32M');

        if ($this->Auth->user('id')) {
            $this->logout();
        }

        if ($this->request->is('post')) {
            if ($user = $this->Auth->identify()) {
                $this->Auth->setUser($user);
/*                switch ($user['role']){
                    case 'admin':
                        return $this->redirect('/admin/dashboard');
                    case 'reseller':
                        return $this->redirect('/reseller/dashboard');
                    default:
                        return $this->redirect('/dashboard');
                }*/
                return $this->redirect('/products');
            } else {
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout()
    {
        $this->getRequest()->getSession()->destroy();
        $this->Flash->success(__('Session closed'));
        return $this->redirect($this->Auth->logout());
    }

    public function recover()
    {
        if ($this->request->is('post')) {
            $this->loadModel('Users');
            $query = $this->Users->findByUsername($this->request->data('username'));

            $user = $query->first();

            if ($user) {
                try {
                    $user->newPassword = ucfirst(substr(md5(microtime()), 0, 10));
                    $sent = $this->getMailer('User')->send('sendNewPassword', [$user]);

                    if ($sent) {
                        $user->password = $user->newPassword;
                        $this->Users->save($user);
                    }
                } catch (\Exception $e) {
                    Log::write('alert', $e);
                }

                $this->Flash->success(__('An email has been sent to your account with your new password.'));
            } else {
                $this->Flash->error(__('The provided email does not exist in our records.'));
            }
        }
    }


    public function loginWithFacebook()
    {
        if ($this->Auth->user('id')) {
            $this->logout();
        }
        if ($this->request->is('get')) {
            if ($user = $this->Auth->identify()) {
                $this->Auth->setUser($user);
                switch ($user['role']){
                    case 'admin':
                        return $this->redirect('/admin/dashboard');
                    case 'reseller':
                        return $this->redirect('/reseller/dashboard');
                    default:
                        return $this->redirect('/dashboard');
                }
            } else {

                $this->Flash->error(__('You facebook account is not conntected to our system, please register as a member!'));
            }
        }
        return $this->redirect(
            ['controller' => 'Auth', 'action' => 'login']
        );
    }
}
