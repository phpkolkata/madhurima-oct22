<?php

// class is a collection of properties (variables) & methods (functions)
class Greet{

    var $name = "Raj";

    function hi(){
        echo "<br>hi ".$this->name;
    }
}

$obj = new Greet();
$obj->name = "suman";
$obj->hi();

$obj2 = new Greet();
$obj2->name = "Pradip";
$obj2->hi();

$obj3 = new Greet();
$obj3->hi();