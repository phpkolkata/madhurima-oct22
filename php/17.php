<?php

$p_22 = array("name"=>"raj", "age"=>33);
$a_22 = array("class"=>5, "sec"=>"A");
$roll_22 = array("Personal"=> $p_22, "Academic"=>$a_22);

$p_35 = array("name"=>"raj", "age"=>33);
$a_35 = array("class"=>5, "sec"=>"A");
$roll_35 = array("Personal"=> $p_35, "Academic"=>$a_35);

$std = array("22"=>$roll_22, "35"=>$roll_35);

// print "<pre>";
// print_r($std);


foreach($std as $k=>$v){
    echo "<h1>Roll: $k</h1>";
    foreach($v as $k2=>$v2){
        echo "<b><u>$k2</u></b>:<br>";
        foreach($v2 as $k3=>$v3){
            echo "$k3:$v3<br>";
        }
    }
}