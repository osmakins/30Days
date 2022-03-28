<?php

$N = intval(trim(fgets(STDIN)));

switch($N){
    case($N%2 != 0):
        print "Weird";
        break;
    case($N<5 && $N%2==0):
        print "Not Weird";
        break;
    case(($N>=6 && $N<=20) && $N%2==0):
        print "Weird";
        break;
    case(($N>20 && $N<=100) && $N%2==0):
        print "Not Weird";
        break;
    default:
        print "Enter a number between 1-100";
}
