<?php

abstract class Person
{
    protected $fname;
    protected $lname;
    protected $yearOfBirth;

    function __construct($fname, $lname, $yearOfBirth)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->yearOfBirth = $yearOfBirth;
    }

    abstract public function printData();

    protected function getFname() { return $this->fname; }
    protected function getLname() { return $this->lname; }
    protected function getYear() { return $this->yearOfBirth; }
    protected function getAge() { return 2019 - $this->yearOfBirth; }

    public function setFname($fname) { $this->fname = $fname; }
    public function setLname($lname) { $this->lname = $lname; }
    public function setYear($yearOfBirth) { $this->yearOfBirth = $yearOfBirth; }
}

?>
