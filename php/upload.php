<?php
print_r($_POST);

print"<pre>";
print_r($_FILES);

extract($_FILES['im']);

copy($tmp_name, "uploads/$name");

print"<img src='uploads/$name'>";