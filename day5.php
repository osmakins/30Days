<?php

$n = intval(trim(fgets(STDIN)));

$i = 1;

do{
    $res = $n*$i;
    print $n." x ".$i." = ".$res."\n";
    $i++;
}while($i<=10);
