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

    function createBranch(&$parents, $children, $options) {
        $tree = array();

        $key = $options['key'];
        $child_key = $options['children'];

        foreach ($children as $child) {
            if (isset($parents[$child[$key]])) {
                $child[$child_key] =
                    $this->createBranch($parents, $parents[$child[$key]], $options);
            }
            $tree[] = $child;
        }
        return $tree;
    }

    /* Initialization */
    function createTree($flat, $root = 0) {

        $parents = array();
        foreach ($flat as $a) {
            if($a['parent_id'] == null)
                $a['parent_id'] = 0;
            $parents[$a['parent_id']][] = $a;
        }


        return $this->createBranch($parents, $parents[$root]);
    }


    public function toTreeArray($array
        , $options = array("key" => 'id', 'parent' => 'parent_id', 'children' => 'children', 'root' => 0)) {
        $parents = array();


        $root = $options['root'];
        $parent = $options['parent'];

        foreach ($array as $a) {
            if($a[$parent] == null)
                $a[$parent] = 0;
            $parents[$a[$parent]][] = $a;
        }


        return $this->createBranch($parents, $parents[$root], $options);
    }

}