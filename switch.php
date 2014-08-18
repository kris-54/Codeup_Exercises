<?php

date_default_timezone_set('America/Chicago');

$day_of_week = date('N');

switch($day_of_week) {
	
	case 1:
		echo "Today is Monday" . PHP_EOL;
		break;
	case 2:
		echo "Today is Tuesday" . PHP_EOL;
		break;
	case 3:
		echo "Today is Wednesday" . PHP_EOL;
		break;
	case 4:
		echo "Today is Thursday" . PHP_EOL;
		break;
	case 5: 
		echo "Today is friday" . PHP_EOL;
		break;
	case 6 : 
		echo "Today is saturday" . PHP_EOL;
		break;
	case 7:
		echo "Today is sunday" . PHP_EOL;
		break;
}