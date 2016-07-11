<?php

function humanizedList ($array) {
	$lastItem = array_pop($array);
	array_push($array, " and $lastItem");
	return $array = implode(", ", $array);
}

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(", ", $physicistsString);
// $names = [];
// foreach ($physicistsArray as $physicist) {
// 	$name = explode(" ", $physicist);
// 	$names[]= [
// 		'first name' => $name[0],
// 		'last name' => $name[1],
// 	];
// }
// var_dump($names);

sort($physicistsArray);
$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicist are {$famousFakePhysicists}.\n";