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
            .index_section .row .col-md-4 a i{
                font-size: 85px;
            }
            .index_section .row .col-md-4 a{
                color: white;
            }
                .index_section .row .col-md-4{
                    margin: 10px;background: var(--sidebarcolor);display: flex;justify-content: center;align-items: center;flex-direction: column;text-align: center;
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
$select = "SELECT * FROM class";
$sql = mysqli_query($conn,$select);

    
            ?>
            <div class="container index_section">
                <div class="row">
                    <?php while ($classes_fetch = mysqli_fetch_array($sql)) {?>
               
                  
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <a href="class_books_add_view.php?id=<?php echo $classes_fetch['class_id'];?>"></i><h1><?php echo $classes_fetch['class_name']?></h1></a>
                        
                    </div>
                      <?php }?>
                   

                </div>
            </div>
        </main>
 
 
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>