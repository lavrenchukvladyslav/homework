<?php
require_once __DIR__.'/../data/database.php';
//namespace Clases;
//$base = ksort($database['class']);

//for ($i = 0; $i <= 18; $i++){
//    echo $a = array_values($database);
//    var_dump($a);
//}
//$arr =[];
//foreach ($database as $item){
//
//     $mClass = $item['class'];
//    $arr =[][$mClass];
//}
//var_dump($arr);
Class Sort1{

    public function __construct($database)
    {
        echo '<table>';

        foreach ($database as $item){
                if ($item['class'] === 'A'){
                    echo '<tr>';
                    echo '<td>';
                    echo $item['id'];
                    echo '<td>';

                    echo '<td>';
                    echo $item['class'];
                    echo '<td>';

                    echo '<td>';
                    echo $item['name'];
                    echo '<td>';

                    echo '<td>';
                    echo $item['vehicle'];
                    echo '<td>';
                    echo '</tr>';
                }
        }




        echo '</table>';
    }


}

Class Sort2{

    public function __construct($database)
    { echo '<table>';

        foreach ($database as $item){
            if ($item['class'] === 'B'){
                echo '<tr>';
                echo '<td>';
                echo $item['id'];
                echo '<td>';

                echo '<td>';
                echo $item['class'];
                echo '<td>';

                echo '<td>';
                echo $item['name'];
                echo '<td>';

                echo '<td>';
                echo $item['vehicle'];
                echo '<td>';
                echo '</tr>';
            }
        }




        echo '</table>';
    }


}
Class Sort3{

    public function __construct($database)
    { echo '<table>';

        foreach ($database as $item){
            if ($item['class'] === 'C'){
                echo '<tr>';
                echo '<td>';
                echo $item['id'];
                echo '<td>';

                echo '<td>';
                echo $item['class'];
                echo '<td>';

                echo '<td>';
                echo $item['name'];
                echo '<td>';

                echo '<td>';
                echo $item['vehicle'];
                echo '<td>';
                echo '</tr>';
            }
        }




        echo '</table>';
    }


}
//Class FinishA{
//    public function __construct($database)
//    {
//        $database[''];
//        arsort($database);
//        echo '<table>';
//        foreach ($database as $item => $value){
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
//            if ($finalTimeSeconds > 59){
//               $parts[0] = $parts[0] + 1;
//                $finalTimeSeconds = $finalTimeSeconds - 60;
//
//            } else {
//                $parts[0] = $parts[0] + 0;
//                $parts[1] = $parts[1] + $database[$item]['penalty'];
//            }
//            if ($parts[0] < 9){
//                $parts[0] = '0'.$parts[0];
//            }
//            if ($finalTimeSeconds < 9){
//                $finalTimeSeconds = '0'.$finalTimeSeconds;
//            }
//            $database[$item]['time'];
//            $database[$item]['penalty'];
//            $finalTime = $parts[0].":".$finalTimeSeconds.":".$parts[2];
//            $finalTime2 = $parts[0].$finalTimeSeconds.$parts[2];
//            $database[$item]['final_time'] = $finalTime;
//            $database[$item]['place'] = $parts[0].$finalTimeSeconds.$parts[2];
//
//            $database[$item]['final_time2'] = $finalTime;
//
//            $winers = [];
//
//            array_push($winers, "$finalTime2");
//
//
//
//
//
//
////            if ($item['class'] === 'A'){
//                echo '<tr>';
//                echo '<td>';
//                echo $database[$item]['id'];
//                echo '<td>';
//
//                echo '<td>';
//                echo $database[$item]['class'];
//                echo '<td>';
//
//                echo '<td>';
//                echo $database[$item]['name'];
//                echo '<td>';
//
//                echo '<td>';
//                echo $database[$item]['vehicle'];
//                echo '<td>';
//                echo '<td>';
//                echo $database[$item]['time'];
//                echo '<td>';
//                echo '<td>';
//                echo $database[$item]['penalty'];
//                echo '<td>';
//                echo '<td>';
//                echo $database[$item]['final_time'];
//                echo '<td>';
////            $winers= asort($winers[0]);
//            echo '<td>';
//            echo $winers[0];
//            echo '<td>';
//                echo '</tr>';
//                asort($winers);
//            echo ($winers);
////            var_dump($winers);
//            var_dump($winers[0]);
//            }
////        }
//
//
//        echo '<table>';
//    }
//    function hi (){
//        echo 'hu';
//    }
//}




//Class ChampionsA extends finishA{
//    function ola (){
//        echo 1;
//    }
//}




//
//Class Finish1{
//
//    public function printRaceResultsAClass ($database){
//        echo '<table>';
//
//        foreach ($database as $item){
//            if ($item['class'] === 'A'){
//                echo '<tr>';
//                echo '<td>';
//                echo $item['id'];
//                echo '<td>';
//
//                echo '<td>';
//                echo $item['class'];
//                echo '<td>';
//
//                echo '<td>';
//                echo $item['name'];
//                echo '<td>';
//
//                echo '<td>';
//                echo $item['vehicle'];
//                echo '<td>';
//                echo '<td>';
//                echo $item['time'];
//                echo '<td>';
//                echo '<td>';
//                echo $item['penalty'];
//                echo '<td>';
//                echo '<td>';
//                echo $item['final_time'];
//                echo '<td>';
//                echo '</tr>';
//            }
//        }
//
//
//
//
//        echo '</table>';
//    }
//
//
//
//}