<?php
interface ClearHouse{
    public function ClearRoom();
    public function ClearKitchen();
}

abstract class Human implements ClearHouse {
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
    public function ClearKitchen()
    {
        echo 'Студент прибирає кухню<br>';
    }
    public function ClearRoom()
    {
        echo 'Студент прибирає кімнату<br>';
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
    public function ClearKitchen()
    {
        echo 'Програміст прибирає кухню<br>';
    }
    public function ClearRoom()
    {
       echo 'Програміст прибирає кімнату<br>';
    }
}
echo 'Програміст:<br>';
$programmer= new Programmer();
$programmer->ClearKitchen();
$programmer->ClearRoom();
echo '<br>Студент:<br>';
$student= new Student();
$student->ClearKitchen();
$student->ClearRoom();