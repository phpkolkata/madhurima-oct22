<?php

require("db-connection.php");

$id = $_REQUEST['id'];

$sql = "SELECT * FROM  `category` WHERE `id`='$id'";
$res = mysqli_query($con, $sql) or die("error #1: ". mysqli_error($con));
$row = mysqli_fetch_assoc($res);

?>

<form action="editing-cat.php" method="post">
    <input type="hidden" name="catid" value="<?php echo $id ?>">
    Name:<input type="text" name="nm" value="<?php echo $row['name'] ?>"><br>
    isActive: 
    <input type="radio" name="is_active" value="y" <?php echo ($row['is_active']=='y') ? "checked" : ""; ?>>Yes 
    <input type="radio" name="is_active" value="n" <?php echo ($row['is_active']=='y') ? "" : "checked"; ?>>No
<br>
    <button>Update</button>
</form>

<?php
// if($row['is_active'] == 'y')
// {
//     echo "checked";
// }
// else{
//     echo "";
// }

// Turnary Operator

// echo ($row['is_active']) ? "checked" : "";

