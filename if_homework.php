
<?php

### Control Structures

// 1. Create if_homework.php file in your exercise directory.
// 2. In this file create a variable called $hungry and set it to TRUE if you are hungry or FALSE if you are not.
// $hungry = true;
// 3. Create another variable and call it $food_available and set it equal to TRUE or FALSE.
$food_available = true;
// 4. Create an if statement that will echo 'We are fed and good to go.' if both you have $food_available and are $hungry are true.
if ($hungry == true  && $food_available == true) {
	echo "We are fed and good to go!\n";
	} else {
		echo "you are not fed\n";
}
// 5. Now create another variable $have_money and set it to either TRUE or FALSE. 
$have_money = false;

// Adjust your if statement so it reads. If you are $hungry and there is $food_available or $have_money then you will eat. 
if ($hungry === true && $food_available === true || $have_money === true) {
	echo "you will eat \n";
} else {
	echo "not hungry but thank you \n";
}




// 5. Now create another variable $have_money and set it to either TRUE or FALSE. 
// Adjust your if statement so it reads. If you are $hungry and there is $food_available or $have_money then you will eat. 
// If none of those are true then echo "Not hungy but thank you!"

$hungry = true;
$food_available = false;

if ($food_available == true && $hungry == true) {
	echo "We are fed and good to go!\n";
} else {
	echo "You are NOT fed.\n";
}

$have_money = false;

if ($food_available == true && $hungry == true || $have_money == true ) {
	echo "You will eat!!!\n";
} else {
	echo "Not hungry but thank you!!!\n";
}
