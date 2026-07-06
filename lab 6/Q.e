<?php
class Student
{
    public $name;

    function __construct($n)
    {
        $this->name = $n;
    }

    function display()
    {
        echo "Student Name: ".$this->name;
    }
}

$obj = new Student("Ronish");
$obj->display();
?>
