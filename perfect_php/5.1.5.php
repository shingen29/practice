<?php


class Employee
{
    private static $company = "技評技術社\n";

    public static function getCompany()
    {
        return self::$company;
    }

    public static function setCompany($value)
    {
        $this->company = $value;
    }
}

echo Employee::getCompany();
Employee::setCompany("ほげほげ\n");
echo Employee::getCompany();

$gihyo = new Employee();
echo $gihyo->getCompany();
