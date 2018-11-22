<?php

use src\Sort;
require_once '../data/database.php';
require_once '../vendor/autoload.php';

$sort = new Sort();
$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader);
$template = $twig->load('start.html.twig');


// render twig templates
echo $template->render(array('database' => $database, 'sort' => 'A'));
echo $template->render(array('database' => $database, 'sort' => 'B'));
echo $template->render(array('database' => $database, 'sort' => 'C'));



