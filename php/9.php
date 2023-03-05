<?php

function getAgetype($age){
    if($age <= 2){
        return "you are a toddler<br>";
    }
    if($age > 2 && $age <=12){
        return "you are a kid<br>";
    }
    if($age > 12 && $age <= 19){
        return "you are a teenager<br>";
    }
    if($age > 19){
        return "you are mature enough<br>";
    }
}
// -------------------------------------------------

$myAge = 20;
// echo  getAgetype($myAge);
$res =  getAgetype($myAge);
echo $res;