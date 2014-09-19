<?php


// function exercises and added check function//

function check($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return true;
    } else {
        return "please enter numbers only.";
    }
}

function add($a, $b) {
    if (check($a,$b)) {
        return $a + $b . PHP_EOL;
    } 
}   

echo add(3,4);

function subtract($a, $b) {
    if(check($a,$b)) {
        return $a - $b . PHP_EOL;
    } 
}

echo subtract(24,12);

function multiply($a, $b) {
    if(check($a,$b)){
        return $a * $b . PHP_EOL;
    } 
}

echo multiply(23,'cat');

function modulus($a, $b) {
    if(check($a,$b)) {
        return $a % $b . PHP_EOL;
    } 
}
echo modulus(30,5);



function divide($a,$b) {
   if (check($a,$b) && $b != 0) { 
        return $a / $b;
    } elseif ($b == 0) {
        return "FALSE, can't divide by zero";
    }
}

echo divide (20,0);

 
?>



