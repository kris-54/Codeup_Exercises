<?php

$a = 10;
$b = 20; 
$c = '2';

if ($a < $b) {
    echo "$a is less than $b\n";
} else {
    echo "$b is greater than $a\n";
}


if ($b >= $c) {
   echo "$b is greater than or equal to $c\n";
} else {
    echo "$b is less than or equal to $c\n";
}

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b == $c) {
    echo "$b is equal to $c\n";
} elseif ($b === $c) {
    echo "$b is identical to $c\n";
} elseif ($b != $c) {
    echo "$b is not equal to $c\n";
} else  {
    echo "$b is not identical to $c\n";
}

?>