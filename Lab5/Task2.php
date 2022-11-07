<?php
class Circle2
{
    private $X,$Y,$R;
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
    function CheckCircle($x,$y,$r)
    {
        if(($x+$r)>=$this->X and ($y+$r)>=$this->Y)
        {
            return "True";
        }
        else
            return "False";
    }

}
$Circle2=new Circle2();
$Circle2->SETX(5);
$Circle2->SETY(1);
$Circle2->SETR(10);
$Circle=new Circle2();
$Circle->SETX(10);
$Circle->SETY(5);
$Circle->SETR(7);

 echo 'Кола перетенаються:'.  $Circle2->CheckCircle($Circle->GETX(),$Circle->GETY(),$Circle->GETY());



