<?php

use src\Sort;
require_once __DIR__.'/../data/database.php';
require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader);
$twig = new Twig_Environment($loader, array(
    'debug' => true,
));
$twig->addExtension(new Twig_Extension_Debug());

$template = $twig->load('start.html.twig', ['round' => $_POST['round']]);
$finish = new Sort();

$database = $finish->splitArraysByClass($database);
$database = $finish->mergeArrays($database);
$newArray = array_merge ($database[0],$database[1],$database[2]);

echo $template->render(array('database' => $database));



