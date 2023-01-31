<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
Email <input type="text" id="em"><span id="msg"></span>
<br>
<button id="btn">check</button>


<script src="jquery.js"></script>
<script lang="javascript">
    // OBJECT
// {
//     property:value;
//     property:value
// }


$("document").ready(function(){


    $("#em").blur(function(){
        $.ajax({
            url:'check.php',
            method:'post',
            data:{email:$("#em").val()},
            success:function(data){
                if(data == 1){
                    // alert("already exits")
                    $("#msg").html("email already exits");
                    $("#msg").css("color", "red");
                }

            },
            error:function(err){

            }
        });
    });


});

</script>
</body>
</html>