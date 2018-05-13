<?php
namespace App\Controller\Component;
use Cake\Controller\Component;

class FileComponent extends Component
{
    /**
     * @param $root
     */
    public function getDirectories($dir, &$results = array(), $rootOnly = true)
    {

        $files = scandir($dir);
        foreach($files as $key => $value){
            $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
            if(!is_dir($path)) {
                //$results[] = $path;
                continue;
            } else if($value != "." && $value != "..") {

                $val = ['name' => $value, 'path' => $dir.DIRECTORY_SEPARATOR.$value];

                if($rootOnly) {
                    $results[] = $val;
                    continue;
                }

                $val['children'] = array();
                $this->getDirectories($path, $val['children'], $rootOnly);
                $results[] = $val;
            }
        }

        return $results;

//        $dir = dir($root);
//
//        while (false !== ($entry = $dir->read())) {
//            if ($entry != '.' && $entry != '..') {
//                if (is_dir($root . DIRECTORY_SEPARATOR .$entry)) {
//                    $val = ['name' => $entry, 'path' => $root . DIRECTORY_SEPARATOR .$entry];
//                    $dirs[] = &$val ;
//
//                    if($rootOnly)
//                        continue;
//                    $val['children'] = $this->getDirectories($root . DIRECTORY_SEPARATOR .$entry, $rootOnly);
//                }
//            }
//        }
//        $dir->close();
//        return $dirs;
    }

    function getDirContents($dir, &$results = array()){
        $files = scandir($dir);
        foreach($files as $key => $value){
            $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
            if(!is_dir($path)) {
                $results[] = $path;
            } else if($value != "." && $value != "..") {
                getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }



}