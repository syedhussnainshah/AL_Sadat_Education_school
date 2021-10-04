<?php 
session_start();
ob_start();
$id = $_GET['id'];
$id_select = $_GET['id'];
// if (empty($id)) {
//     header("location: index.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS FIle Included -->
    <?php include_once 'link.php' ?>
</head>
 <?php include_once 'navbar.php' ?>
    <!-- Sidebar included -->
    <?php include_once 'sidebar.php' ?>
    <body>
<style>
    .seleted_input{
        background: green;
        color: white;
    }
</style>

        <?php 

 include_once"connection.php";
 
$select = "SELECT * FROM student_data WHERE student_id=$id_select";
    $runns = mysqli_query($conn, $select);
    $general_data = mysqli_fetch_array($runns);
        ?>
        <?php 
    $select = "SELECT * FROM std_gardian WHERE std_id=$id_select";
    $runn = mysqli_query($conn, $select);
    $gardian_data = mysqli_fetch_array($runn);

     $select = "SELECT * FROM std_images WHERE std_id=$id_select";
    $runn = mysqli_query($conn, $select);
    $image_data = mysqli_fetch_array($runn);

if (isset($_REQUEST['submit'])) {
    $std_reg = $_REQUEST['std_reg'];
    $std_roll = $_REQUEST['std_roll'];
    if ($std_class !='') {
    $std_class = $_REQUEST['std_class'];
     }else{
        $std_class = $general_data['std_class'];
     }
    $std_name = $_REQUEST['std_name'];
    if ($std_gen !='') {
    $std_gen = $_REQUEST['std_gen'];  
    }else{
        $std_gen = $general_data['std_gen'];
    }
    if ($std_DOB !='') {
        $std_DOB = $_REQUEST['std_DOB'];
    }else{
        $std_DOB = $general_data['std_DOB'];
    }
    $std_adres = $_REQUEST['std_adres'];
    if ($std_religion !='') {
    $std_religion = $_REQUEST['std_religion'];
    }else{
        $std_religion = $general_data['std_religion'];
    }
    if ($std_province !='') {
       $std_province = $_REQUEST['std_province'];
    }else{
        $std_province = $general_data['std_province'];
    }
    if ($std_city !='') {
        $std_city = $_REQUEST['std_city'];
    }else{
        $std_city = $general_data['std_city'];
    }
    
    $std_byform = $_REQUEST['std_byform'];

    $update = "UPDATE `student_data` SET `std_name`='$std_name',`std_reg`='$std_reg',`std_roll`='$std_roll',`std_gen`='$std_gen',`std_DOB`='$std_DOB',`std_adres`='$std_adres',`std_class`='$std_class',`std_religion`='$std_religion',`std_province`='$std_province',`std_city`='$std_city',`std_byform`='$std_byform' WHERE student_id=$id";
  $edit_data = mysqli_query($conn, $update);
  if ($edit_data) {
     $filename = $_FILES["std_image"]["name"];
    $tmpname =  $_FILES["std_image"]["tmp_name"];
    $folder = "files/".$filename;
    move_uploaded_file($tmpname, $folder);
    $image_update = "UPDATE std_images SET std_image=$filename WHERE std_id=$id";
    $imager_update = mysqli_query($conn, $update);
    if ($imager_update) {
          header("location:add_student.php");

    }else{
            echo "NO NO";
    }

}else{
    echo mysqli_error($conn);
}
}
        ?>
        <main>
