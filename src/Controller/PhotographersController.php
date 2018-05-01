<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Controller\Component\AuthComponent;
use Cake\ORM\TableRegistry;
use Cake\Log\Log;

use App\Controller\Component\OptionComponent;


/**
 * @property \App\Model\Table\PhotographersTable $Photographers
 * Class PhotographersController
 * @package App\Controller
 */
class PhotographersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $users = $this->Paginator->paginate($this->Photographers->find());
        $this->set(compact('users'));
    }

    public function add()
    {
        $user = $this->Photographers->newEntity();

        if($this->getRequest()->is('post')) {
            $user = $this->Photographers->patchEntity($user, $this->getRequest()->getData());
            if($this->Photographers->save($user)) {
                $this->Flash->success('User has been saved');
                return $this->redirect(['action' => 'index']);
            }
            Log::Debug($user->errors());
            $this->Flash->error(__('Unable to add photographer.'));
        }
        $this->set(compact('user'));
        $this->render('edit');
    }



    /**
     * Save and new user
     * @param $id
     * @return \Cake\Http\Response|null
     */
    public function edit($id)
    {

        $user = $this->Photographers->findById($id)->first();
        if($this->getRequest()->is('put')) {
            $user = $this->Photographers->patchEntity($user, $this->getRequest()->getData());
            if($this->Photographers->save($user)) {
                $this->Flash->success('User has been saved');
                return $this->redirect(['action' => 'index']);
            }
            Log::Debug($user->errors());
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set(compact('user','ftp_dirs'));
    }

    /**
     * Delete users
     */
    public function del() {
        $checkedUsers = $this->getRequest()->getData('chk_users');
        $this->Photographers->deleteAll(['id IN' => $checkedUsers]);
        //var_dump(implode(',', $checkedUsers));
        return $this->redirect(['action' => 'index']);
    }
}