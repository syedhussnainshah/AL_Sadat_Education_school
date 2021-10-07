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
    $city_name = $_REQUEST['city_name'];
    

    $insert = "INSERT INTO `city`(`city_name`) VALUES ('$city_name')";
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
           <h1 style="background: #457389;color: white;padding: 10px;">  <center>    CIty</center></h1>
                    <br>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="row" >
                   
                    
                        <div class="col-md-3">
                            <label for="" class="form-label">City Name</label>
                            <input type="text" name="city_name" class="form-control" placeholder=""><br>
                            <input type="submit" name="submit" class="btn btn-primary" value="submt">
                        </div>
                        
                        <div class="col-md-3 submit_btn">
                            
                            
                        </div>
                    
                </div>
                </form>
            </div>
             
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>

            <tr>
                
                <th>City Name</th>
                
                <th>Action</th>
                
            </tr>
        </thead>

        <tbody>
            <?php 
$select = "SELECT * FROM city";
$sql = mysqli_query($conn,$select);
            while ($city_detail = mysqli_fetch_array($sql)) {?>
               <tr>
                
                <td><?php echo $city_detail['city_name'];?></td>

               
                
              
                <style>
                    .icon_detail i{
                        margin-left: 10px;
                    }
                </style>
                <td class="icon_detail"><center><a href="edit_city.php?id=<?php echo $city_detail['city_id'];?>"> <i class="fas fa-edit"></i></a><a href="delete_city.php?id=<?php echo $city_detail['city_id'];?>"><i class="fas fa-trash-alt"></i></a></center></td>
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