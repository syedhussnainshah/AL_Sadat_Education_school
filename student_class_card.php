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
                    background: var(--sidebarcolor);margin: 10px;
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
            // Start Query For Class Play
$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=1";
$runn = mysqli_query($conn, $select);
$All_student_play = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=1 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_play = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=1 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_play = mysqli_fetch_array($runn);


// End Query For Class Play
// Start Query For Class nursery

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=2";
$runn = mysqli_query($conn, $select);
$All_student_nursery = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=2 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_nursery = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=2 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_nursery = mysqli_fetch_array($runn);

// End Query For Class nursery
 // Start Query For Class prep

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=3";
$runn = mysqli_query($conn, $select);
$All_student_prep = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=3 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_prep = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=3 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_prep = mysqli_fetch_array($runn);

// End Query For Class prep
    
    // Start Query For Class ONE

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=4";
$runn = mysqli_query($conn, $select);
$All_student_one = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=4 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_one = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=4 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_one = mysqli_fetch_array($runn);

// End Query For Class ONE
 // Start Query For Class Two

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=5";
$runn = mysqli_query($conn, $select);
$All_student_two = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=5 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_two = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=5 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_two = mysqli_fetch_array($runn);

// End Query For Class Two
 // Start Query For Class three

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=6";
$runn = mysqli_query($conn, $select);
$All_student_three = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=6 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_three = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=6 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_three = mysqli_fetch_array($runn);

// End Query For Class three
 // Start Query For Class four

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=7";
$runn = mysqli_query($conn, $select);
$All_student_four = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=7 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_four = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=7 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_four = mysqli_fetch_array($runn);

// End Query For Class four
 // Start Query For Class five

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=8";
$runn = mysqli_query($conn, $select);
$All_student_five = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=8 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_five = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=8 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_five = mysqli_fetch_array($runn);

// End Query For Class five
 // Start Query For Class six

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=9";
$runn = mysqli_query($conn, $select);
$All_student_six = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=9 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_six = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=9 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_six = mysqli_fetch_array($runn);

// End Query For Class six
 // Start Query For Class seven

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=10";
$runn = mysqli_query($conn, $select);
$All_student_seven = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=10 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_seven = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=10 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_seven = mysqli_fetch_array($runn);

// End Query For Class seven
 // Start Query For Class eigth

$select = "SELECT count(student_id) as number_student FROM student_data WHERE std_class=11";
$runn = mysqli_query($conn, $select);
$All_student_eigth = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_boys FROM student_data WHERE std_class=11 AND std_gen=1";
$runn = mysqli_query($conn, $select);
$boys_eigth = mysqli_fetch_array($runn);
$select = "SELECT count(student_id) as number_girls FROM student_data WHERE std_class=11 AND std_gen=2";
$runn = mysqli_query($conn, $select);
$girls_eigth = mysqli_fetch_array($runn);

// End Query For Class eigth
    
            ?>
            <div class="container index_section">
                <div class="row">
                    <h1>All Classes Card</h1>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>PLay </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_play['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_play['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_play['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="play_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Nursery </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_nursery['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_nursery['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_nursery['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="nursery_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Prep </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_prep['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_prep['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_prep['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="prep_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>One </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_one['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_one['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_one['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="one_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Two </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_two['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_two['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_two['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="two_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Three </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_three['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_three['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_three['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="three_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Four </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_four['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_four['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_four['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="four_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Five </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_five['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_five['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_five['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="five_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Six </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_six['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_six['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_six['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="six_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>Seven </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_seven['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_seven['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_seven['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="seven_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>
                    <div class="col-md-4  text-white" style="border-radius: 10px;height: 200px;">
                        <h1>EIght </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"><h4>Total</h4> <span><?php echo $All_student_eigth['number_student']?></span></div>
                            <div class="col-md-3">
                                <h4>Girls</h4> <span><?php echo $girls_eigth['number_girls']?></span>
                                
                            </div>
                            <?php 


                            ?>
                            <div class="col-md-3">
                                <h4>Boys</h4> <span><?php echo $boys_eigth['number_boys']?></span>
                                
                            </div>
                        </div>
                        <a href="eight_class_detail.php"><h3>More Detail</h3></a>
                        
                    </div>

                </div>
            </div>
        </main>
 
 
    
    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>