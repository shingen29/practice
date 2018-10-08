<?php

$var = 1;
$var2 = 2;
$var_name = "var";
echo $$var_name . "\n";
echo ${$var_name."2"} . "\n";
echo ${$var_name."${var2}"} . "\n";
