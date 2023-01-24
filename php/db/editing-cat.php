<?php
require("session_security.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("db-connection.php");
// print_r($_POST);
extract($_POST);

$sql =  "UPDATE `category` SET `name`='$nm', `is_active`='$is_active' WHERE `id`='$catid'";
$res = mysqli_query($con, $sql) or die("error #1: ". mysqli_error($con));

header("location:category.php?msg=record updated!");