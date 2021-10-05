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
<div class="profile-bg">
    <div class="profile-img">
        <img src="files/<?php echo $tech_data['tech_img'];?>" alt="Profile Image">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="box-info">
            <h4>Basic Info</h4>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Teacher Name</th>
                        <td><?php echo $tech_data['tech_name'];?></td>
                    </tr>
                    <tr>
                        <th>Teacher CNIC</th>
                        <td><?php echo $tech_data['tech_cnic'];?></td>
                    </tr>
                    <tr>
                        <th>Teacher Contact No</th>
                        <td><?php echo $tech_data['tech_numer'];?></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td><?php if ($tech_data['tech_gen']==1) {
                            echo "Male";
                        }else if ($tech_data['tech_gen']==2) {
                            echo "Female";
                        }else{
                            echo "No result";
                        } ;?></td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td><?php echo $tech_data['tech_dob'];?></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>20 Years</td>
                    </tr>
                    <tr>
                        <th>Religion</th>
                        <td><?php if ($tech_data['tech_rlig']==1) {
                            echo "Islam";
                        }else if ($tech_data['tech_gen']==2) {
                            echo "Christian";
                        }else{
                            echo "No result";
                        } ;?></td>
                    </tr>
                    <tr>
                        <th>Material Status</th>
                        <td><?php if ($tech_data['m_status']==1) {
                            echo "Single";
                        }else if ($tech_data['m_status']==2) {
                            echo "Maried";
                        }else{
                            echo "No result";
                        } ;?></td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box-info">
            <h4>Teaching Info</h4>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Degination</th>
                        <td><?php if ($tech_data['tech_desig']==1) {
                            echo "Senior";
                        }else if ($tech_data['tech_desig']==2) {
                            echo "Junior";
                        }else{
                            echo "No result";
                        } ;?></td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td><?php

                         $sub_id =  $tech_data['tech_sub'];
$select = "SELECT * FROM subject WHERE subject_id='$sub_id'";
     $runns = mysqli_query($conn, $select);
    $subject_data = mysqli_fetch_array($runns);
    echo $subject_data['sub_name'];
                    ?></td>
                    </tr>
                    <tr>
                        <th>Registration No</th>
                        <td><?php echo $tech_data['tech_reg'];?></td>
                    </tr>
                    <tr>
                        <th>Date of Joining</th>
                        <td><?php echo $tech_data['date'];?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box-info">
            <h4>Contact Info</h4>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Father Name</th>
                        <td><?php echo $tech_data['tech_father_name'];?></td>
                    </tr>
                    <tr>
                        <th>Father CNIC</th>
                        <td><?php echo $tech_data['tech_f_cnic'];?></td>
                    </tr>
                    <tr>
                        <th>Father Contact No</th>
                        <td><?php echo $tech_data['tech_f_number'];?></td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <td><?php if ($tech_data['tech_m_name']==''){
                            echo "No Result";
                        }else{
                            echo $tech_data['tech_m_name'];
                        } ?>
                            
                       </td>
                    </tr>
                    <tr>
                        <th>Husband Name</th>
                        <td><?php if ($tech_data['tech_hb_name']==''){
                            echo "No Result";
                        }else{
                            echo $tech_data['tech_hb_name'];
                        } ?></td>
                    </tr>
                    <tr>
                        <th>Husband CNIC</th>
                        <td><?php if ($tech_data['hb_cnic']==0){
                            echo "No Result";
                        }else{
                            echo $tech_data['hb_cnic'];
                        } ?></td>
                    </tr>
                    <tr>
                        <th>Husband Contact No</th>
                        <td><?php if ($tech_data['hb_number']==0){
                            echo "No Result";
                        }else{
                            echo $tech_data['hb_number'];
                        } ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box-info">
            <h4 class="ms-0 mb-4">Address</h4>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Provience</th>
                        <td><?php 
                      
                        $provin_id =  $tech_data['tech_province'];
$select = "SELECT * FROM provinces WHERE provinces_id='$provin_id'";
     $runns = mysqli_query($conn, $select);
    $subject_data = mysqli_fetch_array($runns);
    echo $subject_data['province_name'];
                    ?></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>Faisalabad</td>
                    </tr>
                </table>
            </div>
            <h6>Postal Address:</h6>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            <h6>Permanemt Address:</h6>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>

</div>

<div class="container option_buton">
    <div class="row">
        <div class="col-md-3"><a href="edit_teacher.php?id=<?php echo $tech_data['tech_id'];?>"> <input type="submit" value="Edit Record" class="btn btn-primary"></a></div>
        <div class="col-md-3"><a href="delete_student.php?id=<?php echo $general_data['student_id'];?>"><input type="submit" value="Delete Record" class="btn btn-danger"></a></div>
        <div class="col-md-3"><a href="submit_fee.php?id=<?php echo $general_data['student_id'];?>"><input type="submit" value="Submit Fee" class="btn btn-danger"></a></div>
        <div class="col-md-3"><a href="purchase.php?id=<?php echo $general_data['student_id'];?>"><input type="submit" value="Product" class="btn btn-danger"></a></div>
    </div>
</div>