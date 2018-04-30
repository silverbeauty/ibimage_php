<?php

namespace App\Model\Entity;
use Cake\ORM\Entity;


class Option extends Entity
{
    protected $_accessible = [
        'option_key' => true,
        'option_value' => true
    ];
}