<?php
// DRY - dont repeat yourself
session_start();
if(!$_SESSION['id']){
    header("location:index.php?msg=wrong attempt");
}

?>