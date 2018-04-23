<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
/**
 * Product Controller
 *
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $options = TableRegistry::get('Options')->find();
        $option = $options->select(['option_value'])->where(['option_key' => 'thumbnail_path'])->first();
    }

    public function popup() {


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
}
