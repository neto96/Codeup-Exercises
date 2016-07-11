<?php

function humanizedList ($array) {
	$lastItem = array_pop($array);
	array_push($array, " and $lastItem");
	return $array = implode(",", $array);
}

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(",", $physicistsString);
// foreach ($physicistsArray as $physicist) {
	
// }

$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicist are {$famousFakePhysicists}.\n";