<?php
require_once __DIR__.'/../data/database.php';
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
Class FinishA{

    public function __construct($database)
    {
        echo '<table>';
        foreach ($database as $item){
            $timestamp = mt_rand(1, time());
            $randomDate = date("H:i:s", $timestamp);
            $item['time'] = $randomDate;
            $penalty = mt_rand(0, 5);
            $item['penalty'] = $penalty;


            $item['time'];
            $parts = explode(":", $item['time']);
            $finalTimeSeconds = $parts[1] + $item['penalty'];

            if ($finalTimeSeconds > 59){
               $parts[0] = $parts[0] + 1;
                $finalTimeSeconds = $finalTimeSeconds - 60;

            } else {
                $parts[0] = $parts[0] + 0;
                $parts[1] = $parts[1] + $item['penalty'];
            }
            if ($parts[0] < 9){
                $parts[0] = '0'.$parts[0];
            }
            if ($finalTimeSeconds < 9){
                $finalTimeSeconds = '0'.$finalTimeSeconds;
            }
            $item['time'];
            $item['penalty'];
            $finalTime = $parts[0].":".$finalTimeSeconds.":".$parts[2];
            $item['final_time'] = $finalTime;


            if ($item['class'] === 'V'){
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
                echo '<td>';
                echo $item['time'];
                echo '<td>';
                echo '<td>';
                echo $item['penalty'];
                echo '<td>';
                echo '<td>';
                echo $item['final_time'];
                echo '<td>';
                echo '</tr>';
            }



        }
        echo '<table>';
    }

    function hi (){

        echo 12;
    }






}
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