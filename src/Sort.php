<?php
//require_once __DIR__.'/../data/database.php';

namespace src;

Class Sort{

    public function sortByClass ($database){
        $new_array = array();
        $sortable_array = array();

        if (count($database) > 0) {
            foreach ($database as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == 'class') {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }
            foreach ($sortable_array as $k => $v) {
                if (($database[$k]['class'] == 'A')){

                    $new_array[0][$k] = $database[$k];
                }
                if (($database[$k]['class'] == 'B')){

                    $new_array[1][$k] = $database[$k];
                }
                if (($database[$k]['class'] == 'C')){

                    $new_array[2][$k] = $database[$k];
                }
            }
        }
        return $new_array;
    }
    public function mergeArrays($database){
        $newArray = array_merge ($database[0],$database[1],$database[2]);
        return $newArray;

    }
}


