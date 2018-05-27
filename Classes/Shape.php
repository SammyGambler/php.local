<?php
namespace Shapes;
include_once '../functions.php';
abstract class Shape
{
    protected $name="Shape";
    protected $angles;
    public function __construct($name, $angles)
    {
        $this->name = $name;
        $this->angles = $angles;
    }

    public abstract function area();
    public abstract function perimeter();

}

class Triangle extends Shape{
    public $a;
    public $b;
    public $c;
    public $h;
    public function __construct($name,$angles,$a, $b, $c, $h)
    {
        parent::__construct($name,$angles);
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->h = $h;
    }

    public  function perimeter()
    {
        return $this->a *$this->b * $this->c;
    }
    public  function area()
    {
        return $this->h * $this->b;

    }
}

$Triangle = new Triangle("Triangle","3","10","20","20","10");
e($Triangle->area(),'g');
e($Triangle->perimeter(),'b');