<?php
require("db-connection.php");

extract($_POST);

$sql = "INSERT INTO `category` VALUES (NULL, '$nm', '$is_active')";
$res = mysqli_query($con, $sql) or die("error");

header("location:category.php?msg=record added!");
