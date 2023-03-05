<?php
// $con = mysqli_connect("localhost", "root", "","mobile_demo");

$con = mysqli_connect("localhost", "asif", "asif","phpkolkata_new");

if(!$con){
    die("connection error");
}

$sql = "select * from tbl_blog";
$res = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($res)){
    $title = trim($row['title']);
    $title = str_replace(" ","-",$title);
    $title = str_replace("?","",$title);
    $title = str_replace("`","",$title);
    $title = str_replace("'","",$title);
    $title = str_replace("&","",$title);
    $title = str_replace("|","",$title);
    $title = str_replace("!","",$title);
    $title = str_replace(",","",$title);
    $title = str_replace(":","",$title);
    $title = str_replace("(","",$title);
    $title = str_replace(")","",$title);
    $title = str_replace("-–-","",$title);
    $title = str_replace("’","",$title);
    $title = str_replace(".","",$title);
    $title = str_replace("--","",$title);
    $title = str_replace("---","",$title);
    $title = str_replace("----","",$title);
    $title = strtolower($title);
    echo $title."<br>";
    $id = $row['id'];

    $meta = '
    <meta name="keywords"
        content="'.$row['title'].'">
    <meta name="description"
        content="'.$row['title'].'">

    ';

    mysqli_query($con, "update `tbl_blog` set `slug`='$title', `image`='pk-logo.png', `meta_tags`='$meta' where `id`='$id'");
}