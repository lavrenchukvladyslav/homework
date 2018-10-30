<?php

namespace src;

Class Finish{
    public function __construct($database)
    {
        foreach ($database as $item => $value){
            $timestamp = mt_rand(1, time());
            $randomDate = date("H:i:s", $timestamp);
            $database[$item]['time'] = $randomDate;
            $penalty = mt_rand(0, 5);
            $database[$item]['penalty'] = $penalty;


            $database[$item]['time'];
            $parts = explode(":", $database[$item]['time']);
            $finalTimeSeconds = $parts[1] + $database[$item]['penalty'];

            if ($finalTimeSeconds > 59){
                $parts[0] = $parts[0] + 1;
                $finalTimeSeconds = $finalTimeSeconds - 60;

            } else {
                $parts[0] = $parts[0] + 0;
                $parts[1] = $parts[1] + $database[$item]['penalty'];
            }
            if ($parts[0] < 10){
                $parts[0] = '0'.$parts[0];
            }
            if ($finalTimeSeconds < 10){
                $finalTimeSeconds = '0'.$finalTimeSeconds;
            }
            $database[$item]['time'];
            $database[$item]['penalty'];
            $finalTime = $parts[0].":".$finalTimeSeconds.":".$parts[2];
            $finalTime2 = $parts[0].$finalTimeSeconds.$parts[2];
            $database[$item]['final_time'] = $finalTime;
            $finalTime2 = intval($finalTime2);
            $database[$item]['place'] = $finalTime2;

            $database[$item]['final_time2'] = $finalTime;


            array_push($winers, "$finalTime2");
            array_push($database[$item]['final_time2'], "$finalTime2");






        }
        function array_sort($array, $on, $order=SORT_ASC){

            $new_array = array();
            $sortable_array = array();

            if (count($array) > 0) {
                foreach ($array as $k => $v) {
                    if (is_array($v)) {
                        foreach ($v as $k2 => $v2) {
                            if ($k2 == $on) {
                                $sortable_array[$k] = $v2;
                            }
                        }
                    } else {
                        $sortable_array[$k] = $v;
                    }
                }

                switch ($order) {
                    case SORT_ASC:
                        asort($sortable_array);
                        break;
                    case SORT_DESC:
                        sort($sortable_array);
                        break;
                }

                foreach ($sortable_array as $k => $v) {
                    $new_array[$k] = $array[$k];
                }
            }

            return $new_array;
        }
        $database = array_sort($database, 'place', SORT_ASC);
        echo '<h1>Category A</h1>';
        echo '<table>';
        foreach ($database as $item => $value){
            if ($database[$item]['class'] === 'A'){
                echo '<tr>';
                echo '<td>';
                echo $database[$item]['id'];
                echo '<td>';

                echo '<td>';
                echo $database[$item]['class'];
                echo '<td>';

                echo '<td>';
                echo $database[$item]['name'];
                echo '<td>';

                echo '<td>';
                echo $database[$item]['vehicle'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['time'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time'];
                echo '<td>';
                echo '</tr>';
                asort($winers);
                echo ($winers);
            }
        }

        echo '</table>';

        echo '<h1>Winners A</h1>';
        echo '<table>';
        $i=0;
        foreach ($database as $item => $value){

            if ($database[$item]['class'] === 'A'){
                $i++;
                if ($i == 4) break;
                echo '<tr>';
                echo '<td>';
                echo $database[$item]['id'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['class'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['name'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['vehicle'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['time'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time'];
                echo '<td>';
                echo '</tr>';
                asort($winers);
                echo ($winers);
            }
        }

        echo '</table>';



        echo '<h1>Category B</h1>';
        echo '<table>';
        foreach ($database as $item => $value){
            if ($database[$item]['class'] === 'B'){
                echo '<tr>';
                echo '<td>';
                echo $database[$item]['id'];
                echo '<td>';

                echo '<td>';
                echo $database[$item]['class'];
                echo '<td>';

                echo '<td>';
                echo $database[$item]['name'];
                echo '<td>';

                echo '<td>';
                echo $database[$item]['vehicle'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['time'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time'];
                echo '<td>';
                echo '</tr>';
                asort($winers);
                echo ($winers);
            }
        }

        echo '</table>';

        echo '<h1>Winners B</h1>';
        echo '<table>';
        $i=0;
        foreach ($database as $item => $value){

            if ($database[$item]['class'] === 'B'){
                $i++;
                if ($i == 4) break;
                echo '<tr>';
                echo '<td>';
                echo $database[$item]['id'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['class'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['name'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['vehicle'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['time'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time'];
                echo '<td>';
                echo '</tr>';
                asort($winers);
                echo ($winers);
            }
        }

        echo '</table>';




        echo '<h1>Category C</h1>';
        echo '<table>';
        foreach ($database as $item => $value){
            if ($database[$item]['class'] === 'C'){
                echo '<tr>';
                echo '<td>';
                echo $database[$item]['id'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['class'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['name'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['vehicle'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['time'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time'];
                echo '<td>';
                echo '</tr>';
                asort($winers);
                echo ($winers);
            }
        }

        echo '</table>';



        echo '<h1>Winners C</h1>';
        echo '<table>';
        $i=0;
        foreach ($database as $item => $value){

            if ($database[$item]['class'] === 'C'){
                $i++;
                if ($i == 4) break;
                echo '<tr>';
                echo '<td>';
                echo $database[$item]['id'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['class'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['name'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['vehicle'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['time'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time'];
                echo '<td>';
                echo '</tr>';
                asort($winers);
                echo ($winers);
            }
        }

        echo '</table>';
    }
}