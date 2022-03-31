<?php

/*
 * Complete the 'factorial' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function factorial($n) {
    // Write your code here
    if($n == 1){
        return $n;
    }
    else if($n == 0){
        return 1;
    }
    else if($n < 0){
        return "out of bounds";
    }
    else{
        return $n * factorial($n-1);
    } 
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = factorial($n);

fwrite($fptr, $result . "\n");

fclose($fptr);
