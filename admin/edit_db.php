<?php
$cn=mysqli_connect("localhost","root","");
mysqli_select_db($cn,"test_db");
include 'functions.php';
if(isset($_POST['update']))
{

$target_path = "product/";
$target_filepath = $target_path . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_filepath,PATHINFO_EXTENSION));
$a = protect($cn,$_POST["id"]);
$b = protect($cn,$_POST["title"]);
$c = protect($cn,$_POST["category"]);
$d = protect($cn,$_POST["description"]);

 
 //$barcode = "";  
 
 //foreach($barcode1 as $chkNew1)  
   //{  
     // $barcode .= $chkNew1 . ",";  
   //}  
$allowedTypes = array("jpg","png","jpeg");
$filesize=$_FILES["image"]["size"];
$maxsize = 3 * 1024 * 1024; 
 if ($filesize>$maxsize)  
{
echo '<script type="text/javascript">'; 
echo 'alert("product has been successfully insereted");'; 
echo 'window.location.href = "posts.php";';
echo '</script>';   

}else{
move_uploaded_file($_FILES["image"]["tmp_name"],$target_filepath);
$x=mysqli_query($cn,"update posts set title='$b',category='$c',description='$d',image='$target_filepath' where id='$a'");
if($x==1){
	
	echo '<script type="text/javascript">'; 
echo 'alert("product has been updated successfully insereted");'; 
echo 'window.location.href = "posts.php";';
echo '</script>';    
}
}
}
?>