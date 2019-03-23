<?php

class Student extends Person
{
    private $selectedCourses = array();
    private $creditPoints;    

    function __construct($fname, $lname, $yearOfBirth, $creds)
    {
        parent::__construct($fname, $lname, $yearOfBirth);
        $this->creditPoints = $creds;
    }

    public function addCourse($courseName, $credits)
    {
        if(array_search($courseName, $this->selectedCourses) !== FALSE)
        {
            print("Student is already enrolled in this course<br><br>");
            return -1;
        }

        array_push($this->selectedCourses, $courseName);
        $this->creditPoints += $credits;
        return 0;
    }

    public function removeCourse($courseName, $credits)
    {
        $this->selectedCourses = array_diff($this->selectedCourses, array($courseName));
        $this->selectedCourses = array_values($this->selectedCourses);
        $this->creditPoints -= $credits;
    }

    public function printData()
    {
        print_r($this->getFname() . " "
             .  $this->getLname() . "<br>"
             .  $this->getAge() . "  ("
             .  $this->getYear() . ")<br>");
        print_r($this->selectedCourses);
        print_r("<br>" .  $this->creditPoints . "<br><br>");
    }

    /**
     * Get the value of creditPoints
     */ 
    public function getCreditPoints()
    {
        return $this->creditPoints;
    }

    /**
     * Set the value of creditPoints
     *
     * @return  self
     */ 
    public function setCreditPoints($creditPoints)
    {
        $this->creditPoints = $creditPoints;

        return $this;
    }
}

?>
