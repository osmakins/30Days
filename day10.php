<?php

$n = intval(trim(fgets(STDIN)));

$strbin = explode('0', decbin($n));
$countmax = 0;

foreach ($strbin as $str) {
    if ($countmax < strlen($str)) {
        $countmax = strlen($str);
    }
}

print $countmax;
