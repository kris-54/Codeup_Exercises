<?php

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

//create do while loop that starts at 2 and displays the result on each line while $a is less than 1000000

$a = 2;

do {
    echo "{$a}\n";
    $a = $a * $a;
} while ($a < 1000000);



