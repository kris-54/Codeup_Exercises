<?php

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b) {
	echo $a % $b . PHP_EOL;
}

function x($a,$b,$c) {
	echo ($a + $b) * $c . PHP_EOL;
}



add (3,56);
subtract (10,10);
multiply (43,12);
divide (3,12);
modulus( 9,5);
x(1,2,3);
?>