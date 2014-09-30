<?php

for ($num = 1; $num <= 100; $num++) 
{
    if (($num % 5 == 0) && ($num % 3 == 0)) {
        echo "FIZZBUZZ" . PHP_EOL;
    } elseif ($num % 3 == 0) {
        echo "FIZZ". PHP_EOL;
    } elseif ($num % 5 == 0) {
        echo "BUZZ" . PHP_EOL;
    } else {
        echo "{$num}" . PHP_EOL;
    }
}

?>