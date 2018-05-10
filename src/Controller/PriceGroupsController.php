<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PriceGroups Controller
 *
 * @property \App\Model\Table\PriceGroupsTable $PriceGroups
 * @property \App\Model\Table\PriceGroupValuesTable $PriceGroupValues
 *
 * @method \App\Model\Entity\PriceGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PriceGroupsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('PriceGroups');
        $this->loadModel('PriceGroupValues');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $priceGroups = $this->Paginator->paginate($this->PriceGroups->find());

        $this->set(compact('priceGroups'));
    }

    /**
     * View method
     *
     * @param string|null $id Price Group id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $priceGroup = $this->PriceGroups->get($id, [
            'contain' => ['PriceGroupValues.PhotoSizes']
        ]);

        $this->set('priceGroup', $priceGroup);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $priceGroup = $this->PriceGroups->newEntity();
        if ($this->request->is('post')) {
            $priceGroup = $this->PriceGroups->patchEntity($priceGroup, $this->request->getData());
            if ($this->PriceGroups->save($priceGroup)) {
                $this->Flash->success(__('The price group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The price group could not be saved. Please, try again.'));
        }
        $this->set(compact('priceGroup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Price Group id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
//        $priceGroup = $this->PriceGroups->get($id, [
//            'contain' => ['PriceGroupValues']
//        ]);

        $priceGroup = $this->PriceGroups->get($id, [
            'contain' => ['PriceGroupValues.PhotoSizes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $priceGroup = $this->PriceGroups->patchEntity($priceGroup, $this->request->getData());
            if ($this->PriceGroups->save($priceGroup)) {
                $this->Flash->success(__('The price group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The price group could not be saved. Please, try again.'));
        }

        $priceGroupValues = $this->PriceGroupValues->findByPriceGroupId($id, ['contain' => ['PriceGroups', 'PhotoSizes']])->first();
        $this->set(compact('priceGroup', 'priceGroupValues'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Price Group id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $priceGroup = $this->PriceGroups->get($id);
        if ($this->PriceGroups->delete($priceGroup)) {
            $this->Flash->success(__('The price group has been deleted.'));
        } else {
            $this->Flash->error(__('The price group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
