<?php

interface Reader
{
    public function read();
}

interface Writer
{
    public function write($value);
}

class Configure implements Reader, Writer
{
    public $text;

    public function write($value)
    {
      $this->text = $value;
    }

    public function read()
    {
      echo $this->text;
    }
}

$news = new Configure();
$news->write("号外がでました！\n");
$news->read();
