<?php

namespace src;

Class Finish{

    public function addRound($database){

        return $database;
    }



    public function addTime($database)
    {
        foreach ($database as $item => $value) {
            $timestamp = mt_rand(1, time());
            $randomDate = date("H:i:s", $timestamp);
            $database[$item]['time'] = $randomDate;
            $penalty = mt_rand(0, 5);
            $database[$item]['penalty'] = $penalty;


            $database[$item]['time'];
            $parts = explode(":", $database[$item]['time']);
            $finalTimeSeconds = $parts[1] + $database[$item]['penalty'];

            if ($finalTimeSeconds > 59) {
                $parts[0] = $parts[0] + 1;
                $finalTimeSeconds = $finalTimeSeconds - 60;

            } else {
                $parts[0] = $parts[0] + 0;
                $parts[1] = $parts[1] + $database[$item]['penalty'];
            }
            if ($parts[0] < 10) {
                $parts[0] = '0' . $parts[0];
            }
            if ($finalTimeSeconds < 10) {
                $finalTimeSeconds = '0' . $finalTimeSeconds;
            }
            $database[$item]['time'];
            $database[$item]['penalty'];
            $finalTime = $parts[0] . ":" . $finalTimeSeconds . ":" . $parts[2];
            $finalTime2 = $parts[0] . $finalTimeSeconds . $parts[2];
            $database[$item]['final_time'] = $finalTime;
            $finalTime2 = intval($finalTime2);
            $database[$item]['place'] = $finalTime2;

            $database[$item]['final_time2'] = $finalTime;


            array_push($winers, "$finalTime2");
            array_push($database[$item]['final_time2'], "$finalTime2");

        } return $database;





        }

    public function sortByTime ($database){
        $new_array = array();
        $sortable_array = array();

        if (count($database) > 0) {
            foreach ($database as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == 'place') {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }
            asort($sortable_array);

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $database[$k];
            }
        }

        return $new_array;
    }
    public function CalculateRoundsTime ($database){

        foreach ($database as $item => $value) {
            echo $database[$item]['final_time2'];
        }
    }



//    $database = array_sort($database, 'place', SORT_ASC);
    public function renderFinishTable($database, $class, $round)
    {

        echo '<h3>'.'Category '.$class.'</h3>';
        echo '<table>';
        echo '<tr>';
        echo '<th>';
        echo 'ID';
        echo '<th>';

        echo '<th>';
        echo 'CLASS';
        echo '<th>';

        echo '<th>';
        echo 'NAME';
        echo '<th>';

        echo '<th>';
        echo 'VEHICLE';
        echo '<th>';
        echo '<th>';
        echo 'TIME';
        echo '<th>';
        echo '<th>';
        echo 'PENALTY';
        echo '<th>';
        echo '<th>';
        echo 'RESULT TIME';
        echo '<th>';
        echo '</tr>';
        foreach ($database as $item => $value) {
            if ($database[$item]['class'] === $class) {
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
                echo($winers);
            }
        }

        echo '</table>';
    }
    public function renderWinnersTable($database, $class, $round){

        echo '<h3>'.'Winners '.$class.'</h3>';
        echo '<table>';
        $i=0;
        echo '<tr>';
        echo '<th>';
        echo 'ID';
        echo '<th>';

        echo '<th>';
        echo 'CLASS';
        echo '<th>';

        echo '<th>';
        echo 'NAME';
        echo '<th>';

        echo '<th>';
        echo 'VEHICLE';
        echo '<th>';
        echo '<th>';
        echo 'TIME';
        echo '<th>';
        echo '<th>';
        echo 'PENALTY';
        echo '<th>';
        echo '<th>';
        echo 'RESULT TIME';
        echo '<th>';
        echo '</tr>';
        foreach ($database as $item => $value){

            if ($database[$item]['class'] === $class){
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