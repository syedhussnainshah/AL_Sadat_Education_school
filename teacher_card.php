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

    

        <main>  
            <style>

                .index_section .row .col-md-4{
                    background: var(--sidebarcolor);margin: 1px;
                }
                .index_section .row .col-md-4 a h3{
                    float: right;font-size: 20px;padding-top: 25px;text-decoration: none;color: white;
                }
                .index_section .row .col-md-4 .row {
                    padding: 10px;display: flex;justify-content: center;align-items: center;
                }
                .index_section .row .col-md-4 .row .col-md-3 span{
                    color: var(--primarycolor);font-weight: bold;

                }
            </style>
            <?php 
$select = "SELECT count(tech_id) as tech_number FROM teacher_data";
$runn = mysqli_query($conn, $select);
$al_tech_n = mysqli_fetch_array($runn);
$select = "SELECT count(tech_id) as tech_senior FROM teacher_data WHERE tech_desig=1 ";
$runn = mysqli_query($conn, $select);
$tech_senior = mysqli_fetch_array($runn);
$select = "SELECT count(tech_id) as tech_junior FROM teacher_data WHERE tech_desig=2 ";
$runn = mysqli_query($conn, $select);
$tech_junior = mysqli_fetch_array($runn);





            // Start Query For Class Play
$select = "SELECT * FROM teacher_data";
$runn = mysqli_query($conn, $select);



// End Query For Class Play

            ?>
            <div class="container index_section">
                <div class="row">
      <center><h1>Teacher</h1></center>   
      <div class="col-md-3 offset-1">
          <h3>Total Teacher : <?php echo $al_tech_n['tech_number']?></h3>
      </div>
      <div class="col-md-3">
          <h3>Senior : <?php echo $tech_senior['tech_senior']?></h3>
      </div>
      <div class="col-md-3">
          <h3>Junior : <?php echo $tech_junior['tech_junior']?></h3>
      </div>          
<table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>

            <tr>
                <th>Registration No</th>
                <th>Name</th>
                <th>Designatio</th>
                
                
                
                <th>Joining date</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($all_teachers = mysqli_fetch_array($runn)) {?>
               <tr>
                <td><?php echo $all_teachers['tech_reg']?></td>
                <td><?php echo $all_teachers['tech_name']?></td>
                <td><?php 
if ($all_teachers['tech_desig']==1) {
    echo "Senior";
}else{
    echo "junior";
}


            ?></td>

               
                
                <td><?php echo $all_teachers['date']?></td>
               
                <style>
                    .icon_detail i{
                        margin-left: 10px;
                    }
                </style>
                <td class="icon_detail"><a href="edit_teacher.php?id=<?php echo $all_teachers['tech_id'];?>"> <i class="fas fa-edit"></i></a><a href="single_teacher_detail.php?id=<?php echo $all_teachers['tech_id'];?>" class="icons blue"><i class="fas fa-eye"></i></a></td>
            </tr>
           <?php }?>
            
           
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
                </div>
            </div>
        </main>
 
 
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>