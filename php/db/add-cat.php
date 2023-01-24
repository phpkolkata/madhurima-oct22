<?php
require("session_security.php");
?>
<form action="adding-cat.php" method="post">
    Name:<input type="text" name="nm" ><br>
    isActive: 
    <input type="radio" name="is_active" value='y'>Yes 
    <input type="radio" name="is_active" value='n'>No
<br>
    <button>Update</button>
</form>

