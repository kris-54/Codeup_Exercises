<?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


/*
Create a function that returns TRUE or FALSE if an array value is found. 
Search for Tina and Bob in $names. Make sure it works as expected.*/

function search($needle, $haystack)
{
    
    if (array_search($needle, $haystack) === false) {
        return 'false' . PHP_EOL;
    } else {
        return 'true' . PHP_EOL;
    }
}

echo search('Bob', $names) . PHP_EOL;

/*
Create a function to compare 2 arrays that returns the number of values in common between 
the arrays. Use the 2 example arrays and make sure your solution uses array_search().*/

function compare($array1, $array2)
{
    $common = 0;
    foreach ($array1 as $key => $value) {
        $search = array_search($value, $array2);
        if(is_numeric($search)) {
            $common++;
        }
    } 
    return $common;  
}

echo "There are " . compare($names,$compare) . " names in common" . PHP_EOL;


?>
