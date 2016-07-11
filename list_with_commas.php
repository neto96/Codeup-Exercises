<?php

function humanizedList ($array) {
	array_pop($array);
	array_push($array, ' and Tony Stark');
	return $array = implode(",", $array);
}

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(",", $physicistsString);

$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicist are {$famousFakePhysicists}.\n";