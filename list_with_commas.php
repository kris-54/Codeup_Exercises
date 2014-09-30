<?php


$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(',', $physicists_string);//array

$last_item = array_pop($physicists_array);
    


$famous_fake_physicists = implode(',', $physicists_array) . " and" . $last_item;

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}" . PHP_EOL;


function humanized_list($string, $alphabetize = false) 
{
    $array = explode(', ', $string);
    // turns string into array
    if($alphabetize == TRUE) {
        // gives option to alphabatize the array
        asort($array);
    }
    $lastItem = array_pop($array);
    $famous_fake_physicists = implode(', ', $array);// converts array into string
    $humanizedString =  $famous_fake_physicists . " and " . $lastItem . PHP_EOL;
    return $humanizedString;
}

 // List of famous peeps
 $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // Humanize that list
 $famous_fake_physicists = humanized_list($physicists_string);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

 ?>