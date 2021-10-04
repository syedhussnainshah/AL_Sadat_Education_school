<?php 
session_start();
include_once"connection.php";
if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $select = "SELECT * FROM user_registration WHERE email='$email' AND password='$password'";
        $sql = mysqli_query($conn, $select);
        $user_reg_table = mysqli_fetch_array($sql);
        if ($email = $user_reg_table['email'] AND $password = $user_reg_table['password']) {
            $_SESSION['id'] = $user_reg_table['user_id'];
            header('location:index.php');
        }else{
            echo mysqli_error($conn);
        }
}
?>