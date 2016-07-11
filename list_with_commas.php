<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$famousFakePhysicists = explode(",", $physicistsString);
array_pop($famousFakePhysicists);
array_push($famousFakePhysicists, ' and Tony Stark');
$famousFakePhysicists = implode(",", $famousFakePhysicists);

echo "Some of the most famous fictional theoretical physicist are {$famousFakePhysicists}.";