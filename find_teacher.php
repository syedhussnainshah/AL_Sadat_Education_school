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

    <!-- Main Section Start Here -->
   
    <main>
        <div class="container">
            <h1>Search Student</h1>

            <section>
                <form class="row g-3" action="" method="POST">
                    <div class="col-md-6">
                        <label class="form-label">Search By</label>
                        <select class="form-select" name="selected_option">
                            <option >Please Select one</option>
                            <option value="tech_reg">Registration Number</option>
                            
                            <option value="tech_name">Teacher Name</option>
                            <option value="tech_cnic">Teacher CNIC</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Enter Data</label>
                        <input type="text" class="form-control" name="serach_content">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit">Search Record</button>
                    </div>
                </form>

            </section>

        </div>
        <br>
        <style>
            .view_std{
                border: 1px solid black;
            }
            .view_std tr th{
                padding: 10px;background: black;color: white;
            }
            .view_std tr td{
                padding: 10px;
                text-align: center;
            }
        </style>
        <table class="form-control table-bordered p-3 view_std">
            <tr>
                <!-- <th>Student Roll No</th> -->
                <th>Student Reg</th>
                <th>Student Name</th>
                <th>Submit Date</th>
                <th>Submit Time</th>
                <th>Student View</th>
            </tr>
             <?php 
if (isset($_REQUEST['submit'])) {
    $tech_roll = $_REQUEST['serach_content'];
    $selected_option = $_REQUEST['selected_option'];

    if ($tech_roll != '' ) {
        echo '<div class="bg-success "style="padding: 10px;text-align: center;color: white;border-radius:10px;">Your Result Find Successfully</div>';
    }else{
        echo "Not ";
    }
    if ($selected_option != '' ) {
        echo "";
    }else{
        echo "Not ";
    }

    $select = "SELECT * FROM teacher_data WHERE $selected_option='$tech_roll'";
     $runn = mysqli_query($conn, $select);
    while($general_data = mysqli_fetch_array($runn)){
   
    ?>
            <tr>
                <!-- <td><?php echo $general_data['std_roll']?></td> -->
                <td><?php echo $general_data['tech_reg']?></td>
                <td><?php echo $general_data['tech_name']?></td>
                <td><?php echo $general_data['date']?></td>
                <td><?php echo $general_data['time']?></td>
                <td><a href="show_teacher.php?id=<?php echo $general_data['tech_id'];?>" class="icons blue"><i class="far fa-edit"></i></a></td>
            </tr>
            <?php }
}?>
        </table>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <button class="btn btn-primary">Borrow </button>
                </div>
                <div class="col-md-2"><button class="btn btn-primary">Purchase</button></div>
            </div>
        </div>
    </main>
    <!-- Main Section End Here -->
    
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>
