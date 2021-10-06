<?php 
ob_start();

$id = $_GET['id'];
if (empty($id)) {
    header("location: index.php");
}
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
        <?php 
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
        
   <main> 
<div class="profile-bg">
    <div class="profile-img">
        <img src="files/<?php echo $image_data['std_image'];?>" alt="Profile Image">
    </div>
</div>
<style>
    .option_buton .row .col-md-3 a input{
width: 100%;
padding: 20px;
    }
</style>

   
   

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
                    <!-- <tr>
                        <th>Father Name</th>
                        <td><?php echo $gardian_data['gardian_name'];?></td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <td>Syed Husnain Shah</td>
                    </tr> -->
                    <tr>
                        <th>Gardian Name</th>
                        <td><?php echo $gardian_data['gardian_name'];?></td>
                    </tr>
                    <tr>
                        <th>Gardian Relation</th>
                        <td><?php echo $gardian_data['gardian_relation'];?></td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td><?php echo $general_data['std_DOB'];?></td>
                    </tr>
                    <tr>
                        <th>Religion</th>
                        <td>
    <?php 
    $religion_id =  $general_data['std_religion'];
    $select = "SELECT * FROM religion WHERE religion_id=$religion_id";
    $runn = mysqli_query($conn, $select);
    $religion_data = mysqli_fetch_array($runn);
    echo $religion_data['religion_name'];
                    ?>
                        
                    </td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>
<?php 
    $gene_id =  $general_data['std_gen'];
    $select = "SELECT * FROM gene WHERE gene_id=$gene_id";
    $runn = mysqli_query($conn, $select);
    $gene_data = mysqli_fetch_array($runn);
    echo $gene_data['gene_name'];
                    ?>
                        </td>
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
                        <td>
<?php 
    $class_id =  $general_data['std_class'];
    $select = "SELECT * FROM class WHERE class_id=$class_id";
    $runn = mysqli_query($conn, $select);
    $class_data = mysqli_fetch_array($runn);
    echo $class_data['class_name'];
                    ?>
                        </td>
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
                        <th>Date of Admittion</th>
                        <td>10/10/2021</td>
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
                        <th>Gardian Phone No</th>
                        <td><?php echo $gardian_data['gardian_number'];?></td>
                    </tr>
                    <tr>
                        <th>Provience</th>
                        <td>
                            <?php
    $std_province = $general_data['std_province'];
    $select = "SELECT * FROM provinces WHERE provinces_id=$std_province";
    $runn = mysqli_query($conn, $select);
    $province_data = mysqli_fetch_array($runn);
    echo $province_data['province_name'];
                            ?>
                                
                            </td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>
<?php
    $std_city = $general_data['std_city'];
    $select = "SELECT * FROM city WHERE city_id=$std_city";
    $runn = mysqli_query($conn, $select);
    $city_data = mysqli_fetch_array($runn);
    echo $city_data['city_name'];
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box-info">
            <h4 class="ms-0 mb-4">Address</h4>
            <h6>Permanemt Address:</h6>
            <p><?php echo $general_data['std_adres'];?></p>
        </div>
    </div>

</div>

<div class="container option_buton">
    <div class="row">
        <div class="col-md-3"><a href="edit_student_form.php?id=<?php echo $general_data['student_id'];?>"> <input type="submit" value="Edit Record" class="btn btn-primary"></a></div>
        <div class="col-md-3"><a href="delete_student.php?id=<?php echo $general_data['student_id'];?>"><input type="submit" value="Delete Record" class="btn btn-danger"></a></div>
        <div class="col-md-3"><a href="submit_fee.php?id=<?php echo $general_data['student_id'];?>"><input type="submit" value="Submit Fee" class="btn btn-danger"></a></div>
        <div class="col-md-3"><a href="purchase.php?id=<?php echo $general_data['student_id'];?>"><input type="submit" value="Product" class="btn btn-danger"></a></div>
    </div>
</div>

   

</main>
    <?php include_once 'jslink.php' ?>

</body>