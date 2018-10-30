<?php

//namespace src;
//use Sort1;
//use Sort2;
//use Sort3;

//use src\FinishA;
require_once __DIR__.'/../src/Sort.php';
require_once __DIR__.'/../src/FinishA.php';


//$Sort = new Sort1($database);
$Sort = new src\FinishA($database);
$Sort2 = new src\FinishB($database);
$Sort3 = new src\FinishC($database);
//$test = new Test($database);
//$Sort = new finish1($database);
$funcname = "hi";
$Sort3->$funcname();

