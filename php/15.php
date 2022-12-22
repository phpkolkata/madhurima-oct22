<?php

// Numeric Array
$std = array("raj",22);
echo $std[0]; // raj
echo $std[1]; // 22

// Associative Array
$std2 = array("name"=>"raj", "age"=>22);
echo $std2['name']; // raj
echo $std2['age']; //22

echo "your name is $std2[name]";
echo "your name is ". $std2['name'];

// print_r($std2);

foreach($std2 as $v){
    echo $v;
}

foreach($std2 as $k=>$v){
    echo $k."=".$v;
}