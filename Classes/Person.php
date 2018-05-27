<?php
namespace University;
class Person
{
    private $name;
    private $NatCode;
    private $Job;
    public function __construct($name, $NatCode, $Job)
    {
        $this->name = $name;
        $this->NatCode = $NatCode;
        $this->Job = $Job;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getNatCode()
    {
        return $this->NatCode;
    }
    public function setNatCode($NatCode)
    {
        $this->NatCode = $NatCode;
    }
    public function getJob()
    {
        return $this->Job;
    }

    public function setJob($Job)
    {
        $this->Job = $Job;
    }


}