<?php
session_start();
print_r($_SESSION);

if(isset($_REQUEST['msg'])){
    print "<div>$_REQUEST[msg]</div>";
}
?>

<form action="login-check.php" method="post">
    user:<input type="text" name="usr"><br>
    password:<input type="password" name="pass"><br>
    <button>Login</button>
</form>

<!-- session attributes
1. session creates on server as a file
2. we deal sessionjust like an Array
3. session_start() on top of every file is must
4. session file name is alpha-numeric 32 digin approx
SESSION DESTROYs
1. if browser close
2. inactivity of 22 min approx
3. logout press
-->