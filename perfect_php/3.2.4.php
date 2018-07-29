<?php
var_dump(error_reporting());

echo "hoge"."\n";
echo $hoge."\n";
echo @$hoge;

$result = `ls -la`;
echo $result;
