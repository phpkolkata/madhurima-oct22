<?php

// function getResult($avg, $class){
//     if($class >=1 && $class <= 5){
//         // programm for junior
//         if($avg <= 35){
//             echo "D";
//         }
//         else if($avg <= 45){
//             echo "C";
//         }
//         else if($avg <= 65){
//             echo "B";
//         }
//         else if($avg > 65){
//             echo "A";
//         }
//         else{
//             echo "wrong input";
//         }
//     }
//     else if($class >=6 && $class <= 12){
//         // programm for seniours
//         if($avg <= 35){
//             echo "fail";
//         }
//         else if($avg <= 45){
//             echo "3rd div";
//         }
//         else if($avg <= 65){
//             echo "2nd div";
//         }
//         else if($avg > 65){
//             echo "1st div";
//         }
//         else{
//             echo "wrong input";
//         }
//     }
//     else{
//         // wrong class input
//     }
// }


function getResult($avg, $class){
    if($class >=1 && $class <= 5){
        // programm for junior
        if($avg <= 35){
            echo "D";
        }
        else if($avg <= 45){
            echo "C";
        }
        else if($avg <= 65){
            echo "B";
        }
        else if($avg > 65){
            echo "A";
        }
        else{
            echo "wrong input";
        }
    }
    else if($class >=6 && $class <= 12){
        // programm for seniours
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
    }
    else{
        // wrong class input
    }
}


// --------------------------------------
if($age <= 20){
    return "kid";
}
else{
    return "mature";
}

// Turnary Operator
$res =  ($age <= 4) ? "kid" :  "mature";