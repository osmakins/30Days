
// Declare second integer, double, and String variables.
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Read and save an integer, double, and String to your variables.
$_fp = fopen("php://stdin", "r");
$ij = intval(trim(fgets($_fp)));
$de = floatval(trim(fgets($_fp)));
$st = strval(trim(fgets($_fp)));

// Print the sum of both integer variables on a new line.
print($i + $ij)."\n";

// Print the sum of the double variables on a new line.
print number_format(($d + $de), 1)."\n";

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
print($s.$st)."\n";
