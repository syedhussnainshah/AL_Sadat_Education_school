<?php 
include_once "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $deletee ="DELETE FROM `student_data` WHERE student_id ='$id'";
    $query =mysqli_query($conn, $deletee);
    if ($query) {
         $deletee_img ="DELETE FROM `std_images` WHERE std_id ='$id'";
         $query_img =mysqli_query($conn, $deletee_img);
         if ($query_img) {
             $deletee_img ="DELETE FROM `std_gardian` WHERE std_id ='$id'";
         $query_gardian =mysqli_query($conn, $deletee_img);
         if ( $query_gardian  ) {
            header('location:find_student.php');
         }
             
         }
       
    }
    
}
 ?>