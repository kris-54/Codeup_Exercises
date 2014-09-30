<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) 
{
    if (is_string($value)) {
        echo "{$value} is a string" . PHP_EOL;
    } elseif (is_int($value)) {
        echo "{$value} is an integer" . PHP_EOL;
    } elseif (is_null($value)) {
        echo "{$value} is null" . PHP_EOL;
    } elseif (is_array($value)) {
        echo "\$value is an array" . PHP_EOL;
    } elseif (is_float($value)) {
        echo "{$value} is a float" . PHP_EOL;
    } elseif (is_bool($value)) {
        echo "\$value is a boolean" . PHP_EOL;
    }
    
}

foreach ($things as $thingy) 
{
    if (is_scalar($thingy)) {
        echo "{$thingy}" . PHP_EOL;
    }
}




foreach ($things as $thingy) 
{
    if (is_array($thingy)) {
        foreach($thingy as $thing) {
            echo"$thing" . PHP_EOL;
        }
    }
    elseif (is_string($thingy)) {
        echo "{$thingy}" . PHP_EOL;
    } elseif (is_numeric($thingy)) {
        echo "{$thingy}" . PHP_EOL;
    } elseif (is_null($thingy)) {
        echo "{$thingy}" . PHP_EOL;
    } elseif (is_float($thingy)) {
        echo "{$thingy}" . PHP_EOL;
    } elseif (is_bool($thingy)) {
        echo "{$thingy}" . PHP_EOL;
    }
}
?>