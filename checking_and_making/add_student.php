<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once"../link.php";?>
</head>
<body>
    <?php 
    include_once"../connection.php";
?>
<div id="content">
    <form action="">
        <label>COUNTRY:</label>
        <select name="" id="country">
            <option value=""></option>
        </select>
        <br><br>
        <label>STATE:</label>
        <select name="" id="sate">
            <option value=""></option>
        </select>
    </form>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>
        $(Document).ready(function () {
           function loadData(){
            $.ajax({
                url : "updqty.php",
                type: "POST",
                success:function(data){
                    $("#country").append(data);
                }
            })

           } 
           loadData();
        });
    </script>
</div>
</body>
</html>