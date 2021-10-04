<?php  
ob_start();

$id = $_GET['id'];
if (empty($id)) {
    header("location: index.php");
}


?>

        <?php 
        $id = $_GET['id'];
    $select = "SELECT * FROM student_data WHERE student_id=$id";
    $runn = mysqli_query($conn, $select);
    $general_data = mysqli_fetch_array($runn);
        ?>
        <?php 
    $select = "SELECT * FROM std_gardian WHERE std_id=$id";
    $runn = mysqli_query($conn, $select);
    $gardian_data = mysqli_fetch_array($runn);
        ?>
        <?php 
    $select = "SELECT * FROM std_images WHERE std_id=$id";
    $runn = mysqli_query($conn, $select);
    $image_data = mysqli_fetch_array($runn);
        ?>
<div class="profile-bg">
    <div class="profile-img">
        <img src="files/<?php echo $image_data['std_image'];?>" alt="Profile Image">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="box-info">
            <h4>Basic Info</h4>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Student Name</th>
                        <td><?php echo $general_data['std_name'];?></td>
                    </tr>
                    <tr>
                        <th>Student CNIC</th>
                        <td><?php echo $general_data['std_byform'];?></td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td><?php echo $general_data['std_DOB'];?></td>
                    </tr>
                    <tr>
                        <th>Religion</th>
                        <td> <?php 
    $religion_id =  $general_data['std_religion'];
    $select = "SELECT * FROM religion WHERE religion_id=$religion_id";
    $runn = mysqli_query($conn, $select);
    $religion_data = mysqli_fetch_array($runn);
    echo $religion_data['religion_name'];
                    ?></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td><?php 
    $gene_id =  $general_data['std_gen'];
    $select = "SELECT * FROM gene WHERE gene_id=$gene_id";
    $runn = mysqli_query($conn, $select);
    $gene_data = mysqli_fetch_array($runn);
    echo $gene_data['gene_name'];
                    ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box-info">
            <h4>Study Info</h4>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Class</th>
                        <td><?php 
    $class_id =  $general_data['std_class'];
    $select = "SELECT * FROM class WHERE class_id=$class_id";
    $runn = mysqli_query($conn, $select);
    $class_data = mysqli_fetch_array($runn);
    echo $class_data['class_name'];
                    ?></td>
                    </tr>
                    <tr>
                        <th>Section</th>
                        <td>A</td>
                    </tr>
                    <tr>
                        <th>Registration No</th>
                        <td><?php echo $general_data['std_reg']?></td>
                    </tr>
                    <tr>
                        <th>Roll No</th>
                        <td><?php echo $general_data['std_roll']?></td>
                    </tr>
                    <tr>
                        <th>Last Submited Fee</th>
                        <td>January</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
<style> 
.fee_table tr th{
background: black;color: white;text-align: center;padding: 10px;font-size: 20px;
}
.fee_table tr td{
    background: gray;color: white;text-align: center;
}
.total_margin{
    background: none;!important
}
.fee_table tr td{
    border: 1px solid black;
}

</style>

<div class="row g-3">
    
  <table class="fee_table table-responsive"> 
        <tr>    
<th>    Month Name</th>
<th>    Month Fee</th>
        </tr>
    <?php 
    $select = "SELECT * FROM student_fee WHERE std_id=$id";
    $runn = mysqli_query($conn, $select);
   while($fee_data = mysqli_fetch_array($runn)){
    ?>
<tr>    
<td>   
 <?php 
        $get_moth_id = $fee_data['fee_month'];      
        $select = "SELECT * FROM `month` WHERE month_id=$get_moth_id";
        $runns = mysqli_query($conn, $select);
        $month_name = mysqli_fetch_assoc($runns);
        echo $month_name['month_name'];
?>
    
</td>
<td>    <?php echo $fee_data['std_fee'];?></td>
</tr>


    <?php } ?>
     <tr> 
        <td ></td>
        <td class="bg-success"><?php  
$select =  "SELECT SUM(std_fee) AS total From student_fee WHERE std_id=$id";
$runn = mysqli_query($conn, $select);
        $fee_total = mysqli_fetch_assoc($runn);
        echo $fee_total['total'];

    ?></td>
    </tr> 
     </table>}
    
       
    
   


    
       

    <div class="col-12">
        <input type="submit" value="Submit Fee" class="btn btn-primary">
    </div>
    

</div>
