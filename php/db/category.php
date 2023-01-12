<?php
// $con = mysqli_connect("localhost", "root", "","mobile_demo");
$con = mysqli_connect("localhost", "asif", "asif","mobile_demo");
if(!$con){
    die("connection error");
}

$sql = "SELECT * FROM `category`";
$res = mysqli_query($con, $sql) or die("error #1: ". mysqli_error($con));

print"<table border='1' width='300'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>isActive</th>
</tr>
";

// mysqli_fetch_assoc,mysqli_fetch_row, mysqli_fetch_array, mysqli_fetch_object
while($row = mysqli_fetch_assoc($res)){
    print "
    <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[is_active]</td>
    </tr>
    ";
}
print"</table>";
