<?php

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	    return "$a + $b = " . ($a + $b) . "\n";
	} else {
		return "ERROR: Both arguments must be numbers.\nYour inputs were $a and $b.\n";
	}
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return "$a - $b = " . ($a - $b) ."\n";
    } else {
		return "ERROR: Both arguments must be numbers.\nYour inputs were $a and $b.\n";
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return "$a * $b = " . $a * $b ."\n";
	} else {
		return "ERROR: Both arguments must be numbers.\nYour inputs were $a and $b.\n";
	}
}

function divide($a, $b)
{
	if ($b == 0) {
		return "Can't divide by 0 bro.\n";
	} elseif (is_numeric($a) && is_numeric($b)) {
    	return "$a / $b = " . $a / $b ."\n";
	} else {
		return "ERROR: Both arguments must be numbers.\nYour inputs were $a and $b.\n";
	}
}
function modulus ($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return "$a % $b = " . $a % $b . "\n";
	} else {
		return "ERROR: Both arguments must be numbers.\nYour inputs were $a and $b.\n";
	}
}
echo (add(1, 2));
echo (subtract(2, 1));
echo (multiply(2, 2));
echo (divide(10, 5));
echo (modulus(2, 4));