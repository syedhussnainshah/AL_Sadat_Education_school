<?php 
include_once"connection.php";

if (isset($_REQUEST['submit'])) {
    $tech_reg = $_REQUEST['tech_reg'];
    $tech_name = $_REQUEST['tech_name'];
    $tech_cnic = $_REQUEST['tech_cnic'];
    $tech_numer = $_REQUEST['tech_numer'];
    $tech_rlig = $_REQUEST['tech_rlig'];
    $tech_desig = $_REQUEST['tech_desig'];
    $tech_sub = $_REQUEST['tech_sub'];
    $d_o_j = $_REQUEST['d_o_j'];
    $tech_gen = $_REQUEST['tech_gen'];
    $tech_dob = $_REQUEST['tech_dob'];
    $m_status = $_REQUEST['m_status'];
    $tech_hb_name = $_REQUEST['tech_hb_name'];
    $hb_cnic = $_REQUEST['hb_cnic'];
    $hb_number = $_REQUEST['hb_number'];
    $tech_father_name = $_REQUEST['tech_father_name'];
    $tech_f_cnic = $_REQUEST['tech_f_cnic'];
    $tech_f_number = $_REQUEST['tech_f_number'];
    $tech_m_name = $_REQUEST['tech_m_name'];
    $tech_province = $_REQUEST['tech_province'];
    $tech_city = $_REQUEST['tech_city'];
    $tech_adres = $_REQUEST['tech_adres'];

    $filename = $_FILES["tech_img"]["name"];
    $tmpname =  $_FILES["tech_img"]["tmp_name"];
    $folder = "files/".$filename;
    move_uploaded_file($tmpname, $folder);

    $inert = "INSERT INTO `teacher_data`(`tech_reg`, `tech_name`, `tech_img`, `tech_cnic`, `tech_numer`, `tech_rlig`, `tech_desig`, `tech_sub`, `d_o_j`, `tech_gen`, `tech_dob`, `m_status`, `tech_hb_name`, `hb_cnic`, `hb_number`, `tech_father_name`, `tech_f_cnic`, `tech_f_number`, `tech_m_name`, `tech_province`, `tech_city`, `tech_adres`) VALUES ('$tech_reg', '$tech_name', '$filename', '$tech_cnic', '$tech_numer', '$tech_rlig', '$tech_desig', '$tech_sub', '$d_o_j', '$tech_gen', '$tech_dob', '$m_status', '$tech_hb_name', '$hb_cnic', '$hb_number', '$tech_father_name', '$tech_f_cnic', '$tech_f_number', '$tech_m_name', '$tech_province', '$tech_city', '$tech_city')";
    $tech_runn = mysqli_query($conn, $inert);
    if ($tech_runn) {
       echo "SUbmit";    
}else{
    echo mysqli_error($conn);
}}
?>
<form class="row g-4" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
        <label class="form-label">Registration No</label>
        <input type="text" name="tech_reg" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Teacher Name</label>
        <input type="text" name="tech_name" class="form-control">
    </div>
    
    <div class="col-md-6 mt-3 mt-md-5">
        <label class="form-label">Teacher Image</label>
        <div class="admittion-img">
            <img src="assets/images/teacher-img/img_avatar.png" alt="Teacher Image">
        </div>
        <input type="file" name="tech_img" class="form-control">
    </div>

    <div class="col-md-6">
        <div class="my-3">
            <label class="form-label">Teacher CNIC</label>
            <input type="number" name="tech_cnic" class="form-control">
        </div>
        <div class="my-3">
            <label class="form-label">Teacher Contact No</label>
            <input type="number" name="tech_numer" class="form-control">
        </div>
        <div class="">
            <label class="form-label">Religion</label>
            <select class="form-select" name="tech_rlig">
                <option selected value="1">Muslim</option>
                <option value="2">Cristian</option>
            </select>
        </div> 
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher Degination</label>
        <select class="form-select" name="tech_desig">
            <option selected>Teacher</option>
            <option value="1">Senior Teacher</option>
            <option value="2">Junier Teacher</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher Subject</label>
        <input type="text" name="tech_sub" class="form-control">
    </div> 

    <div class="col-md-6">
        <label class="form-label">Date of Joining</label>
        <input type="date" name="d_o_j" class="form-control">
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher Gender</label>
        <select class="form-select" name="tech_gen">
            <option selected>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher D.o.B</label>
        <input type="date" name="tech_dob" class="form-control">
    </div>

    <div class="col-md-6">
        <label class="form-label">Material Status</label>
        <select class="form-select" name="m_status">
            <option value="1">Single</option>
            <option  value="2">Maried</option>
            
        </select>
    </div> 
    <div class="col-md-6">
        <label class="form-label">Husband Name</label>
        <input type="text" name="tech_hb_name" class="form-control">
    </div> 
    <div class="col-md-6">
        <label class="form-label">Husband CNIC</label>
        <input type="number" name="hb_cnic" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Husband Mobile Number</label>
        <input type="number" name="hb_number" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Father Name</label>
        <input type="text" name="tech_father_name" class="form-control">
    </div> 
    <div class="col-md-6">
        <label class="form-label">Father CNIC</label>
        <input type="number" name="tech_f_cnic" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Father Mobile Number</label>
        <input type="number" name="tech_f_number" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Mother Name</label>
        <input type="text" name="tech_m_name" class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Provience</label>
        <select class="form-select" name="tech_province">
            <option selected>Punjab</option>
            <option>Sindh</option>
            <option>Blochistan</option>
            <option>Khyber Pakhtunkhwa</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">City</label>
        <input type="text" name="tech_city" class="form-control" >
    </div>
    <div class="col-12">
        <label class="form-label">Parmanent Address</label>
        <input type="text" class="form-control" name="tech_adres" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-12">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit Record</button>
    </div>
</form>