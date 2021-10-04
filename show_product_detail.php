<?php  
$id = $_GET['id'];

?>


    <!-- CSS FIle Included -->
    <?php include_once 'link.php' ?>

<body>


    <!-- Navbar included -->
    <?php include_once 'navbar.php' ?>
    <!-- Sidebar included -->
    <?php include_once 'sidebar.php' ?>

    <!-- Main Section Start Here -->
    <main>
         <?php 
         
   

   
    $select = "SELECT * FROM student_data WHERE student_id=$id";
    $runn = mysqli_query($conn, $select);
    $general_data = mysqli_fetch_array($runn);

    // $select = "SELECT * FROM sale_borow WHERE std_id = 44";
    // $go = mysqli_query($conn, $select);
    // $gardians = mysqli_fetch_array($go);
    // echo $gardians['product_condition'];
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
    .table_container{
        
        height: 100px;
    }
    .table_container .row .col-md-6 h3{
        text-align: center;font-weight: bold;color: black;
    }
    .table_container .row .col-md-6{
        
        height: 100px;
    }
    .start_table{
        border: 1px solid black;background: black;color: white;width: 100%;text-align: center;
    }
    .start_table tr td{
        background: white;color: black;border: 1px solid balck;border-right: 1px solid black;border-bottom: 1px solid black;padding: 10px;
    }
    .start_table tr{
        padding: 30px;
    }
    .start_table tr th{
        padding: 10px;
    }
</style>
<?php 
$select = "SELECT * FROM `sale` WHERE std_id=$id AND product_condition = 2";
$runn = mysqli_query($conn, $select);
?>
<div class="container table_container">
    <div class="row">
        <div class="col-md-6">
            <h3>Borrow Product</h3>
            <table class="table-responsive start_table">
                <form action="" method="POST">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <!-- table loop in php -->
                <?php while ($general_datas = mysqli_fetch_assoc($runn)) {?>
                <tr>
                    <td>
                         <!-- product name in php  from other table-->
    <?php
        $prod_id = $general_datas['product_id'];      
        $sale_id = $general_datas['sale_id'];      
        $select = "SELECT * FROM `product` WHERE product_id=$prod_id";
        $runns = mysqli_query($conn, $select);
        $month_name = mysqli_fetch_assoc($runns);
        echo $month_name['product_name'];?>
                    </td>
                    <td>
                        <!-- product price in php  -->
                        <?php echo $month_name['product_price'];?>
                            
                        </td>
                        <!-- check input for loop to submit borrow price -->
    <?php 
        if (isset($_REQUEST['submit'])) {
        $condition = $_REQUEST['condition'];
        $number = 1;
        $update = "UPDATE `sale` SET `product_condition`=$number WHERE sale_id=$condition";
        $go = mysqli_query($conn, $update);
        if ($go) {
       
   }
}
    ?>
                    <td>
                        
                        <input class="form-check-input" type="checkbox" value="<?php echo $general_datas['sale_id'];?>" name="condition" id="flexCheckDefault">

                    </td>
                </tr>
                <!-- table loop end in php  -->
            <?php }?>

                <tr>
                    <td style="border-right: none;border-bottom: none;"></td>
                    <td style="border-right: none;border-bottom: none;"><input  type="submit" name="submit" class="btn btn-primary"></td>
                    <td style="border-right: none;border-bottom: none;"></td>
                    
                </tr>
               </form>
            </table>

        </div>
        <div class="col-md-6">
            <h3>Purchase Product</h3>
            <?php 
$select = "SELECT * FROM `sale` WHERE std_id=$id AND product_condition = 1";
$runn = mysqli_query($conn, $select);
?>
            <table class="table-responsive start_table">
                <form action="" method="POST">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <!-- table loop in php -->
                <?php while ($general_datas = mysqli_fetch_assoc($runn)) {?>
                <tr>
                    <td>
                         <!-- product name in php  from other table-->
    <?php
        $prod_id = $general_datas['product_id'];      
        $sale_id = $general_datas['sale_id'];      
        $select = "SELECT * FROM `product` WHERE product_id=$prod_id";
        $runns = mysqli_query($conn, $select);
        $month_name = mysqli_fetch_assoc($runns);
        echo $month_name['product_name'];?>
                    </td>
                    <td>
                        <!-- product price in php  -->
                        <?php echo $month_name['product_price'];?>
                            
                        </td>
                    <td>
                       <h3>
                           <i class="fas fa-check" style="color: blue; text-shadow: 4px 4px 5px black;"></i>
                       </h3>
                    </td>
                </tr>
                <!-- table loop end in php  -->
            <?php }?>
            <?php 
        if (isset($_REQUEST['update'])) {
        $condition = 1;
        $number = 3;
        $update = "UPDATE `sale` SET `product_condition`=$number WHERE product_condition=$condition AND std_id=$id";
        $go = mysqli_query($conn, $update);
        if ($go) {
       
   }
}
    ?>
             <tr>
                    <td style="border-right: none;border-bottom: none;"></td>
                    <td style="border-right: none;border-bottom: none;"><input  type="submit" value="Delete Record" name="update" class="btn btn-primary"></td>
                    <td style="border-right: none;border-bottom: none;"></td>
                    
                </tr>
               
               </form>
            </table>
        </div>
    </div>
</div>
<br><br><br><br>




</main>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/JavaScript">
      function active_inactive_user(val,id){
        $.ajax({
type:'post',
url: 'change.php',
data:{val:val,id:id},
success: function(result){
  if(result==1){
    $('#str'+id).html('Active');
  }else{
    $('#str'+id).html('Disactive');
  }
}
        });
      }

    </script>