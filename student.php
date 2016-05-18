<?php
class Student{
    public $Firstname;
    public $Secondname;
    private $Course;
    public $Gender;
    private $fullName;
    private $genderName;
    
    // Here are the class methods
    
    private function setCourse()
    {
        return $this->Course = "Biology";
    }
    
    public function getFullName()
    {
     return $this->fullName = $this->firstname." ".$this->Secondname;   
    }
    
    public function getGenderName()
    {
        return $this->genderName = $this->Gender." ".$this->getFullName(); 
    }
    
    
    public function getCourse()
    {
        return $this->Course;
    }

    
}

$student = new Student();

$student->firstname = "Bob";
$student->Secondname = "Jones";
$student->setCourse();
$student->Gender = "Male";
echo "\n";
echo $student->getFullName();
echo "\n";
echo $student->getGenderName();