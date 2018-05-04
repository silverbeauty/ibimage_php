<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Log\Log;
/**
 * PhotoSizes Controller
 *
 * @property \App\Model\Table\PhotoSizesTable $PhotoSizes
 *
 */
class PhotoSizesController extends AppController
{


    public function initialize()
    {
        $this->loadModel('PhotoSizes');
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        //
        $photoSizes = $this->Paginator->paginate($this->PhotoSizes->find());

        $this->set(compact('photoSizes'));
    }

    /**
     * View method
     *
     * @param string|null $id Photo Size id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photoSize = $this->PhotoSizes->get($id, [
            'contain' => []
        ]);

        $this->set('photoSize', $photoSize);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photoSize = $this->PhotoSizes->newEntity();
        if ($this->request->is('post')) {
            $photoSize = $this->PhotoSizes->patchEntity($photoSize, $this->request->getData());
            if ($this->PhotoSizes->save($photoSize)) {
                $this->Flash->success(__('The photo size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photo size could not be saved. Please, try again.'));
        }
        $this->set(compact('photoSize'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Photo Size id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photoSize = $this->PhotoSizes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photoSize = $this->PhotoSizes->patchEntity($photoSize, $this->request->getData());
            if ($this->PhotoSizes->save($photoSize)) {
                $this->Flash->success(__('The photo size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photo size could not be saved. Please, try again.'));
        }
        $this->set(compact('photoSize'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Photo Size id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $photoSize = $this->PhotoSizes->get($id);
        if ($this->PhotoSizes->delete($photoSize)) {
            $this->Flash->success(__('The photo size has been deleted.'));
        } else {
            $this->Flash->error(__('The photo size could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
