<?php
require '../src/Sort.php';
require '../data/database.php';
$Sort = new finishA($database);
//$Sort = new finish1($database);
$funcname = "hi";
$Sort->$funcname();

