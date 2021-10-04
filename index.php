<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS FIle Included -->
    <?php include_once 'link.php' ?>
</head>
<body>

    <!-- Navbar included -->
    <?php include_once 'navbar.php' ?>
    <!-- Sidebar included -->
    <?php include_once 'sidebar.php' ?>
    <main>
        <?php echo $user_id;?>
 
 
       <?php 
if (isset($_REQUEST['submit'])) {
   $main_input = $_REQUEST['main_input'];
   
  
  $insert = "INSERT INTO `ajax`(`password`) VALUES ('$main_input')";
  $sql = mysqli_query($conn,$insert);
  if ($sql) {
      echo "OK";
  }else{
    echo "Not OK";
  }
}else{

 
}

        ?>
       
<form method="POST">
 <input type="text" id="input1"  /><br/>
<input type="text" id="input2" /><br/>

<input type="text" id="myInput" name="main_input"/>
<input type="submit" value="submit">
</form>
<script>
    $('document').ready(function() {
    $('#input1,#input2').each(function()   {$(this).on('change',recalculate);}
       );
});
function recalculate()
{
    if(isNaN(this.value))
       alert("Please enter a number");
    else
    {
        var a = 40;
        var value1 = $('#input1').val().trim() == "" ? 0 :  parseInt($('#input1').val());
        var value2 = $('#input2').val().trim() == "" ? 0 :  parseInt($('#input2').val());
        
        var total =  value1 * value2 
        $('#myInput').val(total);
    }
}
</script>



        
    </main>
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>