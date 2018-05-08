<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PriceGroupValues Controller
 *
 * @property \App\Model\Table\PriceGroupValuesTable $PriceGroupValues
 *
 * @method \App\Model\Entity\PriceGroupValue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PriceGroupValuesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PriceGroups', 'PhotoSizes']
        ];
        $priceGroupValues = $this->paginate($this->PriceGroupValues);

        $this->set(compact('priceGroupValues'));
    }

    /**
     * View method
     *
     * @param string|null $id Price Group Value id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $priceGroupValue = $this->PriceGroupValues->get($id, [
            'contain' => ['PriceGroups', 'PhotoSizes']
        ]);
        $this->set('priceGroupValue', $priceGroupValue);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($group_id)
    {

        $priceGroupValue = $this->PriceGroupValues->newEntity();
        $priceGroupValue->price_group_id = $group_id;

        if ($this->request->is('post')) {
            $priceGroupValue = $this->PriceGroupValues->patchEntity($priceGroupValue, $this->request->getData());


            if ($this->PriceGroupValues->save($priceGroupValue)) {
                $this->Flash->success(__('The price group value has been saved.'));

                return $this->redirect(['controller' => 'PriceGroups', 'action' => 'edit', $group_id]);
            }
            $this->Flash->error(__('The price group value could not be saved. Please, try again.'));
        }
        $priceGroups = $this->PriceGroupValues->PriceGroups->find('list', ['limit' => 200]);
        $photoSizes = $this->PriceGroupValues->PhotoSizes->find('list', ['limit' => 200]);
        $this->set(compact('priceGroupValue', 'priceGroups', 'photoSizes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Price Group Value id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($group_id, $size_id)
    {
        $priceGroupValue = $this->PriceGroupValues->get(['price_group_id' => $group_id, 'photo_size_id' => $size_id], [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $priceGroupValue = $this->PriceGroupValues->patchEntity($priceGroupValue, $this->request->getData());
            if ($this->PriceGroupValues->save($priceGroupValue)) {
                $this->Flash->success(__('The price group value has been saved.'));

                return $this->redirect(['controller' => 'PriceGroups', 'action' => 'edit', $group_id]);
            }
            $this->Flash->error(__('The price group value could not be saved. Please, try again.'));
        }
        $priceGroups = $this->PriceGroupValues->PriceGroups->find('list', ['limit' => 200]);
        $photoSizes = $this->PriceGroupValues->PhotoSizes->find('list', ['limit' => 200]);
        $this->set(compact('priceGroupValue', 'priceGroups', 'photoSizes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Price Group Value id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($group_id, $size_id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $priceGroupValue = $this->PriceGroupValues->get(['price_group_id' => $group_id, 'photo_size_id' => $size_id]);
        if ($this->PriceGroupValues->delete($priceGroupValue)) {
            $this->Flash->success(__('The price group value has been deleted.'));
        } else {
            $this->Flash->error(__('The price group value could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'PriceGroups', 'action' => 'edit', $group_id]);
    }
}
