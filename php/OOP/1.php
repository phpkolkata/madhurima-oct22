<?php

// class is a collection of properties (variables) & methods (functions)
class Greet{
    var $name;
    
    // constructor
    function __construct($name)
    {
        $this->name = $name;   
        print "object created<br>";
    }


    function hi(){
        echo "<br>hi ".$this->name;
    }

    // destructor
    function __destruct()
    {
        $this->name = null;
        print "object use ends <br>";
    }
}

$obj = new Greet("raj");
// $obj->name = "suman";
$obj->hi();

$obj2 = new Greet("pradip");
// $obj2->name = "Pradip";
$obj2->hi();

$obj3 = new Greet("suman");
$obj3->hi();