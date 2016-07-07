<?php

fwrite(STDOUT, "What is your name? ");
$studentName = trim(fgets(STDIN));
$subject = [];
$subjects = [];
$awesomeGrade = 80;

do {
    fwrite(STDOUT, "What's the name of the subject? ");
    $subject['name'] = trim(fgets(STDIN));
    fwrite(STDOUT, "What's your grade for {$subject['name']}? ");
    $subject['grade'] = trim(fgets(STDIN));
    $subjects[] = $subject;
    fwrite(STDOUT, "Do you want to add more grades? (y/n) ");
    $answer = trim(fgets(STDIN));
 } while (strtolower($answer) === "y");

function calculateAverage($subjects)
{
    $average = 0;
    foreach ($subjects as $subject) {
        $average += $subject['grade'];
    } 
 return $average / count($subjects); 
}

$average = calculateAverage($subjects);

if ($average > $awesomeGrade) {
    echo "$studentName you're awesome! Your average was $average\n";
} else {
    echo "$studentName you need more practice. Your average was $average\n";
}