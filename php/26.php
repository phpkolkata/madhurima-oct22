<!-- IMPORTANT ->  method="post" enctype="multipart/form-data" -->

<?php
if(isset($_REQUEST['msg'])){
    print"<div style='color:red'>$_REQUEST[msg]</div>";
}
?>


<form action="upload.php" method="post" enctype="multipart/form-data">
    Name:<input type="text" name="nm"><br>
    Image:<input type="file" name="im"><br>
    <button>submit</button>
</form>