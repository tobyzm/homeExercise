<?php

class Staff extends Person
{
    private $vacancy;
    
    function __construct($fname, $lname, $yearOfBirth, $vacancy)
    {
        parent::__construct($fname, $lname, $yearOfBirth);
        $this->vacancy = $vacancy;
    }

    public function editVacancy($vacancy)
    {
        $this->vacancy = $vacancy;
    }

    public function printData()
    {
        print_r($this->getFname() . " "
             .  $this->getLname() . "<br>"
             .  $this->getAge() . "  ("
             .  $this->getYear() . ")<br>"
             .  $this->vacancy . "<br><br>");
    }

    public function getVacancy()
    {
        return $this->vacancy;
    }

    public function setVacancy($vacancy)
    {
        $this->vacancy = $vacancy;
    }
}

?>
