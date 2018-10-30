<?php

namespace src;

Class FinishA{
    public function __construct($database)
    {
//        require_once __DIR__.'/../data/database.php';
        arsort($database);
        echo 1;
        echo '<table>';
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
            if ($parts[0] < 9){
                $parts[0] = '0'.$parts[0];
            }
            if ($finalTimeSeconds < 9){
                $finalTimeSeconds = '0'.$finalTimeSeconds;
            }
            $database[$item]['time'];
            $database[$item]['penalty'];
            $finalTime = $parts[0].":".$finalTimeSeconds.":".$parts[2];
            $finalTime2 = $parts[0].$finalTimeSeconds.$parts[2];
            $database[$item]['final_time'] = $finalTime;
            $database[$item]['place'] = $parts[0].$finalTimeSeconds.$parts[2];

            $database[$item]['final_time2'] = $finalTime + 501;


            $winers = [];

            array_push($winers, "$finalTime2");






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
                        echo '<td>';
                        echo  $database[$item]['final_time2'];
                        echo '<td>';
//            $winers= asort($winers[0]);
            echo '<td>';
            echo $winers[0];
            echo '<td>';
                echo '</tr>';
                asort($winers);
            echo ($winers);
//            var_dump($winers);
//            var_dump($winers[0]);
            }
        }


        echo '<table>';
    }
    function hi (){
        echo 'hu';
    }
}
Class FinishB{
    public function __construct($database)
    {
//        require_once __DIR__.'/../data/database.php';
        arsort($database);
        echo 1;
        echo '<table>';
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
            if ($parts[0] < 9){
                $parts[0] = '0'.$parts[0];
            }
            if ($finalTimeSeconds < 9){
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


            $winers = [];

            array_push($winers, "$finalTime2");






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
                echo '<td>';
                echo  $database[$item]['place'];
                echo '<td>';
//            $winers= asort($winers[0]);
                echo '<td>';
                echo $winers[0];
                echo '<td>';
                echo '</tr>';
//                $winers[$item] =$winers;
                asort($winers);
                var_dump($winers);
//                echo ($winers);
//            var_dump($winers);
//            var_dump($winers[0]);
            }
        }


        echo '<table>';
    }
    function hi ($winers){
        echo 'h123u';
        foreach ($winers as $item){
            echo $winers[$item];
        }
    }
}
Class FinishC{
    public function __construct($database)
    {
//        require_once __DIR__.'/../data/database.php';
        arsort($database);
        echo 1;
        echo '<table>';
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
            if ($parts[0] < 9){
                $parts[0] = '0'.$parts[0];
            }
            if ($finalTimeSeconds < 9){
                $finalTimeSeconds = '0'.$finalTimeSeconds;
            }
            $database[$item]['time'];
            $database[$item]['penalty'];
            $finalTime = $parts[0].":".$finalTimeSeconds.":".$parts[2];
            $finalTime2 = $parts[0].$finalTimeSeconds.$parts[2];
            $database[$item]['final_time'] = $finalTime;
            $database[$item]['place'] = $parts[0].$finalTimeSeconds.$parts[2];

            $database[$item]['final_time2'] = $finalTime + 501;


            $winers = [];

            array_push($winers, "$finalTime2");






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
                echo '<td>';
                echo  $database[$item]['final_time2'];
                echo '<td>';
//            $winers= asort($winers[0]);
                echo '<td>';
                echo $winers[0];
                echo '<td>';
                echo '</tr>';
                asort($winers);
                echo ($winers);
//            var_dump($winers);
//            var_dump($winers[0]);
            }
        }


        echo '<table>';
    }
    function hi (){
        echo 'hu';
    }
}