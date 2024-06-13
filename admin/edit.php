<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Post</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
        * {
            font-family: 'Roboto Slab', serif;
            font-size: 20px;
        }
        .content {
            width: 580px;
            height: 600px;
            background: #fff;
            text-align: center;
            border: solid 1px black;
            margin-left: 35%;
            margin-top: 3%;
            margin-bottom: 4%;
            font-size: 20px;
        }
        
        .content form {
            padding: 30px 20px 25px 20px;
        }
        
        .content form .row {
            height: 45px;
            background-color: #ffffff;
            margin-bottom: 15px;
            position: relative;
        }
        
        .content form .row input {
            height: 100%;
            width: 80%;
            padding-left: 50px;
            border-radius: 5px;
            border: 1px solid lightgray;
            font-size: 16px;
        }
        .content form .row textarea {
            height: 100%;
            width: 80%;
            padding-left: 50px;
            border-radius: 5px;
            border: 1px solid lightgray;
            font-size: 16px;
        }
        
        .content form .row i {
            position: absolute;
            width: 47px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background: #525987 ;
            border: 1px solid #000000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .content form .button input {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            padding-left: 0px;
            background: #525987 ;
            border: 1px solid #000000;
        }
        
        .content form .row select {
            height: 100%;
            width: 80%;
            padding-left: 50px;
            border-radius: 5px;
            border: 1px solid lightgray;
            font-size: 16px;
        }
        
        #upload {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            padding-left: 0px;
        }
        
        .title {
            line-height: 80px;
            background-color: #525987 ;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
        * {
            font-family: 'Roboto Slab', serif;
            font-size: 19px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Infopedia</h2>
            <ul>
                <li><a href="home.php"><i class="fas fa-house-user"></i>Home</a></li>
                <li>
                    <a href="registeradmin.php"><i class="fas fa-user-friends"></i>Add Admin</a></li>
                <li>
                    <a href="addpost.php"><i class="fas fa-portrait"></i>Add Post</a></li>
                <li>
                    <a href="posts.php"><i class="fas fa-images"></i>Posts</a></li>
            </ul>
            <div class="social_media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="content">
            <div class="title"><span>Edit Post</span></div>
            <form  method="post" action="edit_db.php" align="center"  enctype="multipart/form-data">

        <?php
			
		$cn=mysqli_connect("localhost","root","");
		mysqli_select_db($cn,"test_db");
		if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		$res=mysqli_query($cn,"select * from posts  where id='$id'");
	
					while($data=mysqli_fetch_array($res))
					{
					
				?>
                <div class="row">
                <i class="fas fa-user-edit"></i>
                    <input type="hidden" name="id" height="20px" width="20px" value='<?php echo $data['id']; ?>'>
                    <input type="text" name="title" placeholder="enter the title"  value='<?php echo $data['title']; ?>' required> <br> <br>
                </div>
                <div class="row">
                    <label for="category">Select the category</label>
                    <i class="fas fa-list"></i>
                    <select name="category" id="category"  value='<?php echo $data['category']; ?>'>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Technology">Technology</option>
                        <option value="Fintech">Fintech</option>
                        <option value="Others">Others</option>
                      </select> <br> <br>
                </div> <br>
                <div class="row">
                    <i class="far fa-newspaper"></i>
                    <textarea name="description" placeholder="enter the description" required style="height: 150px;"><?php echo $data['description']; ?></textarea>
                     <br> <br>
                </div> <br> <br> <br> <br> <br> <br>
                <div class="row">
                    <i class="fas fa-paperclip"></i>
                    <input type="file" name="image"  placeholder="upload the image"   value='<?php echo $data['image']; ?>'required> <br> <br>
                </div>
                <div class="row button">
                    <input type="submit" name="update" value="Post">
                </div>

				
							
<?php
}
}
?>
</form>
</body></html>