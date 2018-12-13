<?php

namespace src;

Class Finish extends Sort {

    public function addRoundsCount (){
        $round = $_POST['round'];
        if ($round === "" || $round === 0){
            $round =1;
        } else {
            $round = $_POST['round'];
        }
        return $round;
    }
    public function renderRoundsCountHeader($round){
        echo $round;

    }


    public function addTime($database, $round)
    {
        foreach ($database as $item => $value) {
            for ($roundcount = 1; $roundcount < $round+1; $roundcount++) {
                $database[$item]['roundcounts'] = $roundcount;
                $database[$item]['results'][$roundcount]['roundcounts'] = $roundcount;
                $database[$item]['results'][$roundcount]['time'] = mt_rand(1, 200);
                $database[$item]['results'][$roundcount]['penalty'] = mt_rand(0, 5);
                $database[$item]['results'][$roundcount]['final_time'] = $database[$item]['results'][$roundcount]['time'] + $database[$item]['results'][$roundcount]['penalty'];
            }
            $database[$item]['best_time'] = $database[$item]['results'][1]['final_time'];
        }

        return $database;
    }


    public function sortByTime ($database, $i){
        $new_array = array();
        $sortable_array = array();

        if (count($database) > 0) {
            foreach ($database as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == 'best_time') {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }
            asort($sortable_array);

            foreach ($sortable_array as $k => $v) {
                $new_array[$i][$k] = $database[$k];
            }

        }
        return $new_array[$i];
    }
}