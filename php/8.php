<?php
// php manual download - https://www.php.net/distributions/manual/php_manual_en.chm


// functions
// 1. pre defined functions
// 2. user defined functions


// 1. function name
// 2. function arguments/parameters
// 3. optional args/parms
// 4. function body, return / process
// 5. return type


// processed functions
function say_hi(){
    print "Hi<br>";
}

function add($v1,$v2){
    print $v1+$v2;
}

say_hi();
add(20,40);

// returned functions
function add2($v1,$v2){
    return $v1+$v2;
}
$tot = add2(30,40);
$tot = $tot + 40;
echo $tot;

