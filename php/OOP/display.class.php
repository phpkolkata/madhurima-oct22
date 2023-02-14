<?php
// access modifier, visiblity
class display{
    public $public = "public";
    protected $protected = "protected";
    private $private = "private";

    private function show(){
        echo $this->public."<br>";
        echo $this->protected."<br>";
        echo $this->private."<br>";
    }
}