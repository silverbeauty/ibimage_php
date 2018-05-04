<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MetaKeys Controller
 *
 *
 * @method \App\Model\Entity\MetaKey[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MetaKeysController extends AppController
{

    public function initialize()
    {

        $this->loadModel('MetaKeys');
        parent::initialize();
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $metaKeys = $this->Paginator->paginate($this->MetaKeys->find());
        $this->set(compact('metaKeys'));
    }

    /**
     * View method
     *
     * @param string|null $id Meta Key id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $metaKey = $this->MetaKeys->get($id, [
            'contain' => []
        ]);

        $this->set('metaKey', $metaKey);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $metaKey = $this->MetaKeys->newEntity();
        if ($this->request->is('post')) {
            $metaKey = $this->MetaKeys->patchEntity($metaKey, $this->request->getData());
            if ($this->MetaKeys->save($metaKey)) {
                $this->Flash->success(__('The meta key has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meta key could not be saved. Please, try again.'));
        }
        $this->set(compact('metaKey'));

        $this->render('edit');
    }

    /**
     * Edit method
     *
     * @param string|null $id Meta Key id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $metaKey = $this->MetaKeys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $metaKey = $this->MetaKeys->patchEntity($metaKey, $this->request->getData());
            if ($this->MetaKeys->save($metaKey)) {
                $this->Flash->success(__('The meta key has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meta key could not be saved. Please, try again.'));
        }
        $this->set(compact('metaKey'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Meta Key id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $metaKey = $this->MetaKeys->get($id);
        if ($this->MetaKeys->delete($metaKey)) {
            $this->Flash->success(__('The meta key has been deleted.'));
        } else {
            $this->Flash->error(__('The meta key could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
