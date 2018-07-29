<?php


function array_output(array $var)
{
  if (is_array($var)) foreach ($var as $v) {
    echo $v . "\n";
  }
}

array_output([1,2,3]);
array_output(1);
