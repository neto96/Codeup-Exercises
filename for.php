<?php

fwrite(STDOUT, "Please enter a starting number: \n" );
$number1 = trim(fgets(STDIN));
fwrite(STDOUT, "Please enter an ending number: \n");
$number2 = trim(fgets(STDIN));
$increment = 1;
fwrite(STDOUT, "Enter a number to choose increment value (if none, default is 1) \n");
$increment = trim(fgets(STDIN));

if ($increment + $number1 > $number2) {
	fwrite(STDOUT, "Increment + your first number cannot be higher than your second number \n");
	exit(1);
} else {
	if (is_numeric($number1) && is_numeric($number2) && is_numeric($increment) && $number1 < $number2) {
		echo "Your number range is: {$number1} - {$number2} \n";
		for ($i = $number1 ; $i <= $number2 ; $i += $increment) { 
			echo "{$i}\n";
		}
	} else {
		fwrite(STDOUT, "You must enter numbers only and the first one should be smaller than the second one");
		exit(1);
	}
}