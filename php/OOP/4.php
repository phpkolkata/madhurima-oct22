<?php
require ("sql.class.php");

$sql = new sql('category');
$res = $sql->select();
// $res = $sql->insert();
while($row = mysqli_fetch_assoc($res)){
    print_r($row);
}