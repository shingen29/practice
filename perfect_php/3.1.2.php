<?php

$int1 = 1;
$int2 = -1;
$int3 = 011;
$int4 = 0xff;
$int5 = PHP_INT_MAX;
$int6 = PHP_INT_MAX + 1;


for ($i=1; $i<=6; $i++){
  echo ${"int".$i}."\n";
}

var_dump("1");
var_dump(1);
var_dump((int)"1");
