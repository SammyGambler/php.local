<?php
class Registration
{
    private $name;
    private $natCode;
    private $StCode;

//    public function __construct($name = null, $natCode = null)
//    {
//        $this->name = $name;
//        $this->natCode = $natCode;
//    }
    public function getStCode()
    {
        return $this->StCode;
    }
    public function setStCode($StCode)
    {
        if (isset($this->name)) {
            $this->StCode = $StCode;
            echo 'Code ' . $this->getStCode() . ' dedicated to ' . $this->name;
        } else {
            echo 'You haven\'t registered yet!';
        }
    }
    public function getName()
    {
        if ($this->name == null) {
            echo "<br>We don't know the name";
        } else {
            return $this->name;
        }
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getNatCode()
    {
        return $this->natCode;
    }
    public function setNatCode($natCode)
    {
        $this->natCode = $natCode;
    }
}