<form action="" method="POST">
    <h3>Select rounds count</h3>
    <input type="number" name="round">
    <button type="submit">submit</button>
</form>


<?php


//namespace src;
//use Sort1;
//use Sort2;
//use Sort3;

use src\Finish;
require_once __DIR__.'/../data/database.php';
//require_once __DIR__.'/../src/Finish.php';
require_once '../vendor/autoload.php';

$roundLenght = $_POST['round'];

if ($roundLenght === ""){
    $roundLenght =1;
} else {
    $roundLenght = $_POST['round'];
}
var_dump($roundLenght);
for ($round = 1; $round <= $roundLenght; $round++) {

    echo '<h1>'.'Round '.$round.'</h1>';


    $finish = new Finish($database, $round);
    $database = $finish->addTime($database);
    $database = $finish->sortByTime($database);

    $finish->renderFinishTable($database,'A',$round);
    $finish->renderWinnersTable($database,'A',$round);
    $finish->renderFinishTable($database,'B',$round);
    $finish->renderWinnersTable($database,'B',$round);
    $finish->renderFinishTable($database,'C',$round);
    $finish->renderWinnersTable($database,'C',$round);
//    $finish->CalculateRoundsTime($database,$round);
}


