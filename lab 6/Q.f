<?php
class Animal
{
    function sound()
    {
        echo "Animal makes sound<br>";
    }
}

class Dog extends Animal
{
    function bark()
    {
        echo "Dog barks";
    }
}

$obj = new Dog();
$obj->sound();
$obj->bark();
?>
