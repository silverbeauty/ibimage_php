<?php
namespace App\Controller\Component;
use Cake\Controller\Component;

class FileComponent extends Component
{
    /**
     * @param $root
     */
    public function getDirectories($root)
    {

        $dirs = [];
        $dir = dir($root);

        while (false !== ($entry = $dir->read())) {
            if ($entry != '.' && $entry != '..') {
                if (is_dir($root . '/' .$entry)) {
                    $dirs[] = $entry;
                }
            }
        }
        $dir->close();

        return $dirs;
    }
}