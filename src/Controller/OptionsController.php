<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Log\Log;
/**
 * Class OptionsController
 * @property \App\Model\Table\OptionsTable $Options
 * @package App\Controller
 */
class OptionsController extends AppController
{

    public function index()
    {
        if($this->getRequest()->is('post')) {

            $this->saveOption('google_place');
            $this->saveOption('google_map_api');
            $this->saveOption('facebook_api');
            $this->saveOption('twitter_api');

            $this->saveOption('ftp_root_path');
            $this->saveOption('photo_root_path');
            $this->saveOption('a5_price');
            $this->saveOption('a4_price');
            $this->saveOption('a2_price');
            $this->saveOption('digital_price');

            $this->saveOption('ads_upload_path');

            $this->Flash->success(__('Options saved'));
        }

        $data = array_reduce($query = $this->Options->find()->toArray(), function ($result, $item) {
            $result[$item['option_key']] = $item['option_value'];
            return $result;
        }, array());
        $this->set('options',$data);
    }

    function saveOption($key)
    {
        // a4 photo's price
        $value = $this->getRequest()->getData($key);
        $entity = $this->Options->findByOptionKey($key)->first();
        if($entity == null) {
            $entity = $this->Options->newEntity([
                'option_key' => $key,
                'option_value' => $value
            ]);
        } else {
            $entity->option_value = $value;
        }

        $this->Options->save($entity);
    }




}
