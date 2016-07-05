<?php

$things = ['Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11];


foreach ($things as $key => $value) {
	if (is_scalar($value)) {
		echo "{$value} is either a float, integer, string or boolean \n";
	}
}