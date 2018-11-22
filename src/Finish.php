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

        foreach ($database as $item => $value) {
            $database[$item]['time'] = mt_rand(1, 200);
            $database[$item]['penalty'] = mt_rand(0, 5);
            $database[$item]['final_time'] = $database[$item]['time'] + $database[$item]['penalty'];
            $database[$item]['best_time'] = $database[$item]['final_time'];
            switch($round) {
                case 2:
                    $database[$item]['time2'] = mt_rand(1, 200);
                    $database[$item]['penalty2'] = mt_rand(0, 5);
                    $database[$item]['final_time2'] = $database[$item]['time2'] + $database[$item]['penalty2'];
                    $database[$item]['best_time'] = min($database[$item]['final_time'],$database[$item]['final_time2']);
                break;
                case 3:
                    $database[$item]['time2'] = mt_rand(1, 200);
                    $database[$item]['penalty2'] = mt_rand(0, 5);
                    $database[$item]['final_time2'] = $database[$item]['time2'] + $database[$item]['penalty2'];
                    $database[$item]['time3'] = mt_rand(1, 200);
                    $database[$item]['penalty3'] = mt_rand(0, 5);
                    $database[$item]['final_time3'] = $database[$item]['time3'] + $database[$item]['penalty3'];
                    $database[$item]['best_time'] = min($database[$item]['final_time'],$database[$item]['final_time2'],$database[$item]['final_time3']);
                break;
                case 4:
                    $database[$item]['time2'] = mt_rand(1, 200);
                    $database[$item]['penalty2'] = mt_rand(0, 5);
                    $database[$item]['final_time2'] = $database[$item]['time2'] + $database[$item]['penalty2'];
                    $database[$item]['time3'] = mt_rand(1, 200);
                    $database[$item]['penalty3'] = mt_rand(0, 5);
                    $database[$item]['final_time3'] = $database[$item]['time3'] + $database[$item]['penalty3'];
                    $database[$item]['time4'] = mt_rand(1, 200);
                    $database[$item]['penalty4'] = mt_rand(0, 5);
                    $database[$item]['final_time4'] = $database[$item]['time4'] + $database[$item]['penalty4'];
                    $database[$item]['best_time'] = min($database[$item]['final_time'],$database[$item]['final_time2'],$database[$item]['final_time3'],$database[$item]['final_time4']);
                    break;
                case 5:
                    $database[$item]['time2'] = mt_rand(1, 200);
                    $database[$item]['penalty2'] = mt_rand(0, 5);
                    $database[$item]['final_time2'] = $database[$item]['time2'] + $database[$item]['penalty2'];
                    $database[$item]['time3'] = mt_rand(1, 200);
                    $database[$item]['penalty3'] = mt_rand(0, 5);
                    $database[$item]['final_time3'] = $database[$item]['time3'] + $database[$item]['penalty3'];
                    $database[$item]['time4'] = mt_rand(1, 200);
                    $database[$item]['penalty4'] = mt_rand(0, 5);
                    $database[$item]['final_time4'] = $database[$item]['time4'] + $database[$item]['penalty4'];
                    $database[$item]['time5'] = mt_rand(1, 200);
                    $database[$item]['penalty5'] = mt_rand(0, 5);
                    $database[$item]['final_time5'] = $database[$item]['time5'] + $database[$item]['penalty5'];
                    $database[$item]['best_time'] = min($database[$item]['final_time'],$database[$item]['final_time2'],$database[$item]['final_time3'],$database[$item]['final_time4'],$database[$item]['final_time5']);
                    break;
            }
        } return $database;
    }








    public function sortByTime ($database){
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
                $new_array[$k] = $database[$k];
            }
        }

        return $new_array;
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
        echo '<th>';
        echo 'PENALTY2';
        echo '<th>';
        echo '<th>';
        echo 'RESULT TIME2';
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
                echo '<td>';
                echo $database[$item]['time2'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty2'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time2'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['time3'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty3'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time3'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['time4'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty4'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time4'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['time5'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['penalty5'];
                echo '<td>';
                echo '<td>';
                echo $database[$item]['final_time5'];
                echo '<td>';
                echo '</tr>';
//                asort($winers);
//                echo($winers);
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
//                asort($winers);
//                echo ($winers);
            }
        }

        echo '</table>';
}
}