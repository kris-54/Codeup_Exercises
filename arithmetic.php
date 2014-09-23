<?php

//error function
function error($a, $b) 
{
    if (!is_numeric($a) && !is_numeric($b)) {
        echo "{$a} and/or {$b} are not numbers..ENTER ONLY NUMBERS!!" . PHP_EOL;
    } else {
        echo "CAN NOT DIVIDE BY ZERO" . PHP_EOL;
    }
}


//add function
function add($a, $b) 
{
    if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b . PHP_EOL;
    } else {
        error($a,$b) . PHP_EOL;
    }
}   


//subtract function
function subtract($a, $b) 
{
    if(is_numeric($a) && is_numeric($b)) {
        echo $a - $b . PHP_EOL;
    } else {
        error($a,$b) . PHP_EOL;
    }
}



//multiply function
function multiply($a, $b) 
{
    if(is_numeric($a) && is_numeric($b)) {
        echo $a * $b . PHP_EOL;
    } else {
        error($a,$b) . PHP_EOL;
    }
}

//modulus function
function modulus($a, $b) 
{
    if(is_numeric($a) && is_numeric($b)) {
        echo $a % $b . PHP_EOL;
    } else {
        error($a,$b) . PHP_EOL;
    }
}


//divide function
function divide($a,$b) 
{
   if (is_numeric($a) && is_numeric($b) && $b != 0) {
        echo $a / $b;
        } else {
        error($a,$b) . PHP_EOL;
    }
}

subtract(0,45);
add (3,0);
divide(0,0);
multiply('cat', 'dog');
modulus(50,5);

?>

