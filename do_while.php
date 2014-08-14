<?php

//example
// $a = 1;
// do {
//     echo "\$a is equal to {$a}\n";
//     $a++;
// } while ($a <= 5);
// $a is equal to 1
// $a is equal to 2
// $a is equal to 3
// $a is equal to 4
// $a is equal to 5
//-----------------------------------------------


//create a do-while loop that will count by 2's starting with 0 and ending with 100.

$a = 0;

do {
	echo "{$a}\n";
	$a +=2;
} while ($a <= 100);


//alter loop to count backwards by 5's from 100 to -10.

$a = 100;

do {
	echo "{$a}\n";
	$a = $a - 5;
} while ($a >= -10);

