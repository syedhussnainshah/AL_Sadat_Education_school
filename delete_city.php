<?php 
include_once "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $deletee ="DELETE FROM `city` WHERE city_id ='$id'";
    $query =mysqli_query($conn, $deletee);
    if ($query) {
        header("location:city_add_view_edit.php");
    }
    
}
 ?>