<?php

class Teacher extends Person
{
    private $teachingSubjects = array();
    private $department;

    function __construct($fname, $lname, $yearOfBirth, $department)
    {
        parent::__construct($fname, $lname, $yearOfBirth);
        $this->department = $department;
    }

    public function addSubject($subjectName)
    {
        if(array_search($subjectName, $this->teachingSubjects) !== FALSE)
        {
            print("Teacher is already teaching in this course<br><br>");
            return -1;
        }

        array_push($this->teachingSubjects, $subjectName);
    }

    public function printData()
    {
        print_r($this->getFname() . " "
             .  $this->getLname() . "<br>"
             .  $this->getAge() . "  ("
             .  $this->getYear() . ")<br>");
        print_r($this->teachingSubjects);
        print_r("<br>" .  $this->department . "<br><br>");
    }

    /**
     * Get the value of department
     */ 
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set the value of department
     *
     * @return  self
     */ 
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }
}

?>
