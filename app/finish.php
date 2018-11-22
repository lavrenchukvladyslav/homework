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


$round = $_POST['round'];
if ($round === ""){
    $round =1;
} else {
    $round = $_POST['round'];
}
var_dump($round);


$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader);
$template = $twig->load('finish.html.twig');
$finish = new Finish($database, $round);
$database = $finish->addTime($database,$round);
$database = $finish->sortByTime($database);

// render twig templates
echo $template->render(array('database' => $database, 'sort' => 'A', 'round' => $round));
echo $template->render(array('database' => $database, 'sort' => 'B', 'round' => $round));
echo $template->render(array('database' => $database, 'sort' => 'C', 'round' => $round));




//    $finish->renderFinishTable($database,'A',$round);
//    $finish->renderWinnersTable($database,'A',$round);
//    $finish->renderFinishTable($database,'B',$round);
//    $finish->renderWinnersTable($database,'B',$round);
//    $finish->renderFinishTable($database,'C',$round);
//    $finish->renderWinnersTable($database,'C',$round);
//    $finish->CalculateRoundsTime($database,$round);



echo '<br>';



