<?php

echo E_USER_ERROR. "\n";
echo E_USER_WARNING. "\n";
echo E_USER_NOTICE. "\n";
echo E_USER_DEPRECATED. "\n";

trigger_error('ほげほげエラー', E_USER_ERROR);

