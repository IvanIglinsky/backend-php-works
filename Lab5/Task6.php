<?php
abstract class Human{
    public $height,$weight,$year;
    public function GetHeight()
    {
        return $this->height;
    }
    public function GetWeight()
    {
        return $this->weight;
    }
    public function GetYear()
    {
        return $this->year;
    }
    public function SetYear($value)
    {
        $this->year=$value;
    }
    public function SetHeight($value)
    {
        $this->height=$value;
    }
    public function SetWeight($value)
    {
        $this->weight=$value;
    }
     abstract protected function BornChild();
}
class  Student extends Human{
    public $VNZ,$Course;
    public function  BornChild()
    {
        echo 'Народилась дитина';
    }

    public function GetVNZ()
    {
        return $this->VNZ;
    }
    public function SetVNZ($value)
    {
        $this->VNZ=$value;
    }
    public function GetCourse()
    {
        return $this->Course;
    }
    public function SetCourse($value)
    {
        $this->Course=$value;
    }
    public function NextCourse()
    {
        $this->Course++;
    }
}
class  Programmer extends Human{
    public $lang,$experience;
    public function  BornChild()
    {
        echo 'Народилась дитина';
    }
    public function GetLang()
    {
        return $this->lang;
    }
    public function SetLang($value)
    {
        $this->lang=$value;
    }
    public function GetExperience()
    {
        return $this->experience;
    }
    public function SetExperience($value)
    {
        $this->experience=$value;
    }
    public function AddLang($value)
    {
        $this->lang=$this->lang.' , '.$value;
    }
}
echo 'Програміст:<br>';
$programmer= new Programmer();
$programmer->BornChild();
echo '<br>Студент:<br>';
$student= new Student();
$student->BornChild();