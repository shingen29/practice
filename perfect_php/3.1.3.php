<?php

$int1 = 1.2;
$int2 = 1.2e5;
$int3 = "1.2";
$int4 = floatval($int3);
$int5 = (float)$int3;


for ($i=1; $i<=6; $i++){
  var_dump(${"int".$i});
}

echo "\n";
