<?php

// H.W
//       primary(1-5)         secondary
// $avg =  D     0 - 35 -      fail
// $avg =  C     36 - 45 -      3rd
// $avg =  B     46 - 65 -      2nd
// $avg =  A     65 above -     1st

// operators - H.w
// switch case = H.w

$avg = 34;
$class = 12;

if($avg <= 35){
    echo "fail";
}
else if($avg <= 45){
    echo "3rd div";
}
else if($avg <= 65){
    echo "2nd div";
}
else if($avg > 65){
    echo "1st div";
}
else{
    echo "wrong input";
}
