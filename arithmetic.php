<?php

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	    echo "$a + $b = " . ($a + $b) . "\n";
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	echo "$a - $b = " . ($a - $b) ."\n";
    } else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	echo "$a * $b = " . $a * $b ."\n";
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	echo "$a / $b = " . $a / $b ."\n";
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
function modulus ($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		echo "$a % $b = " . $a % $b . "\n";
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
add(1, 2);
subtract(2, 1);
multiply(2, 2);
divide(10, 5);
modulus(2, 4);