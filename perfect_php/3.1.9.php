<?php

function no_return() {}

$v1 = "";
$v2 = null;

var_dump($v1);
var_dump($v2);
$v3 = "";
var_dump($v3);
$v3 = no_return();
var_dump($v3);

$v4 = "1";
var_dump($v4);
unset($v4);
var_dump($v4);

