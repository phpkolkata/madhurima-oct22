<?php
// 0-2 - toddler
// 3-12 - kid
// 13-19 - teenager
// 19 above - mature

$age = 13;

// if($age <= 2){
//     echo "you are a toddler<br>";
// }
// else if($age <=12){
//     echo "you are a kid<br>";
// }
// else if($age <= 19){
//     echo "you are a teenager<br>";
// }
// else if($age > 19){
//     echo "you are mature enough<br>";
// }
// else{
//     echo "wrong input<br>";
// }


if($age <= 2){
    echo "you are a toddler<br>";
}
 if($age > 2 && $age <=12){
    echo "you are a kid<br>";
}
 if($age > 12 && $age <= 19){
    echo "you are a teenager<br>";
}
 if($age > 19){
    echo "you are mature enough<br>";
}
// else{
//     echo "wrong input<br>";
// }

// nested
// if($condition){
//     if($condition){

//     }
// }