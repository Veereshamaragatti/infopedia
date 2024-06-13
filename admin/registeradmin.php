<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
        * {
            font-family: 'Roboto Slab', serif;
            font-size: 20px;
        }
        .content {
            width: 580px;
            height: 550px;
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
        
        .content form .row i {
            position: absolute;
            width: 47px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background:  #525987;
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
            background:  #525987;
            border: 1px solid #000000;
        }
        
        .title {
            line-height: 80px;
            background-color:  #525987; 
            color: #fff;
            font-size: 40px;
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
                    <li>
                    <a href="view_feedback.php"><i class="far fa-comment-alt"></i> View_Feedback</a>
            </ul>
            <div class="social_media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="content">
            <div class="title"><span>Add Admin</span></div>
            <form action="register.php" method="post">
            
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>     

             <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <div class="row">
                    <i class="fas fa-user-edit"></i>
                    <?php if (isset($_GET['name'])) { ?>
                    <input type="text" name="name" placeholder="Name" required> <br> <br>
                    <?php }else{ ?>
                        <input type="text" 
                      name="name" 
                      placeholder="Name"><br>   
                      <?php }?>
            </div>
            <div class="row">
                    <i class="fas fa-user-edit"></i>
                    <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" name="uname" placeholder="User Name" required> <br> <br>
                    <?php }else{ ?>
                        <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>   
                      <?php }?>
            </div>
            
                <div class="row">
                    <i class="fas fa-key"></i>
                    <input type="text" name="password" placeholder="password" required> <br> <br>
                </div>
                <div class="row">
                    <i class="fas fa-key"></i>
                    <input type="text" name="re_password" placeholder="re_password" required> <br> <br>
                </div>
                <div class="row button">
                    <input type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>