<?php

$things = ['Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11];

foreach ($things as $key => $value) {
	if (is_int($value)) {
		echo "{$value} is an integer\n";
	} elseif (is_float($value)) {
		echo "{$value} is a float\n";
	} elseif (is_bool($value)) {
		echo "{$value} is a boolean\n";
	} elseif (is_array($value)) {
		echo "{$value} is an array\n";
	} elseif (is_null($value)) {
		echo "{$value} is a null\n";
	} elseif (is_string($value)) {
		echo "{$value} is a string\n";
	}
};
