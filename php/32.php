<?php
// mkdir("abc"); // creates a folder
// rmdir("abc");  //removes folder

// unlink("uploads/830-Screenshot from 2022-08-19 10-37-24.png"); // removes file physically

// file write
// $fp = fopen("db.txt", "a"); //w,a
// fwrite($fp,"hello inida");
// fclose($fp);

// file read
$fp = fopen("db.txt","r");
$str = "";
while(!feof($fp)){
    // $str .= fgets($fp)."<br>";
    $str = $str . fgets($fp)."<br>";
}
fclose($fp);

echo $str;