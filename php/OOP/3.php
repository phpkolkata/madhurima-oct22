<?php
require ("db.class.php");

$db = new db();
$con = $db->connect();
$sql = "select * from category";
$res = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($res)){
    print_r($row);
}