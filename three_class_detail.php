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
$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=6";
$runn = mysqli_query($conn, $select);
$All_student_n = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=6 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_nursery = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=6 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_nursery = mysqli_fetch_array($runn);





            // Start Query For Class Play
$select = "SELECT * FROM student_data WHERE std_class=6";
$runn = mysqli_query($conn, $select);



// End Query For Class Play

            ?>
            <div class="container index_section">
                <div class="row">
      <center><h1>Three</h1></center>   
      <div class="col-md-3 offset-1">
          <h3>Total Student : <?php echo $All_student_n['number_student']?></h3>
      </div>
      <div class="col-md-3">
          <h3>Total Boys : <?php echo $boys_nursery['number_boys']?></h3>
      </div>
      <div class="col-md-3">
          <h3>Total Girls : <?php echo $girls_nursery['number_girls']?></h3>
      </div>          
<table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>

            <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Registration No</th>
                <th>Class</th>
                
                <th>Admission date</th>
                <th>Fee</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($All_student_nusery = mysqli_fetch_array($runn)) {?>
               <tr>
                <td><?php echo $All_student_nusery['std_roll']?></td>
                <td><?php echo $All_student_nusery['std_name']?></td>

                <td><?php echo $All_student_nusery['std_reg']?></td>
                <td>Play</td>
                
                <td><?php echo $All_student_nusery['sub_date']?></td>
                <td>
                    <?php 
$select = "SELECT * FROM class WHERE class_id=1";
$sql = mysqli_query($conn,$select);
$class_fee = mysqli_fetch_array($sql);
echo $class_fee['class_fee'];
                    ?>
                </td>
                <style>
                    .icon_detail i{
                        margin-left: 10px;
                    }
                </style>
                <td class="icon_detail"><a href="edit_student_form.php?id=<?php echo $All_student_nusery['student_id'];?>"> <i class="fas fa-edit"></i></a><a href="delete_student.php?id=<?php echo $All_student_nusery['student_id'];?>"><i class="fas fa-trash-alt"></i></a><a href="single_student_detail.php?id=<?php echo $All_student_nusery['student_id'];?>" class="icons blue"><i class="fas fa-eye"></i></a></td>
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