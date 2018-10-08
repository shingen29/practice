<?php

function add_one(&$value)
{
  $value += 1;
}

$a = 10;
add_one($a);
var_dump($a);

function &add_two(&$data)
{
  $data += 2;
  return $data;
}

$b = 5;
$c =& add_two($b);
var_dump($b);
var_dump($c);

$b += 1;
var_dump($b);
var_dump($c);
