<?php 
include('admin/include/db_conn.php');
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
  
$query="INSERT INTO `feedback` (`name`, `email`, `comment`) VALUES ('$name', '$email', '$comment');";
$run_query =mysqli_query($conn,$query);
header('location:feedback.php')
?>