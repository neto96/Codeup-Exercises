<?php

function add($a, $b)
{
    echo "$a + $b = " . ($a + $b) . "\n";
}

function subtract($a, $b)
{
    echo "$a - $b = " . ($a - $b) ."\n";
}

function multiply($a, $b)
{
    echo "$a * $b = " . $a * $b ."\n";
}

function divide($a, $b)
{
    echo "$a / $b = " . $a / $b ."\n";
}
add(1, 2);
subtract(2, 1);
multiply(2, 2);
divide(10, 5);