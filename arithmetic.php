<?php


function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
	} else {
		echo "ERROR!! $a and/or $b are not numbers." . PHP_EOL;
	}
}

function subtract($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
	} else {
		echo "ERROR!! $a and/or $b are not numbers." . PHP_EOL;
	}
}

function multiply($a, $b) {
    if(is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
	} else {
		echo "ERROR!! $a and/or $b are not numbers." . PHP_EOL;
	}
}

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
	} else {
		echo "ERROR!! $a and/or $b are not numbers." . PHP_EOL;
	}
}
function divide($a,$b) {
   if (is_numeric($a) && is_numeric($b) && $b != 0) {
		echo $a / $b;
		} else {
		echo "ERROR!! YOU CAN NOT DIVIDE BY ZERO!" . PHP_EOL;
	}
}




add (3,'cat');
subtract (10,6);
multiply ('house','dog');
divide (10,0);
modulus( 9,5);

?>