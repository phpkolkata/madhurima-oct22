<?php
require("display2.class.php");

$obj = new display2();

echo $obj->public."<br>";
// echo $obj->protected."<br>";
// echo $obj->private."<br>";

echo $obj->show();