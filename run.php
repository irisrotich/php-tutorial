<?php
include_once("student.php");

$student = new Student();

$student->firstname = "Bob";
$student->Secondname = "Jones";
//$student->setCourse();
$student->Gender = "Male";
echo "\n";
echo $student->getFullName();
echo "\n";
echo $student->getGenderName();
