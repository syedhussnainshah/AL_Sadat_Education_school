<?php 
ob_start();
$id = $_GET['id'];

?>
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
    
   <style>
       .submit_btn{
        display: flex;justify-content: center;align-items: center;
       }
   </style>
 <?php 
$select = "SELECT * FROM city WHERE city_id=$id";
$sql = mysqli_query($conn,$select);
$city_detail = mysqli_fetch_array($sql)?>
   <?php 
if (isset($_REQUEST['submit'])) {
    $city_name = $_REQUEST['city_name'];
 

    $update = "UPDATE city SET city_name = '$city_name' WHERE city_id = $id";
    $sql = mysqli_query($conn,$update);
    if ($sql) {
        header("location:http://localhost/Al-Sadat-School/lms/city_add_view_edit.php");       
    }else{
        echo "Not OK";
    }
}

   ?>
        <main>
            <div class="container">
          
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="row" >
                   
                    
                        <div class="col-md-3">
                            <label for="" class="form-label">Book Name</label>
                            <input type="text" name="city_name" class="form-control" placeholder="" value="<?php echo $city_detail['city_name']?>">
                            <br>
                             <input type="submit" name="submit" class="btn btn-primary" value="submt">
                        </div>
                       
                        <div class="col-md-3 submit_btn">
                            
                           
                        </div>
                    
                </div>
                </form>
            </div>
             
                      
 
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
