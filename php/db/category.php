<?php
require("db-connection.php");

$sql = "SELECT * FROM `category`";
$res = mysqli_query($con, $sql) or die("error #1: ". mysqli_error($con));

if(isset($_REQUEST['msg'])){
    print "<div>$_REQUEST[msg]</div>";
}

print"<table border='1' width='300'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>isActive</th>
    <th>Options</th>
</tr>
";

// mysqli_fetch_assoc,mysqli_fetch_row, mysqli_fetch_array, mysqli_fetch_object
while($row = mysqli_fetch_assoc($res)){
    print "
    <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[is_active]</td>
        <td><a href='del-cat.php?id=$row[id]'>del</a></a> / <a href='edit-cat.php?id=$row[id]'>edit</a></td>
    </tr>
    ";
}
print"</table>";
