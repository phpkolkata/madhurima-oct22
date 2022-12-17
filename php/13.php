<?php
// Numeric Array - creation method

// method 1 - with array function
$arr1 = array("a","b","c");

// method2 - dircet with keys
$arr2[0] = "a";
$arr2[1] = "b";
$arr2[2] = "c";

// method2 - dircet without keys
$arr3[] = "a";
$arr3[] = "b";
$arr3[5] = "c";
$arr3[3] = "sdf";
$arr3[] = "bdd";

// echo $arr3[2];


// debug array on screen
print "<pre>";
print_r($arr3);
