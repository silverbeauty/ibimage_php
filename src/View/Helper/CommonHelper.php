<?php
/**
 * Created by PhpStorm.
 * User: h
 * Date: 5/1/2018
 * Time: 9:42 PM
 */

namespace App\View\Helper;
use Cake\View\Helper;

class CommonHelper extends Helper
{
    public function defaultValue($val, $default = '') {
        return empty($val) ? $default : $val;
    }
}