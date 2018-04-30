<?php

namespace App\View\Helper;

use Cake\View\Helper;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Log\Log;


class SystemHelper
{
    /**
     * data format
     * [{id: 1, value: 'c:/xampp'
     * , children: [
     *  {id: 1, value: 'c:/xampp/htdocs'}
     * ]
     * ]
     * @param $data
     * @param $option
     * @return string
     */
    public function tree($data, $option)
    {
        if ($data == null || is_array($data)) {
            return '';
        }

        // key field
        $key = $option["key"] || 'id';
        // value field
        $value = $option["value"] || 'name';
        // children key field
        $children = $option["children"] || 'children';

        echo <<< HTML
<div class="dropdown-menu" aria-labelledby="dLabel">
<div class="treeview-checkbox">
<ul>
HTML;
        foreach ($data as $item) {
            $this->_render($item);
        }

        echo <<< HTML
</ul>
</div>
</div>
HTML;
    }

    private function _render($data, $key, $value, $children) {
        foreach ($data as $item): ?>
            <li data-value="<?= $item[$key]?>"><span><?= $item[$value]?></span></li>
            <?php if (count($item[$children])):?>
                <ul>
                    <?php $this->_render($item[$children], $key, $value, $children) ?>
                </ul>
            <?php endif;?>
        <?php endforeach;
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
