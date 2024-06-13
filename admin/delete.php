<?php
  include 'functions.php';
  $cn=mysqli_connect("localhost","root","");
  $d=protect($cn,$_GET['id']);

   

mysqli_select_db($cn,"test_db");
$res=mysqli_query($cn,"delete from posts where id=$d");

        echo '<script type="text/javascript">'; 
		echo 'alert("Deleted successfully");'; 
		echo 'window.location.href = "posts.php";';
		echo '</script>';

		?>