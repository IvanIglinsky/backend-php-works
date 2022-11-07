<?php
class Human{
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
}
class  Student extends Human{
    public $VNZ,$Course;
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
$human1=new Human();
$human1->SetHeight(180);
$human1->SetWeight(80);
$human1->SetYear(24);
var_dump($human1);
$program1=new Programmer();
$program1->SetHeight(186);
$program1->SetWeight(83);
$program1->SetYear(28);
$program1->SetLang('C++');
$program1->SetExperience('2 year');
$program1->AddLang('C#');
echo '<br>';
var_dump($program1);
$student1=new Student();
$student1->SetHeight(179);
$student1->SetWeight(76);
$student1->SetYear(18);
$student1->SetCourse(2);
$student1->SetVNZ('ZTU');
echo '<br>';
var_dump($student1);