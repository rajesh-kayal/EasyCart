<?php
session_start();
include('connection.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, sha1($_POST['pass']));

$sql = "SELECT * FROM user WHERE `email`='$email' AND `password`='$pass'";

$data = mysqli_query($conn, $sql);

$result = mysqli_fetch_assoc($data);

if ($result) {
	$_SESSION['user_id'] = $result['id'];
	$_SESSION['message'] = 'Hello '. $email;

	header("Location: profile.php");
	exit();
} else {
	echo "<script> alert('Opps! Please enter correct email and password');
	window.location.href= '../login.php';
	</script>";
	exit();
}
?>
