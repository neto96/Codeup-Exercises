<?php

class Square extends Rectangle
{

    public function __construct($height) {
        parent::__construct($height, $height);
    }
    public function perimeter()
    {
        return ($this->height * 2) + ($this->height * 2) . PHP_EOL;
    }
    public function area() {
        return $this->height * $this->height . PHP_EOL;
    }
}