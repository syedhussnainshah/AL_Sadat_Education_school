<?php 
$id = $_GET['id'];

$select = "SELECT * FROM teacher_data WHERE tech_id='$id'";
     $runn = mysqli_query($conn, $select);
    $tech_data = mysqli_fetch_array($runn);

   
    
?>
<?php 
if (isset($_REQUEST['submit'])) {
    $tech_reg = $_REQUEST['tech_reg'];
    $tech_name =$_REQUEST['tech_name'];
    $tech_cnic =$_REQUEST['tech_cnic'];
    $tech_numer = $_REQUEST['tech_numer'];
    $tech_rlig = $_REQUEST['tech_rlig'];
    $tech_desig = $_REQUEST['tech_desig'];
    $tech_sub = $_REQUEST['tech_sub'];
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
    $tech_adres = $_REQUEST['tech_adres'];
    if ($filename !='') {
       $filename = $_FILES["tech_img"]["name"];
    $tmpname =  $_FILES["tech_img"]["tmp_name"];
    $folder = "files/".$filename;
    move_uploaded_file($tmpname, $folder);
    }else{
        $filename = $tech_data['tech_img'];
    }
     

    $update = "UPDATE `teacher_data` SET `tech_reg`='$tech_reg',`tech_name`='$tech_name',`tech_img`='$filename',`tech_cnic`='$tech_cnic',`tech_numer`='$tech_numer',`tech_rlig`='$tech_rlig',`tech_desig`='$tech_desig',`tech_sub`='$tech_sub',`tech_gen`='$tech_gen',`tech_dob`='$tech_dob',`m_status`='$m_status',`tech_hb_name`='$tech_hb_name',`hb_cnic`='$hb_cnic',`hb_number`='$hb_number',`tech_father_name`='$tech_father_name',`tech_f_cnic`='$tech_f_cnic',`tech_f_number`='$tech_f_number',`tech_m_name`='$tech_m_name',`tech_province`='$tech_province',`tech_city`='$tech_city',`tech_adres`='$tech_adres' WHERE tech_id='$id'";
    $sql = mysqli_query($conn,$update);
    if ($sql) {
      echo "OK";
    }else{
        echo mysqli_error($conn);
    }
}

?>
<form class="row g-4" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
        <label class="form-label">Registration No</label>
        <input type="text" class="form-control" name="tech_reg" value="<?php echo $tech_data['tech_reg'];?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Teacher Name</label>
        <input type="text" class="form-control" name="tech_name" value="<?php echo $tech_data['tech_name'];?>">
    </div>
    
    <div class="col-md-6 mt-3 mt-md-5">
        <label class="form-label">Teacher Image</label>
        <div class="admittion-img">
            <img src="files/<?php echo $tech_data['tech_img'];?>" alt="Teacher Image">
        </div>
        <input type="file" class="form-control" name="tech_img">
    </div>

    <div class="col-md-6">
        <div class="my-3">
            <label class="form-label">Teacher CNIC</label>
            <input type="number" class="form-control" name="tech_cnic" value="<?php echo $tech_data['tech_cnic'];?>">
        </div>
        <div class="my-3">
            <label class="form-label">Teacher Contact No</label>
            <input type="number" class="form-control" name="tech_numer" value="<?php echo $tech_data['tech_numer'];?>">
        </div>
        <div class="">
            <label class="form-label">Religion</label>
            <select class="form-select" name="tech_rlig"> vlaue="<?php echo $tech_data['tech_rlig']?>">
                <option selected value="1">Muslim</option>
                <option value="2">Cristian</option>
            </select>
        </div> 
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher Degination</label>
        <select class="form-select" name="tech_desig"> value="<?php echo $tech_data['tech_desig'];?>">
            
            <option value="1">Senior Teacher</option>
            <option value="2">Junier Teacher</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher Subject</label>
        <br>
        <span class="bg-primary" style="padding: 5px;color: white;width: 100%;"><?php  $sub_id =  $tech_data['tech_sub'];
$select = "SELECT * FROM subject WHERE subject_id='$sub_id'";
     $runns = mysqli_query($conn, $select);
    $subject_data = mysqli_fetch_array($runns);
    echo $subject_data['sub_name'];?></span>
      <select name="tech_sub" class="form-control" id="" required>
         <?php
             $select = "SELECT * FROM subject";
                $runn = mysqli_query($conn, $select);
             while ($subj_data = mysqli_fetch_array($runn)){ ?>

               <option value="<?php echo $subj_data['subject_id']?>"><?php echo $subj_data['sub_name'];?></option>
            
           <?php }?>
    </select>
    </div> 

    <div class="col-md-6">
        <label class="form-label">Teacher Gender</label>
        <br>
        <span class="bg-primary" style="padding: 5px;color: white;width: 100%;"><?php

         $tech_gene_id=$tech_data['tech_gen'];
