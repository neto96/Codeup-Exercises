<?php
require_once 'Rectangle.php';
require_once 'Square.php';

$rectangleArea1 = new Rectangle(5, 10);
$rectangleArea2 = new Rectangle(4, 11);
$rectangleArea3 = new Rectangle(3, 12);
$rectangleArea4 = new Rectangle(2, 13);
$rectangleArea5 = new Rectangle(1, 14);

echo 'Rectangle area is: ' . $rectangleArea1->area();
echo 'Rectangle area is: ' . $rectangleArea2->area();
echo 'Rectangle area is: ' . $rectangleArea3->area();
echo 'Rectangle area is: ' . $rectangleArea4->area();
echo 'Rectangle area is: ' . $rectangleArea5->area();
echo 'Rectangle perimeter is: ' . $rectangleArea1->perimeter();
echo 'Rectangle perimeter is: ' . $rectangleArea2->perimeter();
echo 'Rectangle perimeter is: ' . $rectangleArea3->perimeter();
echo 'Rectangle perimeter is: ' . $rectangleArea4->perimeter();
echo 'Rectangle perimeter is: ' . $rectangleArea5->perimeter();

$square1 = new Square(1);
$square2 = new Square(2);
$square3 = new Square(3);
$square4 = new Square(4);
$square5 = new Square(5);

echo 'Square perimeter is: ' . $square1->perimeter();
echo 'Square perimeter is: ' . $square2->perimeter();
echo 'Square perimeter is: ' . $square3->perimeter();
echo 'Square perimeter is: ' . $square4->perimeter();
echo 'Square perimeter is: ' . $square5->perimeter();

echo 'Square area is: ' . $square1->area();
echo 'Square area is: ' . $square2->area();
echo 'Square area is: ' . $square3->area();
echo 'Square area is: ' . $square4->area();
echo 'Square area is: ' . $square5->area();