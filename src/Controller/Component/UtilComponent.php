<?php
/**
 * Created by PhpStorm.
 * User: h
 * Date: 5/1/2018
 * Time: 11:58 AM
 */

namespace App\Controller\Component;
use Cake\Controller\Component;

class UtilComponent extends Component
{

    public function toTreeArray($array, $options = array("key" => 'id', 'parent' => 'parent_id', 'children' => 'children')) {

        $arr_tree = array();
        $arr_tmp = array();

        foreach ($array as $item) {
            $parentid = $item[$options['parent']];

            $id = $item[$options['key']];

            if ($parentid  == 0 || $parentid == null)
            {
                $arr_tree[$id] = $item;
                $arr_tmp[$id] = &$arr_tree[$id];
            }
            else
            {
                if (!empty($arr_tmp[$parentid]))
                {
                    if(!$arr_tmp[$parentid][$options['children']]) {
                        $arr_tmp[$parentid][$options['children']] = [];
                    }
                    $arr_tmp[$parentid]['children'][$id] = $item;
                    $arr_tmp[$id] = &$arr_tmp[$parentid][$options['children']][$id];
                }
            }
        }

        unset($arr_tmp);
        return $arr_tree;

    }

}