<form class="row g-4" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
        <label class="form-label">Registration No</label>
        <input type="text" class="form-control" name="std_reg" value="<?php echo $general_data['std_reg'];?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Roll No</label>
        <input type="text" class="form-control" name="std_roll" value="<?php echo $general_data['std_roll'];?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Class</label>
        <select class="form-select" name="std_class" value="<?php echo $general_data['std_class'];?>">
            <option selected>Select Class</option>
            <option value="1">Play Group</option>
            <option value="2">Nursery</option>
            <option value="3">Prep</option>
            <option value="4">One</option>
            <option value="5">Two</option>
            <option value="6">Three</option>
            <option value="7">Four</option>
            <option value="8">Five</option>
            <option value="9">Six</option>
            <option value="10">Seven</option>
            <option value="11">Eight</option>
        </select>
    </div>
    <div class="col-md-6">
        <!-- <label class="form-label">Section</label>
        <select class="form-select">
            <option selected>Select Section</option>
            <option>Section A</option>
            <option>Section B</option>
        </select> -->
    </div>
    <div class="col-md-6 mt-3 mt-md-5">
        <label class="form-label">Student Image</label>
        <div class="admittion-img">
            <img src="files/<?php echo $image_data['std_image'];?>"  alt="Student Image">
        </div>
        <input type="file" name="std_image" class="form-control">
    </div>
    <div class="col-md-6">
        <div class="my-3">
            <label class="form-label">Student Name</label>
            <input type="text" class="form-control" name="std_name" value="<?php echo $general_data['std_name'];?>">
        </div>
        <div class="my-3">
            <label class="form-label">Student CNIC / B-Form Number</label>
            <input type="number" class="form-control" name="std_byform" value="<?php echo $general_data['std_byform'];?>">
        </div>
        <div class="row">
            <div class="col-md-6 my-3">
                <label class="form-label">Student Gender</label>
                <input type="text" class="form-control seleted_input" value="<?php
     $gene_id =  $general_data['std_gen'];
    $select = "SELECT * FROM gene WHERE gene_id=$gene_id";
    $runn = mysqli_query($conn, $select);
    $gene_data = mysqli_fetch_array($runn);
    echo $gene_data['gene_name'];?>">
                <select class="form-select" name="std_gen">
                    <option selected>Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="col-md-6 my-3">
                <label class="form-label">Student D.o.B</label>
                <input type="text"  class="form-control seleted_input" value="<?php echo $general_data['std_DOB'];?>">
                <input type="date" class="form-control" name="std_DOB" value="<?php echo $general_data['std_DOB'];?>">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label class="form-label">Religion</label>
        <input type="text" class="seleted_input form-control" value="<?php 
$religion_id =  $general_data['std_religion'];
    $select = "SELECT * FROM religion WHERE religion_id=$religion_id";
    $runn = mysqli_query($conn, $select);
    $religion_data = mysqli_fetch_array($runn);
    echo $religion_data['religion_name'];
    ?>">
        <select class="form-select" name="std_religion">
            <option selected>Muslim</option>
            <option>Cristian</option>
        </select>
    </div> 
    
    <div class="col-md-6">
        <label class="form-label">Gardian</label>
        <input type="text" class="form-control seleted_input" value="<?php 
$select = "SELECT * FROM std_gardian WHERE std_id=$id";
    $runn = mysqli_query($conn, $select);
    $gardian_data = mysqli_fetch_array($runn);
    echo $gardian_data['gardian_relation'];
    ?>">
        <select class="form-select">
            <option selected>Gardian Relationship</option>
            <option>Father</option>
            <option>Mother</option>
            <option>Other</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian Name</label>
        <input type="text" class="form-control" value="<?php echo $gardian_data['gardian_name'];?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian CNIC</label>
        <input type="number" class="form-control" value="<?php echo $gardian_data['gardian_cnic'];?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian Mobile Number</label>
        <input type="number" class="form-control" value="<?php echo $gardian_data['gardian_number'];?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Provience</label>
<input type="text" class="form-control seleted_input" value="
<?php  
    $std_province = $general_data['std_province'];
    $select = "SELECT * FROM provinces WHERE provinces_id=$std_province";
    $runn = mysqli_query($conn, $select);
    $province_data = mysqli_fetch_array($runn);
    echo $province_data['province_name'];
?>
 ">
        <select class="form-select" name="std_province">
            <option selected>Punjab</option>
            <option>Sindh</option>
            <option>Blochistan</option>
            <option>Khyber Pakhtunkhwa</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">City</label>
        <input type="text" class="form-control seleted_input" value="
<?php  
   $std_city = $general_data['std_city'];
    $select = "SELECT * FROM city WHERE city_id=$std_city";
    $runn = mysqli_query($conn, $select);
    $city_data = mysqli_fetch_array($runn);
    echo $city_data['city_name'];
?>
 ">
        <select class="form-select" name="std_city">
            <option selected value="1">Faislabad</option>
            <option value="2">Lahore</option>
        </select>
    </div>
    
    <div class="col-12">
        <label class="form-label">Parmanent Address</label>
        <input type="text" name="std_adres" class="form-control" placeholder="Apartment, studio, or floor" value="<?php echo $general_data['std_adres'];?>">
    </div>
    <div class="col-12">
        <button type="submit" name="submit" class="btn btn-primary">Update Record</button>
    </div>
</form>
</main>
 <?php include_once 'jslink.php' ?>

</body>