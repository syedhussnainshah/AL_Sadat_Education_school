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
    <?php  
// echo $_GET['id'];
$id = $_GET['id'];
$select = "SELECT * FROM student_data WHERE student_id=$id";
    $runn = mysqli_query($conn, $select);
    $general_data = mysqli_fetch_array($runn);

if (isset($_REQUEST['submit'])) {
    $std_class = $general_data['std_class'];
    $student_name = $_REQUEST['student_name'];
    $std_roll = $general_data['std_roll'];
    $std_fee = $_REQUEST['std_fee'];
    $fee_month = $_REQUEST['fee_month'];

    $insert = "INSERT INTO `student_fee`(`student_name`, `std_id`, `std_fee`, `std_class`, `std_roll`, `fee_month`) VALUES ('$student_name', '$id', '$std_fee', '$std_class', '$std_roll', '$fee_month')";
    $runns = mysqli_query($conn, $insert);
    if ($runns) {
        echo "OK";
    }else{
        echo "Not OK";
    }
}

    ?>
    <main>
        <div class="container">
            <h1>Submit Fee</h1>

            <section>
                <form class="row g-3" s method="POST" enctype="multipart/form-data">
                    

                    <div class="col-md-6">
                        <label class="form-label">Student Name</label>
                        <input type="text" class="form-control" name="student_name" value="<?php echo $general_data['std_name'];?>">
                    </div>

                    <div class="col-md-6">
        <label class="form-label">Month</label>
        <select class="form-select" name="fee_month">
            <option selected>Please Select Month</option>
            <option value="1">January</option>
            <option value="2">Feburary</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">Septumber</option>
            <option value="10">Octuber</option>
            <option value="11">November</option>
            <option value="11">December</option>
        </select>
    </div>
                    <div class="col-md-6">
                        <label class="form-label">FEE</label>
                        <input type="number" class="form-control" name="std_fee">
                    </div>
                    <div class="col-12">
                       <a href=""> <button type="submit" name="submit" class="btn btn-primary">Submit Fee</button></a>

                       <a href="show_fee_detail.php?id=<?php echo $general_data['student_id'];?>" class="btn btn-primary">Fee Detail</a>
                    </div>
                </form>

            </section>
        </div>
    </main>
    <!-- Main Section End Here -->
    
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>
