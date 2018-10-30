<?php

require_once 'Autoloader.php';
use Autoloader as Autoloader;
use A\A as A;
use B\A as B;
use A\subA as sub;

A::say();
A::say();
sub::say();