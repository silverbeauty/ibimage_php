<?php

namespace App\View\Helper;

use App\View\Helper\CommonHelper;
use Cake\View\Helper;
use Cake\Log\Log;


class TreeHelper extends CommonHelper
{

    public function toHtmlAsCallback($items, $options, $callback) {

        $options['key']          = empty($options['key']) ? 'id' : $options['key'];
        $options['display']        = empty($options['display']) ? 'name' : $options['display'];
        $options['children']    = empty($options['children']) ? 'children' : $options['children'];
        $options['props']        = empty($options['props']) ? [] : $options['props'];

        $index = 0;
        $deep = 0;

        foreach ($items as $item) {
            $index++;
            $callback($item, $deep, $index);
            if (!empty($item[$options['children']])) {
                $this->_toHtmlAsCallback($item[$options['children']], $callback, $options, $index, $deep);
            }
        }
    }

    private function _toHtmlAsCallback($items, $callback, $options, &$index, $deep) {
        $deep++;
        foreach ($items as $item) {
            $index++;
            $callback($item, $deep, $index);
            if (!empty($item[$options['children']])) {
                $this->_toHtmlAsCallback($item[$options['children']], $callback, $options, $index, $deep);
            }
        }


    }

    public function toTreeAsCallback($items, $options, $callback) {

        $options['key']          = empty($options['key']) ? 'id' : $options['key'];
        $options['display']        = empty($options['display']) ? 'name' : $options['display'];
        $options['children']    = empty($options['children']) ? 'children' : $options['children'];
        $options['props']        = empty($options['props']) ? [] : $options['props'];

        $index = 0;
        $deep = 0;

        foreach ($items as $item) {
            $index++;

            $callback($item, $deep, $index);
            if (!empty($item[$options['children']])) {
                $deep++;
                echo '<ul>';
                $this->_toTreeAsCallback($item[$options['children']], $callback, $options, $index, $deep);
                echo '</ul>';
            }
            echo '</li>';
        }
    }

    private function _toTreeAsCallback($items, $callback, $options, &$index, $deep) {
        foreach ($items as $item) {
            $index++;
            $callback($item, $deep, $index);
            if (!empty($item[$options['children']])) {
                $deep++;
                echo '<ul>';
                $this->_toHtmlAsCallback($item[$options['children']], $callback, $options, $index, $deep++);
                echo '</ul>';
            }
            echo '</li>';
        }
    }


    public function getDirectory($root_path) {
        $files = glob($root_path . "*");

        $dirs = [];

        foreach($files as $file)
        {
            //check to see if the file is a folder/directory
            if(is_dir($file))
            {
                $dirs[] = $file;
            }
        }
    }

    public function getOption($option_key) {

    }

}
