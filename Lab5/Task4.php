<?php
class Rectangle{
    public $XTop,$YTop,$width,$height,$id;
    static public $idNext=0;
    public function __construct($height,$width,$XTop,$YTop,$id)
    {
        $this->height=$height;
        $this->width=$width;
        $this->id=$id;
        $this->XTop=$XTop;
        $this->YTop=$YTop;
        self::$idNext++;
    }
    public  function __clone()
    {
        self::$idNext++;
        $this->id=self::$idNext;
    }

}
$NewRec1=new Rectangle(100,100,10,11,1);
$NewRec2=new Rectangle(115,120,10,11,2);
$NewRec3=clone $NewRec2;
$NewRec4=clone $NewRec2;
echo 'Кілкість елментів:'.$NewRec1::$idNext;
echo '<br>';
var_dump($NewRec1);
echo '<br>';
var_dump($NewRec2);
echo '<br>';
var_dump($NewRec3);
echo '<br>';
var_dump($NewRec4);
echo '<br>';