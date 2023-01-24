<?php
require("session_security.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- del-cat.php?id=$row[id] -->
    <script lang="javascript">
        function confirmDelete(id){
            const ans = confirm("Are you sure want to delete? please confirm.");
            if(ans){
                window.location = 'del-cat.php?id='+id;
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    
<?php
require("db-connection.php");

// get total records
$sql = "SELECT * FROM `category`";
$res = mysqli_query($con, $sql) or die("error 0");
$total = mysqli_num_rows($res);

// echo $total;
// pagination code
// LIMIT 0,2 (starting point, no. of records)

$start = 0;
$limit = 2;
$pages = ceil($total / $limit);


if(isset($_REQUEST['p'])){
    $start = ($_REQUEST['p'] - 1) * $limit;
}

$where = "";
if(isset($_GET['srch'])){
    $where = "WHERE  `name` like '%$_GET[srch]%'";
}

$sql = "SELECT * FROM `category` $where ORDER BY `id` DESC LIMIT $start,$limit";

print $sql;

$res = mysqli_query($con, $sql) or die("error #1: ". mysqli_error($con));

if(isset($_REQUEST['msg'])){
    print "<div>$_REQUEST[msg]</div>";
}



print "<form method='get'>
<input type='text' name='srch'>
<button>search</button>
</form> <br>
";

print "<a href='category.php'>View All...</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
print "<a href='add-cat.php'>Add Category</a><br><br>";

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
        <td><a href='' onclick='confirmDelete($row[id]);return false;'><button class='btn btn-outline-primary'><i class='bi bi-x-circle'></i></button></a></a> / <a href='edit-cat.php?id=$row[id]'>edit</a></td>
    </tr>
    ";
}
print"</table>";

print"<div style='margin-left:60px;font-size:20px'>";
for($i=1;$i<=$pages;$i++){
    echo "<a href='?p=$i'>$i</a> | ";
}
print "</div>";

print"<a href='logout.php'>Logout</a>";
?>


</body>
</html>


