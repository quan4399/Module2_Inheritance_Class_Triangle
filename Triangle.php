<?php

class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;
    public function __construct($name,$side3,$side2,$side1,$color)
    {
        parent::__construct($name,$color);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->name = $name;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSide1(): int
    {
        return $this->side1;
    }

    /**
     * @param int $side1
     */
    public function setSide1(int $side1): void
    {
        $this->side1 = $side1;
    }

    /**
     * @return int
     */
    public function getSide2(): int
    {
        return $this->side2;
    }

    /**
     * @param int $side2
     */
    public function setSide2(int $side2): void
    {
        $this->side2 = $side2;
    }

    /**
     * @return int
     */
    public function getSide3(): int
    {
        return $this->side3;
    }

    /**
     * @param int $side3
     */
    public function setSide3(int $side3): void
    {
        $this->side3 = $side3;
    }
    public function getPerimeter(){
        return $this->side3 + $this->side2 + $this->side1;
    }
    public function getArea(){
        $p = $this->getPerimeter()/2;
        return pow($p,0.5)*($p-$this->side1)*($p-$this->side2)*($p-$this->side3);
    }
    public function toString(){
        echo parent::show()."</br>";
        echo "Chu vi là: ".$this->getPerimeter()."</br>";
        echo "Diện tích là: ".$this->getArea()."</br>";
    }
}