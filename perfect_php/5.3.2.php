<?php

class Foo
{
  public function helloExec()
  {
    //self::hello();
    static::hello();
  }

  public static function hello()
  {
    echo __CLASS__, ' hello!', PHP_EOL;
  }
}


class Bar extends Foo
{
  public static function hello()
  {
    echo __CLASS__, ' hello!', PHP_EOL;
  }
}

$bar = new Bar();
$bar->helloExec();
