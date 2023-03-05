<?php
// DRY - dont repeat yourself
session_start();
if(!$_SESSION['login']){
    header("location:index.php?msg=wrong attempt");
}

?>