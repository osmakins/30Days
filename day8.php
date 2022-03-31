<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$num = intval(trim(fgets($_fp)));
$phoneBook = [];
for ($i=0; $i<$num; $i++){
    $inputln = strval(trim(fgets($_fp)));
    $arr = explode(" ", $inputln);
    $phoneBook[$arr[0]] = $arr[1];
}

$query=strval(trim(fgets($_fp)));

do{
if(array_key_exists($query,$phoneBook)){
    print $query."=".$phoneBook[$query]."\n";
}
else{
    print "Not found\n";
}
}while($query=strval(trim(fgets($_fp))));

?>
