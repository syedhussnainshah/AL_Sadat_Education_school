<?php 
ob_start();


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
if (isset($_REQUEST['submit'])) {
    $class_name = $_REQUEST['class_name'];
    $class_fee = $_REQUEST['class_fee'];


  
    $insert = "INSERT INTO `class`(`class_name`, `class_fee`) VALUES ('$class_name', '$class_fee')";
    $sql = mysqli_query($conn,$insert);
    if ($sql) {
        echo "OK";
    }else{
        echo "Not OK";
    }
}

   ?>
        <main>
            <div class="container">
           <h1 style="background: #457389;color: white;padding: 10px;"> Class Fee</center></h1>
                    <br>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="row" >
                   
                    
                        <div class="col-md-3">
                            <label for="" class="form-label">Class Name</label>
                            <input type="text" name="class_name" class="form-control" placeholder="">
                        </div>
                        
                        <div class="col-md-3">
                            <label for="" class="form-label">Class Fee</label>
                            <input type="number" name="class_fee" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-3 submit_btn">
                            
                            <input type="submit" name="submit" class="btn btn-primary" value="submt">
                        </div>
                    
                </div>
                </form>
            </div>
             
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>

            <tr>
                <th>Class Name</th>
                <th>CLass  Fee</th>
                
                <th>Action</th>
                
            </tr>
        </thead>

        <tbody>
            <?php 
$select = "SELECT * FROM class ";
$sql = mysqli_query($conn,$select);
            while ($class_detail = mysqli_fetch_array($sql)) {?>
               <tr>
                
                <td><?php echo $class_detail['class_name']?></td>

                <td><?php echo $class_detail['class_fee']?></td>
                
              
                <style>
                    .icon_detail i{
                        margin-left: 10px;
                    }
                </style>
                <td class="icon_detail"><center><a href="edit_class_fee.php?id=<?php echo $class_detail['class_id'];?>"> <i class="fas fa-edit"></i></a><a href="delete_student.php?id=<?php echo $class_detail['class_id'];?>"><i class="fas fa-trash-alt"></i></a></center></td>
            </tr>
           <?php }?>
            
           
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table> 
                   
        </main>
 
 
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>