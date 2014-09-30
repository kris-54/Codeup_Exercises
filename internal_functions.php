<?php

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
// TEST: If var $nothing is set, display '$nothing is SET'
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
// TEST: If var $something is set, display '$something is SET'
// Serialize the array $array, and output the results
// Unserialize the array $array, and output the results

function variableCheck($a) 
{
    if(isset($a)) {
        echo "The variable is SET" . PHP_EOL;
    } elseif (empty($a)) {
        echo "Variable is either zero or empty" . PHP_EOL;
    }
}

$nothing = NULL;
$something = ' ';
$array = array(1,2,3);

variableCheck($nothing);
variableCheck($something);
variableCheck($array);

?>