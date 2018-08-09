<?php


class Employee
{
    public $name;
    public static $company = "儀表技術者\n";
    private $state = "働いている";

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
        $this->hoge = "hoge\n";
    }

    public function work()
    {
        echo "書籍を整理しています\n";
    }

    public function getCompany()
    {
      return self::$company;
    }
}

// static
echo Employee::$company;
$yamada = new Employee();
$yamada->work();
$yamada->name = "山田";
var_dump($yamada);
echo $yamada->hoge;
$yamada->setState("休憩している");
echo $yamada->hoge;

echo $yamada->getCompany();

var_dump($yamada);
echo $yamada->name, "さんは", $yamada->getState(), "\n";
