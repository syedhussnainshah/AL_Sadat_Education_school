<!-- Sidebar Start Here -->
<?php
 $user_id = $_SESSION['id'];
$select = "SELECT * FROM `user_pages` WHERE user_id=$user_id";
$sql = mysqli_query($conn, $select);
$user_page = mysqli_fetch_array($sql);
?>
<div class="offcanvas offcanvas-start" tabindex="-1" id="Sidebar" aria-labelledby="Sidebar">
    <div class="offcanvas-header">
        <h1 class="" style="color: white;font-family: Roman; font-size: 80px;">    <i class="fas fa-graduation-cap"></i></h1>
        <button type="button" class="btn-close text-reset d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div>
            <!-- Sidebar Link Start Here -->
            <nav class="">
                <ul class="sidenav">

                    <li class="sidenav-heading">Personal</li>
                    <li class="sidenav-item">
                        <a href="index.php" class="sidenav-link active">
                            <span class="sidenav-icon">
                                <i class="fas fa-home"></i>
                            </span>
                            <span class="sidenav-label">Dashboards</span>
                        </a>
                    </li>

                    <li class="sidenav-heading">Student</li>
                    <li class="sidenav-item">
                        <a class="sidebar-dropdown-link" data-bs-toggle="collapse" href="#student-dropdown" role="button" aria-expanded="false" aria-controls="student-dropdown">
                            <span class="sidenav-icon">
                                <i class="fas fa-home"></i>
                            </span>
                            Student
                        </a>
                        <!-- <li class="collapse multi-collapse" id="student-dropdown">
                            <a href="add_student.php" class="sidenav-link">Add Student</a>
                            <a href="find_student.php" class="sidenav-link">Show Student</a>
                            <a href="edit_student.php" class="sidenav-link">Edit Student</a>
                            <a href="delete_student.php" class="sidenav-link">Delete Student</a>
                        </li> -->
                        <ul class="collapse multi-collapse" id="student-dropdown">
                            
                                 <li class="sidenav-item">
                                    <?php if ($user_page['add_student']=='1') {?>
                                <a href="add_student.php" class="sidenav-link">Add Student</a>
                                <?php }else{
                            echo "REstiction On Page";
                           }?>
                            </li>
                           
                           
                           <?php if ($user_page['show_student']=='1') {?>
                              <li class="sidenav-item">
                                <a href="find_student.php" class="sidenav-link">Show Student</a>
                            </li>
                           <?php }else{
                            echo"Restriction From admin";}?>

                            

                            <!-- <li class="sidenav-item">
                                <a href="edit_student.php" class="sidenav-link">Edit Student</a>
                            </li>

                            <li class="sidenav-item">
                                <a href="edit_student.php" class="sidenav-link">Edit Student</a>
                            </li> -->

                        </ul>
                    </li>

                    <li class="sidenav-heading">Teacher</li>
                    <li class="sidenav-item">
                        <a class="sidebar-dropdown-link" data-bs-toggle="collapse" href="#Teacher-dropdown" role="button" aria-expanded="false" aria-controls="Teacher-dropdown">
                            <span class="sidenav-icon">
                                <i class="fas fa-home"></i>
                            </span>
                            Teacher
                        </a>
                        <!-- <li class="collapse multi-collapse" id="Teacher-dropdown">
                            <a href="add_teacher.php" class="sidenav-link">Add Teacher</a>
                            <a href="find_teacher.php" class="sidenav-link">Show Teacher</a>
                            <a href="edit_teacher.php" class="sidenav-link">Edit Teacher</a>
                            <a href="delete_teacher.php" class="sidenav-link">Delete Teacher</a>
                        </li> -->

                        <ul class="collapse multi-collapse" id="Teacher-dropdown">
                            <?php if ($user_page['add_teacher']=='1') {?>
                               <li class="sidenav-item">
                                <a href="add_teacher.php" class="sidenav-link">Add Teacher</a>
                            </li>
                            <?php }else{
                                echo"Restriction";

                            }?>
                            

                            <?php if ($user_page['add_teacher']=='1') {?>
                               <li class="sidenav-item">
                                <a href="find_teacher.php" class="sidenav-link">Show Teacher</a>
                            </li>
                            <?php }else{
                                echo"Restriction";

                            }?>

                            <!-- <li class="sidenav-item">
                                <a href="edit_teacher.php" class="sidenav-link">Edit Teacher</a>
                            </li>

                            <li class="sidenav-item">
                                <a href="delete_teacher.php" class="sidenav-link">Delete Teacher</a>
                            </li>
 -->
                        </ul>
                    </li>

                    <li class="sidenav-heading">Fee Status</li>
                    <li class="sidenav-item">
                        <a class="sidebar-dropdown-link" data-bs-toggle="collapse" href="#Fee-dropdown" role="button" aria-expanded="false" aria-controls="Fee-dropdown">
                            <span class="sidenav-icon">
                                <i class="fas fa-home"></i>
                            </span>
                            Fee Status
                        </a>
                        <!-- <li class="collapse multi-collapse" id="Fee-dropdown">
                            <a href="submit_fee.php" class="sidenav-link">Submit Fee</a>
                            <a href="find_teacher.php" class="sidenav-link">SHow Fee</a>
                        </li> -->
                        <ul class="collapse multi-collapse" id="Fee-dropdown">
                            <!-- <li class="sidenav-item disabled">
                                <a href="submit_fee.php" class="sidenav-link">Submit Fee</a>
                            </li> -->

                            <li class="sidenav-item">
                                <a href="find_teacher.php" class="sidenav-link">SHow Fee</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
            
            <!-- Sidebar Link End Here -->
        </div>
    </div>
</div>
<!-- Sidebar End Here -->
