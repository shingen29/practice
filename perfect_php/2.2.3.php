<?php

$array = array(1,2,3);

foreach ($array as $i) {
  echo $i."\n";
}

echo $i."\n";
var_dump(isset($i));
var_dump(isset($l));

$m = null;
var_dump(isset($m));
$n = '';
var_dump(isset($n) && !empty($n));
$o = '1';
var_dump(isset($o) && !empty($o));
$s = '01';
var_dump(isset($s) && !empty($s));
