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

    
            ?>
            <div class="container index_section">
                <div class="row">
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <a href="city_add_view_edit.php"><i class="fas fa-city"></i><h1>City</h1></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <a href="class_fee_edit_view_delete.php"><i class="fas fa-users"></i><h1>Class</h1></a>
                        
                    </div>
                    
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <a href=""><i class="fas fa-book"></i><h1>Product</h1></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <a href=""><i class="fas fa-people-arrows"></i><h1>Gene</h1></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <a href=""><i class="fas fa-user-shield"></i><h1>Religion</h1></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <a href="classes_books.php"><i class="fas fa-book"></i><h1>Books</h1></a>
                        
                    </div>

                </div>
            </div>
        </main>
 
 
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>