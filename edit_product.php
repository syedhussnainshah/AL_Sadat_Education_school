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
$select = "SELECT * FROM product WHERE product_id=$id";
$sql = mysqli_query($conn,$select);
$product_detail = mysqli_fetch_array($sql)?>
   <?php 
if (isset($_REQUEST['submit'])) {
    $product_name = $_REQUEST['product_name'];
    $product_price = $_REQUEST['product_price'];
 

    $update = "UPDATE product SET product_name = '$product_name', product_price = '$product_price'  WHERE product_id = $id";
    $sql = mysqli_query($conn,$update);
    if ($sql) {
        header("location: product_delete_view.php");       
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
                            <input type="text" name="product_name" class="form-control" placeholder="" value="<?php echo $product_detail['product_name']?>">
                           
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Class FEE</label>
                            <input type="number" name="product_price" class="form-control" value="<?php echo $product_detail['product_price']?>">
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
