<?php 
ob_start(); 
include_once "connection.php";
if (isset($_REQUEST['submit'])) {
    $std_reg = $_REQUEST['std_reg'];
    $std_roll = $_REQUEST['std_roll']; 
    $std_class = $_REQUEST['std_class'];
    $std_name = $_REQUEST['std_name'];
    $std_gen = $_REQUEST['std_gen'];
    $std_DOB = $_REQUEST['std_DOB'];
    $std_adres = $_REQUEST['std_adres'];
    $std_religion = $_REQUEST['std_religion'];
    $std_province = $_REQUEST['std_province'];
    $std_city = $_REQUEST['std_city'];
    $time = date("G:i:s A");
    $date = date("d l M");
    $student_data = "INSERT INTO `student_data`(`std_name`, `std_reg`, `std_roll`, `std_gen`, `std_DOB`, `std_adres`, `std_class`, `std_religion`, `std_province`, `std_city`,`sub_time`,`sub_date`) VALUES ('$std_name','$std_reg', '$std_roll', '$std_gen', '$std_DOB','$std_adres', '$std_class', '$std_religion', '$std_province', '$std_city', '$time', '$date')";
    $runn_std = mysqli_query($conn, $student_data);
if ($runn_std) {
// image insert query
    $std_id = mysqli_insert_id($conn);

    $filename = $_FILES["std_image"]["name"];
    $tmpname =  $_FILES["std_image"]["tmp_name"];
    $folder = "files/".$filename;
    move_uploaded_file($tmpname, $folder);

    $insert_image = "INSERT INTO `std_images`(`std_image`, `std_id`) VALUES ('$filename', '$std_id')"; 
    $std_img = mysqli_query($conn, $insert_image);

 if ($std_img) {
    $gardian_relation = $_REQUEST['gardian_relation'];
    $gardian_name = $_REQUEST['gardian_name'];
    $gardian_cnic = $_REQUEST['gardian_cnic'];
    $gardian_number = $_REQUEST['gardian_number'];

    $insert_gardian = "INSERT INTO `std_gardian`(`gardian_name`, `gardian_cnic`, `gardian_number`, `gardian_relation`, `std_id`) VALUES ('$gardian_name', '$gardian_cnic', '$gardian_number', '$gardian_relation', '$std_id')"; 
    $gardians = mysqli_query($conn, $insert_gardian);
if ($gardians) {
       echo "ok";
}else{
        
}

 }else{
    echo "No Insert Image";
 }
    
}else{
    echo "Not General Data";
}


}

?>
<form class="row g-4" method="POST" enctype="multipart/form-data">
    <div class="col-md-6 mt-3 mt-md-5">
        <label class="form-label">Student Image</label>
        <div class="admittion-img">
            <img src="assets/images/student-img/img_avatar.png" alt="Student Image" >
        </div>
        <input type="file" class="form-control" name="std_image">
    </div>
    <div class="col-md-6 mt-3 mt-md-5">
       
    </div>
    <div class="col-md-6">
        <label class="form-label">Registration No</label>
        <input type="text" class="form-control" name="std_reg">
    </div>
    <div class="col-md-6">
        <label class="form-label">Roll No</label>
        <input type="text" class="form-control" name="std_roll">
    </div>
    <div class="col-md-6">
        <label class="form-label">Class</label>
        <select class="form-select" name="std_class">
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

        <div class="my-3">
            <label class="form-label">Student Name</label>
            <input type="text" class="form-control" name="std_name">
            
        </div>
       
        
    </div>
    <div class="row">
            <div class="col-md-6 my-3">
                <label class="form-label">Student Gender</label>
                <select class="form-select" name="std_gen">
                    <option selected>Select Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">Other</option>
                </select>
            </div>
            <div class="col-md-6 my-3">
                <label class="form-label">Student D.O.B</label>
                <input type="date" class="form-control" name="std_DOB">
            </div>
        </div>
    
    <div class="col-md-6">
        <label class="form-label">Religion</label>
        <select class="form-select" name="std_religion">
            <option selected value="1">Muslim</option>
            <option value="2">Cristian</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian Relation</label>
        <select class="form-select" name="gardian_relation">
            <option selected>Select Gardian</option>
            <option value="Father">Father</option>
            <option value="Mother">Mother</option>
            <option value="Other">Other</option>
        </select>
    </div> 
    <div class="col-md-6">
        <label class="form-label">Gardian Name</label>
        <input type="text" class="form-control" name="gardian_name">
    </div> 
    <div class="col-md-6">
        <label class="form-label">Gardian CNIC</label>
        <input type="number" class="form-control" name="gardian_cnic">
    </div>
    <div class="col-md-6">
        <label class="form-label">Gardian Mobile Number</label>
        <input type="number" class="form-control" name="gardian_number">
    </div>
    <div class="col-md-6">
        <label class="form-label">Provience</label>
        <select class="form-select" name="std_province">
            <option selected value="1">Punjab</option>
            <option value="2">Sindh</option>
            <option value="3">Blochistan</option>
            <option value="4">Khyber Pakhtunkhwa</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">City</label>
        <select class="form-select" name="std_city">
            <option selected value="1">Faislabad</option>
            <option value="2">Lahore</option>
        </select>
    </div>
    
    <div class="col-12">
        <label class="form-label">Parmanent Address</label>
        <input type="text" class="form-control" placeholder="Apartment, studio, or floor" name="std_adres">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary" name="submit">Submit Record</button>
    </div>
</form>