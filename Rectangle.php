<?php

class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height . PHP_EOL;
    }
    public function perimeter()
    {
        return ($this->height * 2) + ($this->width * 2) . PHP_EOL;
    }
}