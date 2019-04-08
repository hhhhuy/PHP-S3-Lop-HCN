<?php
class Rectangle
{
    public $width;
    public $heigth;
    public function __construct($width,$heigth)
    {
        $this->width = $width;
        $this->height = $heigth;
    }
    // tinh dien tich
    public function getArea()
    {
        return "Area: ".$this->width * $this->heigth;
    }
    // tinh chu vi
    public function getPerimeter()
    {
        return "Perimeter: ".($this->width + $this->heigth) * 2;
    }
    // hien thi ket qua
    public function display()
    {
        return ": " . "width = " . $this->width . ",height = " . $this->height .".";
    }
}