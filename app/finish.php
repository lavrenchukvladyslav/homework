<?php

//namespace src;
//use Sort1;
//use Sort2;
//use Sort3;

use src\Finish;
require_once __DIR__.'/../data/database.php';
//require_once __DIR__.'/../src/Finish.php';
require_once '../vendor/autoload.php';
$finish = new Finish($database);
$database = $finish->addTimeAndSortByTime($database);
$finish->renderFinishTable($database,'A');
$finish->renderWinnersTable($database,'A');
$finish->renderFinishTable($database,'B');
$finish->renderWinnersTable($database,'B');
$finish->renderFinishTable($database,'C');
$finish->renderWinnersTable($database,'C');
