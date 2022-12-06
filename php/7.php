<?php
// Loop
// 1. initialization (starting point)
// 2. condition (ending point)
// 3. increament (how to reach)

// for loop        - logic building
// while loop      - db or record fetching kinda stuff
// do while loop   - almost never


for($i=1;$i<10;$i++){
    echo "$i hi<br>";
}

print "<hr>";

$j=1;
while($j<=10){
    echo "$j hi<br>";
    $j++;
}

print "<hr>";

$k=1;
do{
    echo "$k hi<br>";
    $k++;

}while($k<=10);

// H.W
// 1. print odd number between 1-50
// 2. print 1-50 alongside (odd even detail )