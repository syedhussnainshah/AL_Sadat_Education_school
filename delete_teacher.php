<?php 
include_once "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $deletee ="DELETE FROM `teacher_data` WHERE tech_id ='$id'";
    $query =mysqli_query($conn, $deletee);
    if ($query) {
        header('location:find_teacher.php');
    }else{
        echo "No No No";
    }
   
   
    
}
 ?>