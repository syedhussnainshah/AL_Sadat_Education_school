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
    
        <?php echo $user_id;?>
        <main>
            <style>
                .index_section .row .col-md-4{
                    margin-right: 10px;background: var(--sidebarcolor);
                }
                .index_section .row .col-md-4 a h3{
                    float: right;font-size: 20px;padding-top: 30px;text-decoration: none;color: white;
                }
                .index_section .row .col-md-4 .row {
                    padding: 10px;display: flex;justify-content: center;align-items: center;
                }
                .index_section .row .col-md-4 .row .col-md-3 span{
                    color: var(--primarycolor);font-weight: bold;

                }
            </style>
            <?php 
$select = "SELECT count(student_id) as number_student FROM student_data";
$runn = mysqli_query($conn, $select);
$All_student = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_gen=1";
$runn = mysqli_query($conn, $select);
$All_Boys = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_gen=2";
$runn = mysqli_query($conn, $select);
$all_girls = mysqli_fetch_array($runn);
    
            ?>
            <div class="container index_section">
                <div class="row">
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Students</h1>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $all_girls['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $All_Boys['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href=""><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4 bg-primary text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Teachers</h1>
                    </div>
                </div>
            </div>
        </main>
 
 
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>