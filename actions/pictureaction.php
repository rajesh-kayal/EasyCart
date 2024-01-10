<?php
include('connection.php');

$id=$_POST['id'];

$sql="SELECT * FROM user WHERE `id`='$id'";
$data=mysqli_query($conn,$sql);
$result=mysqli_num_rows($data);

if($result){
  if(!empty($_FILES['uploadimage']['name'])){
  $filename= $_FILES['uploadimage']['name'];
  $tmpname= $_FILES['uploadimage']['tmp_name'];
  $folder='../profile_picture/'.$filename;
  move_uploaded_file($tmpname,$folder);

  $sql="UPDATE `user` SET `picture`='$folder' WHERE `id` = '$id'";
  $data=mysqli_query($conn,$sql);
  if($data){
    header("Location:profile.php?id=$id");
  }else{
    echo "Unable to update profile picture";
  }
}else{
  echo'<script> alert("Please select an image");
  window.location.href="profile.php?id='.$id.'"
   
  </script>';
}
}

