<?php 
ob_start();
$id = $_GET['id'];
if (empty($id)) {
    header("location: find_teacher.php");
}
$select = "SELECT * FROM teacher_data WHERE tech_id='$id'";
     $runn = mysqli_query($conn, $select);
    $tech_data = mysqli_fetch_array($runn);

   
    
?>
<form class="row g-4">
    <div class="col-md-6">
        <label class="form-label">Registration No</label>
        <input type="text" class="form-control" value="<?php echo $tech_data['tech_reg'];?>">
    </div>
    <div class="col-md-6">
        <label class="form-label">Teacher Name</label>
        <input type="text" class="form-control" value="<?php echo $tech_data['tech_name'];?>">
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
            <input type="number" class="form-control" value="<?php echo $tech_data['tech_cnic'];?>">
        </div>
        <div class="my-3">
            <label class="form-label">Teacher Contact No</label>
            <input type="number" class="form-control" value="<?php echo $tech_data['tech_numer'];?>">
        </div>
        <div class="">
            <label class="form-label">Religion</label>
            <select class="form-select" vlaue="<?php echo $tech_data['tech_rlig']?>">
                <option selected value="1">Muslim</option>
                <option value="2">Cristian</option>
            </select>
        </div> 
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher Degination</label>
        <select class="form-select" value="<?php echo $tech_data['tech_desig'];?>">
            <option selected>Teacher</option>
            <option value="1">Senior Teacher</option>
            <option value="2">Junier Teacher</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher Subject</label>
        <input type="text" class="form-control" value="<?php  $sub_id =  $tech_data['tech_sub'];
$select = "SELECT * FROM subject WHERE subject_id='$sub_id'";
     $runns = mysqli_query($conn, $select);
    $subject_data = mysqli_fetch_array($runns);
    echo $subject_data['sub_name'];?>">
    </div> 

    <!-- <div class="col-md-6">
        <label class="form-label">Date of Joining</label>
        <input type="date" class="form-control" value="<?php echo $tech_data['date'];?>">
    </div> -->

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
        
        <select class="form-select" name="tech_gen">
            <?php
             $select = "SELECT * FROM gene";
     $runn = mysqli_query($conn, $select);
             while ($gene_data = mysqli_fetch_array($runn)){?>
               <option value="<?php $gene_data['gene_id']?>"><?php echo $gene_data['gene_name'];?></option>
            
           <?php }?>
            
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label">Teacher D.o.B</label>
        <?php echo $tech_data['tech_dob'];?>
        <input type="date" class="form-control" name="tech_dob" value="
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
        <select class="form-select">
           <?php
             $select = "SELECT * FROM provinces";
     $runn = mysqli_query($conn, $select);
             while ($province_data = mysqli_fetch_array($runn)){?>
               <option value="<?php $province_data['provinces_id']?>"><?php echo $province_data['province_name'];?></option>
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
        <select name="tech_city" class="form-select" id="">
           <?php
             $select = "SELECT * FROM city";
     $runn = mysqli_query($conn, $select);
             while ($province_data = mysqli_fetch_array($runn)){?>
               <option value="<?php $province_data['city_id']?>"><?php echo $province_data['city_name'];?></option>
           <?php }?>
        </select>
        <!-- <input type="text" class="form-control" name="tech_city"> value="<?php echo $tech_data['tech_city'];?>"> -->
    </div>
    
    <div class="col-12">
        <label class="form-label">Parmanent Address</label>
        <input type="text" class="form-control" placeholder="Apartment, studio, or floor" value="<?php echo $tech_data['tech_adres']?>">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit Record</button>
    </div>
</form>