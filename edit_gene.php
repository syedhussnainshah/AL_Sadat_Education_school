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
$select = "SELECT * FROM gene WHERE gene_id=$id";
$sql = mysqli_query($conn,$select);
$gene_detail = mysqli_fetch_array($sql)?>
   <?php 
if (isset($_REQUEST['submit'])) {
    $gene_name = $_REQUEST['gene_name'];
    
 

    $update = "UPDATE gene SET gene_name = '$gene_name'  WHERE gene_id = $id";
    $sql = mysqli_query($conn,$update);
    if ($sql) {
        header("location: gene_edit_delete_view.php");       
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
                            <input type="text" name="gene_name" class="form-control" placeholder="" value="<?php echo $gene_detail['gene_name']?>">
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