$select = "SELECT * FROM gene WHERE gene_id=$tech_gene_id";
     $runn = mysqli_query($conn, $select);
     $gene_data_show = mysqli_fetch_array($runn);
     echo $gene_data_show['gene_name'];

         ?></span>
        
        <select class="form-select" name="tech_gen" required>
            <?php
             $select = "SELECT * FROM gene";
     $runn = mysqli_query($conn, $select);
             while ($gene_data = mysqli_fetch_array($runn)){?>
               <option  value="<?php echo $gene_data['gene_id']?>"><?php echo $gene_data['gene_name'];?></option>
            
           <?php }?>
            
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher D.o.B</label>
        <?php echo $tech_data['tech_dob'];?>
        <input type="date" class="form-control" name="tech_dob" value="">
    </div>

    <div class="col-md-6">
        <label class="form-label">Material Status</label>
        <select class="form-select" name="m_status">
            <option selected value="1">Maried</option>
            <option value="2">Single</option>
        </select>
    </div> 
    <div class="col-md-6">
        <label class="form-label">Husband Name</label>
        <input type="text" name="tech_hb_name" class="form-control" value="<?php if ($tech_data['tech_hb_name']==''){
                            echo "No Result";
                        }else{
                            echo $tech_data['tech_hb_name'];
                        } ?>">
    </div> 
    <div class="col-md-6">
        <label class="form-label">Husband CNIC</label>
        <input type="number" name="hb_cnic" class="form-control" value="<?php if ($tech_data['hb_cnic']==0){
                            echo "No Result";
                        }else{
                            echo $tech_data['hb_cnic'];
                        } ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Husband Mobile Number</label>
        <input type="number" name="hb_number" class="form-control" value="<?php if ($tech_data['hb_number']==0){
                            echo "No Result";
                        }else{
                            echo $tech_data['hb_number'];
                        } ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Father Name</label>
        <input type="text" name="tech_father_name" class="form-control" value="<?php echo $tech_data['tech_father_name'];?>">
    </div> 
    <div class="col-md-6">
        <label class="form-label">Father CNIC</label>
        <input type="number" name="tech_f_cnic" class="form-control" value="<?php echo $tech_data['tech_f_cnic'];?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Father Mobile Number</label>
        <input type="number" name="tech_f_number" class="form-control" value="<?php echo $tech_data['tech_f_number'];?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Mother Name</label>
        <input type="text" name="tech_m_name" class="form-control" value="<?php if ($tech_data['tech_m_name']==''){
                            echo "No Result";
                        }else{
                            echo $tech_data['tech_m_name'];
                        } ?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Provience</label>
        <select class="form-select" name="tech_province">
           <?php
             $select = "SELECT * FROM provinces";
     $runn = mysqli_query($conn, $select);
             while ($province_data = mysqli_fetch_array($runn)){?>
               <option value="<?php echo $province_data['provinces_id']?>"><?php echo $province_data['province_name'];?></option>
           <?php }?>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">City</label>
         <span class="bg-primary" style="padding: 5px;color: white;width: 100%;"><?php

         $tech_city_id=$tech_data['tech_city'];
$select = "SELECT * FROM city WHERE city_id=$tech_city_id";
     $runn = mysqli_query($conn, $select);
     $city_data_show = mysqli_fetch_array($runn);
     echo $city_data_show['city_name'];

         ?></span>
        <select name="tech_city" class="form-select" id="" required>
           <?php
             $select = "SELECT * FROM city";
     $runn = mysqli_query($conn, $select);
             while ($province_data = mysqli_fetch_array($runn)){?>
               <option value="<?php echo $province_data['city_id']?>"><?php echo $province_data['city_name'];?></option>
           <?php }?>
        </select>
       
    </div>
    
    <div class="col-12">
        <label class="form-label">Parmanent Address</label>
        <input type="text" class="form-control" name="tech_adres" placeholder="Apartment, studio, or floor" value="<?php echo $tech_data['tech_adres']?>">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit Record</button>
    </div>
</form>