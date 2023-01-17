<?php
require("db-connection.php");


$id = $_REQUEST['id'];

echo $id;

$sql = "DELETE FROM `category` WHERE `id`='$id'";
$res = mysqli_query($con, $sql) or die("error #1: ". mysqli_error($con));

header("location:category.php?msg=record deleted!");
