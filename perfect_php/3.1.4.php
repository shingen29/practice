<?php

$age = 30;

$foo = <<<EOI
ヒアドキュメントでは、このようｈに、
複数行にわたる文章をそのまま表記することができます。

Tom is "$age" です。
EOI;

echo $foo."\n";


var_dump(15.0);


printf('%.5f', 15.0);
printf('%.b', 15.0);
