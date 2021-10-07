<?php 
include_once "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $deletee ="DELETE FROM `product` WHERE product_id ='$id'";
    $query =mysqli_query($conn, $deletee);
    if ($query) {
         header('location:product_delete_view.php');
       
    }
    
}
 ?>