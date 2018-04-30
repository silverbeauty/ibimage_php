<?php

namespace App\Controller\Component;


use Cake\Controller\Component;
use Cake\ORM\Locator\TableLocator;
use Cake\ORM\TableRegistry;

class OptionComponent extends Component
{

    /**
     * getting the option value
     * @param $key
     * @return bool
     */
    public function getOption($key) {

        $optionsTable = TableRegistry::get('Options');
        $entity = $optionsTable->findByOptionKey($key)->first();
        if($entity == null) {
            return false;
        } else {
            return $entity->option_value;
        }

    }
}