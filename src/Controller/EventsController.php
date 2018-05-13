<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 * @property \App\Model\Table\PriceGroupsTable $PriceGroups
 *
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('PriceGroups');
    }

    /**
     * Displaying all events
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];


        $ownerId = $this->Auth->user('id');
        //$events = $this->paginate($this->Events->find()->toArray());

        //$events = $this->Events->findByUserId($ownerId)->orderAsc('parent_id')->toArray();
        $events = $this->Events->find()->orderAsc('parent_id')->toArray();

        //$this->Util->toTreeArray($events);

        $events = $this->Util->toTreeArray($events);

//        print_r($events);

        $this->set(compact('events'));
    }

    public function popupFtpPhoto() {
        $data = [
            'photo' => $this->getRequest()->getQuery('photo'),
            'event_name' => '2018 Senior Cup',
            'event_date' => "Saturday 12/03/2018",
            'field_num' => "Field 5",
            'game_time' => "09:03",
            'team' => "Norwest v Cronullar",
            'winteam' => "Cronullar 1st Halve"
        ];
        $this->set($data);
    }

    public function popupEventPhoto() {
        $data = [
            'photo' => $this->getRequest()->getQuery('photo'),
            'event_name' => '2018 Senior Cup',
            'event_date' => "Saturday 12/03/2018",
            'field_num' => "Field 5",
            'game_time' => "09:03",
            'team' => "Norwest v Cronullar",
            'winteam' => "Cronullar 1st Halve"
        ];
        $this->set($data);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Users', 'EventMetas', 'EventShares', 'PhotoShares', 'Photos']
        ]);

        $this->set('event', $event);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ownerId = $this->Auth->user('id');
        $event = $this->Events->newEntity();
        $ftps = array();
        $this->File->getDirectories($this->Option->getOption('ftp_root_path'), $ftps, false);

        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            $event->user_id = $ownerId;
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }

        $priceGroups = $this->PriceGroups->find('list', ['keyField' => 'id',
            'valueField' => 'group_name']);
        //$events = $this->Events->findByUserId($ownerId)->toArray();
        $events = $this->Events->find()->toArray();
        $events = $this->Util->toTreeArray($events);

        $this->set(compact('events', 'event', 'priceGroups', 'ftps'));

        $this->render('edit');
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ownerId = $this->Auth->user('id');
        $event = $this->Events->findById($id)->first();

        $ftps = array();
        $this->File->getDirectories($this->Option->getOption('ftp_root_path'), $ftps, false);

        $priceGroups = $this->PriceGroups->find('list', ['keyField' => 'id',
            'valueField' => 'group_name']);
        //$events = $this->Events->findByUserId($ownerId)->toArray();
        $events = $this->Events->find()->toArray();
        $events = $this->Util->toTreeArray($events);

        $this->set(compact('events', 'event', 'priceGroups', 'ftps'));
        $this->render('edit');
    }

    public function save() {

        $step = $this->getRequest()->getData('step');
        $id = $this->getRequest()->getData('id');

        if($step == 'basic') {
            // saving basic data
            if($id) {
                $event = $this->Events->findById($id)->first();
                $ownerId = $this->Auth->user('id');
                $event->user_id = $ownerId;
            } else {
                $event = $this->Events->newEntity();
            }

            $event = $this->Events->patchEntity($event, $this->getRequest()->getData());
            if($this->Events->save($event)) {
                echo ('Event has been saved');
            } else {
                echo ('Event has not saved');
            }
        }

        die;

    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addEvent() {

        $ownerId = $this->Auth->user('id');
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            $event->user_id = $ownerId;
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }


        $this->set(compact('event'));
        $this->render('edit');
    }

    public function editEvent() {

    }


    public function saveBaisc() {

    }

    public function savePrices() {

    }

    public function saveAdvertising() {

    }

}
