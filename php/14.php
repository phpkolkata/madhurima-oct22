<?php 

// DRY - Don't Repeat Yourself

$weeks = array("sun", "mon","tue","wed", "thu", "fri", "sat");

// echo $weeks[0];
// echo $weeks[1];
// echo $weeks[2];
// echo $weeks[3];
// echo $weeks[4];
// echo $weeks[5];
// echo $weeks[6];

for($i=0;$i<=6;$i++){
    echo $weeks[$i]."<br>";
}

print"<select>
<option>select week</option>
</select>";