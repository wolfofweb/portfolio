<?php
// Change this to your connection info.
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'portfolio';

// Try and connect using the info above.
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// if (mysqli_connect_errno() ) {
// 	// If there is an error with the connection, stop the script and display the error.
// 	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
// }

    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];

// if(empty($name) || empty($email) || empty($mobile)) {
// 	echo '
// 	<div class="alert alert-danger alert-dismissible fade show" role="alert">
// 	  <strong>Oops!</strong> Please fill all frequired field bellow.
// 	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// 	</div>
// 	';
// }
// else{
    $sql = "INSERT INTO messaages(firstName,lastName,email,comment)VALUES('$firstName','$lastName','$email','$comment')";
	if (mysqli_query($con, $sql)) {
    	echo 'Thank you! You you have sent message successfully';
    }
    else{
    	echo "something went wrong!..".$message;
    }
?>