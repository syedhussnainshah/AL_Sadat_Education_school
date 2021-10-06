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
if (isset($_REQUEST['submit'])) {
    $book_name = $_REQUEST['book_name'];
    $book_price = $_REQUEST['book_price'];


    $filename = $_FILES["book_img"]["name"];
    $tmpname =  $_FILES["book_img"]["tmp_name"];
    $folder = "files/".$filename;
    move_uploaded_file($tmpname, $folder);

    $insert = "INSERT INTO `books`(`book_name`, `book_img`, `book_price`, `class_id`) VALUES ('$book_name','$filename','$book_price', '$id')";
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
           <h1 style="background: #457389;color: white;padding: 10px;">  <center>    <?php 
$select = "SELECT * FROM class WHERE class_id=$id";
$sql = mysqli_query($conn,$select);
$class_fee = mysqli_fetch_array($sql);
echo $class_fee['class_name'];
                    ?> BOOKS</center></h1>
                    <br>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="row" >
                   
                    
                        <div class="col-md-3">
                            <label for="" class="form-label">Book Name</label>
                            <input type="text" name="book_name" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Book Image</label>
                            <input type="file" name="book_img" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Book Price</label>
                            <input type="number" name="book_price" class="form-control" placeholder="">
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
                <th>Book Image</th>
                <th>Book Name</th>
                <th>Book Price</th>
                <th>Action</th>
                
            </tr>
        </thead>

        <tbody>
            <?php 
$select = "SELECT * FROM books WHERE class_id=$id";
$sql = mysqli_query($conn,$select);
            while ($books_detail = mysqli_fetch_array($sql)) {?>
               <tr>
                <td><img src="files/<?php echo $books_detail['book_img'];?>" width="61px" alt="Profile Image"></td>
                <td><?php echo $books_detail['book_name']?></td>

                <td><?php echo $books_detail['book_price']?></td>
                
              
                <style>
                    .icon_detail i{
                        margin-left: 10px;
                    }
                </style>
                <td class="icon_detail"><center><a href="edit_student_form.php?id=<?php echo $books_detail['class_id'];?>"> <i class="fas fa-edit"></i></a><a href="delete_student.php?id=<?php echo $books_detail['class_id'];?>"><i class="fas fa-trash-alt"></i></a><a href="single_student_detail.php?id=<?php echo $books_detail['class_id'];?>" class="icons blue"><i class="fas fa-eye"></i></a></center></td>
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