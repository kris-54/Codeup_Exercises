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



function subtract($a, $b) {
    if(check($a,$b)) {
        return $a - $b . PHP_EOL;
    } 
}



function multiply($a, $b) {
    if(check($a,$b)){
        return $a * $b . PHP_EOL;
    } 
}



function modulus($a, $b) {
    if(check($a,$b)) {
        return $a % $b . PHP_EOL;
    } 
}



function divide($a,$b) {
   if (check($a,$b) && $b != 0) { 
        return $a / $b;
    } elseif ($b == 0) {
        return "FALSE, can't divide by zero";
    }
}



 
?>



