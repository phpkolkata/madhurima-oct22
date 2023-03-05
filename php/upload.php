<?php
print_r($_POST);

print"<pre>";
print_r($_FILES);

extract($_FILES['im']);

// $id = rand(1,9999);
$id = time();
$name = $id."-".$name;

if($error == 0){
    if($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg" || $type == "image/gif" )
        copy($tmp_name, "uploads/$name");
    else
        header("location:26.php?msg=Image format not supported!");
}
else{
    header("location:26.php?msg=Image upload error!");
}

print"<img src='uploads/$name'>";