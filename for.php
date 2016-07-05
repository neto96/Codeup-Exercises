<?php

fwrite(STDOUT, "Please enter a starting number: \n" );
$number1 = trim(fgets(STDIN));
fwrite(STDOUT, "Please enter an ending number: \n");
$number2 = trim(fgets(STDIN));

if (is_numeric($number1) && is_numeric($number2) && $number1 < $number2) {
	echo "Your number range is: {$number1} - {$number2} \n";
	for ($i = $number1 ; $i <= $number2 ; $i++) { 
		echo "{$i}\n";
	}
}