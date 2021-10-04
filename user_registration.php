<?php 
include_once"connection.php";
if (isset($_REQUEST['submit'])) {
	$first_name = $_REQUEST['first_name'];
	$last_name = $_REQUEST['last_name'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$confirm_password = $_REQUEST['confirm_password'];
	$select = "SELECT * FROM user_registration WHERE email=$email";
		$sql_select = mysqli_query($conn, $select);
		$user_reg_table = mysqli_fetch_array($sql_select);
	if ($password == $confirm_password) {
		if ($email !== $user_reg_table['email']) {
			$insert = "INSERT INTO `user_registration`(`first_name`, `last_name`, `email`, `password`) VALUES ('$first_name', '$last_name', '$email', '$password')";
		 $sql = mysqli_query($conn, $insert);
		 if ($sql) {
		 	$user_id = mysqli_insert_id($conn);
		 	$add_student = 1;
		 	$show_student = 1;
		 	$add_teacher = 1;
		 	$show_teacher = 1;
		 	$insert_page = "INSERT INTO `user_pages`(`user_id`, `add_student`, `show_student`, `add_teacher`, `show_teacher`) VALUES ('$user_id', '$add_student', '$show_student', '$add_teacher', '$show_teacher')";
		 	$sql_pages = mysqli_query($conn, $insert_page);
		 	if ($sql_pages) {
		 		header('location:login.php');
		 	}else{
		 		echo "No Insert Pages";
		 	}
		 	
		 }else{
		 	echo mysqli_error($conn);

		 }
		}else{
			echo "Your Email Already Exist";
		}

		
	}else{
		echo "Your Password Are Not Match";
	}
}
?>