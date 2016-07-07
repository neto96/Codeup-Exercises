<?php


function throwErrorMessage ($a, $b, $message = true) {
	if ($message === true) {
		return "ERROR: Both arguments must be numbers.\nYour inputs were {$a} and {$b}.\n";
	} else {
		return $message;
	}
}

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	    return "$a + $b = " . ($a + $b) . "\n";
	} else {
		echo(throwErrorMessage($a, $b));
	}
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return "$a - $b = " . ($a - $b) ."\n";
    } else {
		echo(throwErrorMessage($a, $b));
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return "$a * $b = " . $a * $b ."\n";
	} else {
		echo(throwErrorMessage($a, $b));
	}
}

function divide($a, $b)
{
	if ($b == 0) {
		echo(throwErrorMessage($a, $b, "Can't divide by 0 bro.\n"));
	} elseif (is_numeric($a) && is_numeric($b)) {
    	return "$a / $b = " . $a / $b ."\n";
	} else {
		echo(throwErrorMessage($a, $b));
	}
}
function modulus ($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return "$a % $b = " . $a % $b . "\n";
	} else {
		echo(throwErrorMessage($a, $b));
	}
}
echo (add("b", 2));
echo (subtract(2, 1));
echo (multiply(2, 2));
echo (divide(10, 0));
echo (modulus(2, 4));