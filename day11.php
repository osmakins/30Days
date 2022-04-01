<?php
$arr = array();

for ($i = 0; $i < 6; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$sumhourglasses = [];

for($row=0;$row<count($arr)-2;$row++){
    for($col=0;$col<count($arr[$row])-2;$col++){
        $sumhourglass = $arr[$row][$col]+$arr[$row][$col+1]+$arr[$row][$col+2]
        +$arr[$row+1][$col+1]
        +$arr[$row+2][$col]+$arr[$row+2][$col+1]+$arr[$row+2][$col+2];
        array_push($sumhourglasses, $sumhourglass);
    }
}

$maxsumhourglasses = max($sumhourglasses);
print $maxsumhourglasses;
