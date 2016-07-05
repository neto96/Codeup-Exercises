<?php

var_dump($argc);
var_dump($argv);


fwrite(STDOUT, "					Welcome to HIGH LOW!
			Prepare to have the time of your...next 2 minutes.
			The game is played as follows:
				1. The computer will think of a random number between 1 and 100.
				2. You must type in your guess for the number that the computer is thinking of.
				3. If your guess is incorrect, you will see a message that says either LOWER or HIGHER depending of the computer's number is LOWER or HIGHER than your guess.\n" );

if ($argc == 3 && is_numeric($argv[1]) && is_numeric($argv[2])) 
	{
	$randomNumber = rand($argv[1], $argv[2]);
	} else {
	$randomNumber = rand(1, 100);
};

//included to check that passing of argument works as intended
echo "$randomNumber is the random Number \n";

$guessCount = 0;

do {
	fwrite(STDOUT, "What is your guess? \n");
	$userGuess = fgets(STDIN);
	
	if ($userGuess < $randomNumber) 
	{
		fwrite(STDOUT, "HIGHER\n");
	} elseif ($userGuess > $randomNumber) {
		fwrite(STDOUT, "LOWER\n");
	} else {
		fwrite(STDOUT, "GOOD GUESS! You win a cookie!\n");
	}
	$guessCount++;
} while ($randomNumber != $userGuess);

fwrite(STDOUT, "You guessed correctly in $guessCount times.");