<?php
session_start();
extract($_POST);
require("db-connection.php");
$sql = "select * from admin where email='$email' and pass='$pass'";
$res = mysqli_query($con, $sql) or die("login query error");
$tot = mysqli_num_rows($res);

if($tot == 1){
    $row = mysqli_fetch_assoc($res);
    $_SESSION['id'] = $row['id'];
    header("location:category.php");
}
else{
    header("location:index.php?msg=wrong user/pass");
}