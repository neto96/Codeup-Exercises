<?php

$things = ['Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11];

foreach ($things as $value) {
	if (is_array($value)) {
		echo "Array ( ";
		foreach ($value as $value2) {
			echo"{$value2} ";
		}
		echo ")\n";
	} else {
		echo $value . PHP_EOL;
	}
};
