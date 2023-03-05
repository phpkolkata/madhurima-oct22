<?php 

session_start();

// session_destroy();
unset($_SESSION['login']);
// $_SESSION['login'] = null;

header("location:index.php?msg=logout successfully");