<?php

//require_once __DIR__.'/../src/Sort.php';
use src\Sort;
require_once '../data/database.php';
require_once '../vendor/autoload.php';
$sort = new Sort();

$sort->renderStart($database, 'A');
$sort->renderStart($database, 'B');
$sort->renderStart($database, 'C');

