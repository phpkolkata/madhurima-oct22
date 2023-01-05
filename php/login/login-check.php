<?php
session_start();
extract($_POST);

if($usr == "test" && $pass == "test"){
    $_SESSION['login'] = true;
    header("location:home.php");
}
else{
    header("location:index.php?msg=wrong user/pass");
}