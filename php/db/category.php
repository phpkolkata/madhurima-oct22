
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

$where = "";
if(isset($_GET['srch'])){
    $where = "WHERE  `name` like '%$_GET[srch]%'";
}

$sql = "SELECT * FROM `category` $where ORDER BY `id` DESC";

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
?>


</body>
</html>


