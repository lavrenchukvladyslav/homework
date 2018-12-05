<?php

namespace src;

Class Finish{



//    public function addTime($database)
//    {
//        foreach ($database as $item => $value) {
//            $timestamp = mt_rand(1, time());
//            $randomDate = date("H:i:s", $timestamp);
//            $database[$item]['time'] = $randomDate;
//            $penalty = mt_rand(0, 5);
//            $database[$item]['penalty'] = $penalty;
//
//
//            $database[$item]['time'];
//            $parts = explode(":", $database[$item]['time']);
//            $finalTimeSeconds = $parts[1] + $database[$item]['penalty'];
//
//            if ($finalTimeSeconds > 59) {
//                $parts[0] = $parts[0] + 1;
//                $finalTimeSeconds = $finalTimeSeconds - 60;
//
//            } else {
//                $parts[0] = $parts[0] + 0;
//                $parts[1] = $parts[1] + $database[$item]['penalty'];
//            }
//            if ($parts[0] < 10) {
//                $parts[0] = '0' . $parts[0];
//            }
//            if ($finalTimeSeconds < 10) {
//                $finalTimeSeconds = '0' . $finalTimeSeconds;
//            }
//            $database[$item]['time'];
//            $database[$item]['penalty'];
//            $finalTime = $parts[0] . ":" . $finalTimeSeconds . ":" . $parts[2];
//            $finalTime2 = $parts[0] . $finalTimeSeconds . $parts[2];
//            $database[$item]['final_time'] = $finalTime;
//            $finalTime2 = intval($finalTime2);
//            $database[$item]['place'] = $finalTime2;
//
//            $database[$item]['final_time2'] = $finalTime;
//
//        } return $database;
//    }
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
//        if ($round == 1){
//            echo '<h1 style="text-align: center">'.$round.' ROUND'.'</h1>';
//        } elseif ($round !== 1){
//            echo '<h1 style="text-align: center">'.$round.' ROUNDS'.'</h1>';
//        }
        echo $round;

    }


    public function addTime($database, $round)
    {
//        $roundcount =0;
//        $roundName =1;
        foreach ($database as $item => $value) {
//            $roundcount = 0;
//            $database[$item][$roundcount]['roundName'] = 0;
            $i=0;
            for ($roundcount = 1; $roundcount < $round+1; $roundcount++) {
                $database[$item][$roundcount]['roundcount'] = $roundcount;
                $database[$item][$roundcount]['roundName'] = $database[$item][$roundcount]['roundName'] +1;
                $database[$item][$roundcount]['time'] = mt_rand(1, 200);
                $database[$item][$roundcount]['penalty'] = mt_rand(0, 5);
                $database[$item][$roundcount]['final_time'] = $database[$item][$roundcount]['time'] + $database[$item][$roundcount]['penalty'];
//                $database[$item][$i]['final_time'] = $database[$item][$roundcount]['final_time'];
                $database[$item]['best_time'] = min(
                $database[$item][$i]['final_time'],$database[$item][2]['final_time'],$database[$item][3]['final_time'],$database[$item][4]['final_time'],$database[$item][5]['final_time']
                );
            }
        } return $database;
    }
    public function getBestTime($database, $round){

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
            return $new_array[$i];
        }
    }
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
            asort($sortable_array);
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
        $newArray=[];
        $newArray = array_merge ($database[0],$database[1],$database[2]);
        return $newArray;

    }
}