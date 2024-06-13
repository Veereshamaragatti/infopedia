<?php
$cn=mysqli_connect("localhost","root","");
mysqli_select_db($cn,"test_db");
include 'functions.php';
if(isset($_POST['submit']))
{

$target_path = "product/";
$target_filepath = $target_path . basename($_FILES["t7"]["name"]);
$imageFileType = strtolower(pathinfo($target_filepath,PATHINFO_EXTENSION));
$a = protect($cn,$_POST["t1"]);
$b = protect($cn,$_POST["t2"]);
$c = protect($cn,$_POST["t3"]);
 
 //$barcode = "";  
 
 //foreach($barcode1 as $chkNew1)  
   //{  
     // $barcode .= $chkNew1 . ",";  
   //}  
$allowedTypes = array("jpg","png","jpeg");
$filesize=$_FILES["t7"]["size"];
$maxsize = 3 * 1024 * 1024; 
 if ($filesize>$maxsize)  
{
echo '<script type="text/javascript">'; 
echo 'alert("product has been successfully insereted");'; 
echo 'window.location.href = "addpost.php";';
echo '</script>';   

}else{
move_uploaded_file($_FILES["t7"]["tmp_name"],$target_filepath);
$x=mysqli_query($cn,"insert into posts(title,category,description,image)values('$a','$b','$c','$target_filepath')");
/*$id=mysqli_insert_id($cn);
$x1=mysqli_query($cn,"insert into news1(info1,infoid)values('$b','$id')");*/
if($x==1){
	
	echo '<script type="text/javascript">'; 
echo 'alert("product has been successfully insereted");'; 
echo 'window.location.href = "addpost.php";';
echo '</script>';    
}
}
}
?>