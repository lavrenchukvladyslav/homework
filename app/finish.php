<?php

use src\Finish;
require_once __DIR__.'/../data/database.php';
require_once '../vendor/autoload.php';








$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader);
$template = $twig->load('finish.html.twig');
$finish = new Finish();
$round = $finish->addRoundsCount();
$finish->renderRoundsCountHeader($database);
$database = $finish->addTime($database,$round);

$database = $finish->sortByClass($database);

$database = $finish->sortByTime($database , 0);

//$database = $finish->mergeArrays($database);

//$newArray = array_merge ($database[0],$database[1],$database[2]);

// render twig templates
echo $template->render(array('database' => $database[0], 'sort' => 'A', 'round' => $round));
//echo $template->render(array('database' => $database, 'sort' => 'B', 'round' => $round));
//echo $template->render(array('database' => $database, 'sort' => 'C', 'round' => $round));




//    $finish->renderFinishTable($database,'A',$round);
//    $finish->renderWinnersTable($database,'A',$round);
//    $finish->renderFinishTable($database,'B',$round);
//    $finish->renderWinnersTable($database,'B',$round);
//    $finish->renderFinishTable($database,'C',$round);
//    $finish->renderWinnersTable($database,'C',$round);
//    $finish->CalculateRoundsTime($database,$round);



