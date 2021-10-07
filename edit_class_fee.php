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
$select = "SELECT * FROM class WHERE class_id=$id";
$sql = mysqli_query($conn,$select);
$class_detail = mysqli_fetch_array($sql)?>
   <?php 
if (isset($_REQUEST['submit'])) {
    $class_name = $_REQUEST['class_name'];
    $class_fee = $_REQUEST['class_fee'];
 

    $update = "UPDATE class SET class_name = '$class_name', class_fee = '$class_fee'  WHERE class_id = $id";
    $sql = mysqli_query($conn,$update);
    if ($sql) {
        header("location: class_fee_edit_view_delete.php");       
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
                            <label for="" class="form-label">Class Name</label>
                            <input type="text" name="class_name" class="form-control" placeholder="" value="<?php echo $class_detail['class_name']?>">
                           
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Class FEE</label>
                            <input type="number" name="class_fee" class="form-control" value="<?php echo $class_detail['class_fee']?>">
                        </div>
                       
                        <div class="col-md-3 submit_btn">
                            <input type="submit" name="submit" class="btn btn-primary" value="submt">
                           
                        </div>
                    
                </div>
                </form>
            </div>
             
                      
 
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
