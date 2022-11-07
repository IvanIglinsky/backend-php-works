<?php
class Circle
{
    public $X,$Y,$R;
    function __toString()
    {
       return 'Коло з центром в ('.$this->X.','.$this->Y.') і радіусом '.$this->R;
    }
    function GETX()
    {
        return $this->X;
    }
    function GETY()
    {
        return $this->Y;
    }
    function GETR()
    {
        return $this->R;
    }
    function SETX($value)
    {
        return $this->X=$value;
    }
    function SETY($value)
    {
        return $this->Y=$value;
    }
    function SETR($value)
    {
        return $this->R=$value;
    }
}
$Circle=new Circle();
$Circle->SETX(10);
$Circle->SETY(5);
$Circle->SETR(7);
echo $Circle->__toString();
