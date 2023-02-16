<?php
class  student{

    public $name;
    public $class;
    public static $collage = "DPS";

    public function intro(){
        echo "hi my name is $this->name, and I study in class $this->class, my collage is ".self::$collage;
    }
}

$std = new student();
$std2 = new student();

$std->name = "raj";
$std->class = "12";
student::$collage = "ABC";
$std->intro();