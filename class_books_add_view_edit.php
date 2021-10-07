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
$select = "SELECT * FROM books WHERE class_id=$id";
$sql = mysqli_query($conn,$select);
$books_detail = mysqli_fetch_array($sql)?>
   <?php 
if (isset($_REQUEST['submit'])) {
    $book_name = $_REQUEST['book_name'];
    $book_price = $_REQUEST['book_price'];
if ($filename !='') {
   $filename = $_FILES["book_img"]["name"];
    $tmpname =  $_FILES["book_img"]["tmp_name"];
    $folder = "files/".$filename;
    move_uploaded_file($tmpname, $folder);
}else{
    $filename = $books_detail['book_img'];
}

    

    $update = "UPDATE books SET book_name = '$book_name', book_price = '$book_price', book_img = '$filename' WHERE book_id = $id";
    $sql = mysqli_query($conn,$update);
    if ($sql) {
        header("location: class_books_add_view.php?id='$id'");
        
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
                            <input type="text" name="book_name" class="form-control" placeholder="" value="<?php echo $books_detail['book_name']?>">
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Book Image</label>
                            
                            <input type="file" name="book_img" class="form-control" placeholder="" value="">
                            <div class="img"><img src="files/<?php echo $books_detail['book_img']; ?>"width="250px" alt=""></div>
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Book Price</label>
                            <input type="number" name="book_price" class="form-control" placeholder="" value="<?php echo $books_detail['book_price']?>">
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
</html>