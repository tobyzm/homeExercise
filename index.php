<?php

spl_autoload_register(function($class_name)
{
    include $class_name .'.php';
});

$student1 = new Student("Cool", "Dude", 1997, 0);
$student1->addCourse("Programming", 5);
$student1->printData();

$teacher1 = new Teacher("John", "Doe", 1980, "Maths");
$teacher1->addSubject("Calculus");
$teacher1->printData();

$staff1 = new Staff("Clean", "Fella", 1985, "Cleaner");
$staff1->printData();

$staff2 = new Staff("Sleepy", "Guy", 1975, "Caretaker");
$staff2->printData();

?>
