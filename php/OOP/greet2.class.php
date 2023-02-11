<?php
include "greet.class.php";

class greet2 extends greet{

    function bye(){
        echo "bye ".$this->name;
    }
}