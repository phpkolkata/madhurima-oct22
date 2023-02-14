<?php
require ("display.class.php");

class display2 extends display{


    public function show(){
        echo $this->public."<br>";
        echo $this->protected."<br>";
        // echo $this->private."<br>";
    }

}