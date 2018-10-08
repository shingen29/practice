<?php

function func_call($name)
{
  if (function_exists($name)) {
    $name();
  }
}

function foo()
{
  echo "foo called" . "\n";
}


func_call("foo");
