<?php
include('connection.php');

$name= mysqli_real_escape_string($conn, $_POST['name']); 
$email= mysqli_real_escape_string($conn, $_POST['email']);
$pass= mysqli_real_escape_string($conn, sha1($_POST['pass']));
$phn= mysqli_real_escape_string($conn, $_POST['phn']);
$gender= mysqli_real_escape_string($conn, $_POST['gender']);
$city= mysqli_real_escape_string($conn, $_POST['city']);
$dob= mysqli_real_escape_string($conn, $_POST['dob']);
$language= mysqli_real_escape_string($conn, implode(',', $_POST['language']));

$sql="SELECT * FROM user WHERE `email`='$email'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	echo"<script> alert('Opp! This email already exists');
    window.location.href= '../register.php';
  </script>";
}else{
	$sql="INSERT INTO `user`(`name`, `email`, `password`, `phone`, `gender`, `city`, `dob`, `language`) VALUES ('$name','$email','$pass','$phn','$gender','$city','$dob','$language')";
$data= mysqli_query($conn,$sql);

if($data){
	// echo "Data Inserted Successfully";
	// header('Location:../login.php');
	echo"<script> alert('Your account has been created');
    window.location.href= '../login.php';
  </script>";
}else{
	echo "data not inserted";
}
}

