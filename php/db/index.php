<?php
session_start();
print_r($_SESSION);

if(isset($_REQUEST['msg'])){
    print "<div>$_REQUEST[msg]</div>";
}
?>

<form action="login-check.php" method="post">
    email:<input type="text" name="email"><br>
    password:<input type="password" name="pass"><br>
    <button>Login</button>
</form>