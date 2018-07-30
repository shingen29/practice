<?php

$array = array(
  '"ダブルクオート"',
  '<tab>',
  '\'シングルクォート\'',
);

$escaped = array_map(function($value) {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $array);

var_dump($escaped);


$my_pow = function($times = 2) {
  return function($v) use ($times) {
    return pow($v, $times);
  };
};

$cube = $my_pow(3);

var_dump($cube(1));
var_dump($cube(2));
var_dump($cube(3));
