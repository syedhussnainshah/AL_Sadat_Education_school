<?php 
include_once "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $deletee ="DELETE FROM `gene` WHERE gene_id ='$id'";
    $query =mysqli_query($conn, $deletee);
    if ($query) {
         header('location:gene_edit_delete_view.php');
       
    }
    
}
 ?>