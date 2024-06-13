<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Roboto+Slab:wght@500&display=swap');
        * {
            font-family: 'Roboto Slab', serif;
            font-size: 20px;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }

        body {
            background-color: white;
        }

        .wrapper {
            display: flex;
            position: relative;
        }

        .wrapper .sidebar {
            position: fixed;
            width: 200px;
            height: 100%;
            background: #525987;
            padding: 30px 0;
        }

        .wrapper .sidebar h2 {
            color: aliceblue;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
        }

        .wrapper .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #525987;
            position: relative;
        }

        .wrapper .sidebar ul li a {
            color: rgb(255, 255, 255);
            display: block;
        }

        .wrapper .sidebar ul li .fas {
            width: 25px;
        }

        .wrapper .sidebar ul li:hover {
            background: #72716e;
        }

        .wrapper .sidebar ul li:hover a {
            color: #fff;
        }

        .wrapper .sidebar .social_media {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate(-50%);
            display: flex;
        }

        .wrapper .sidebar .social_media a {
            display: block;
            width: 40px;
            background: #525987;
            height: 40px;
            line-height: 40px;
            text-align: center;
            margin: 0 5px;
            color: #ffffff;
            border-top-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        
        
        .logindetails {
            width: 380px;
            height: 350px;
            background: #fff;
            text-align: center;
            border: solid 1px black;
            margin-left: 45%;
            margin-top: 7%;
            margin-bottom: 4%;
            font-size: 20px;
        }

        .logindetails form {
            padding: 30px 20px 25px 20px;
        }

        .logindetails form .row {
            height: 45px;
            background-color: #ffffff;
            margin-bottom: 15px;
            position: relative;
        }

        .logindetails form .row input {
            height: 100%;
            width: 80%;
            padding-left: 50px;
            border-radius: 5px;
            border: 1px solid lightgray;
            font-size: 16px;
        }

        .logindetails form .row i {
            position: absolute;
            width: 47px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background: #525987;
            border: 1px solid #000000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logindetails form .button input {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            padding-left: 0px;
            background: #525987;
            border: 1px solid #000000;
        }

        .title {
            line-height: 80px;
            background-color: #525987;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
        }

    </style>
</head>

<body>
<div class="wrapper">
        <div class="sidebar">
            <h2>Infopedia</h2>
            <ul>
                <li><a href="home.php"><i class="fas fa-house-user"></i>Home</a></li>
                <li class="active">
                    <a href="about.php"><i class="fas fa-user-friends"></i>About</a>
                </li>
                <li>
                    <a href="admin/user_view_posts.php"><i class="fas fa-portrait"></i>Posts</a>
                </li>
                <!-- <li><a href="contactus.php"><i class="fas fa-images"></i>Contuct Us</a></li> -->
                <li><a href="feedback.php"><i class="far fa-comment-alt"></i> Feedback</a></li>
                <li class="active"><a href="adminlogin.php"><i class="far fa-comment-alt"></i> Admin</a></li>
            </ul>
            <div class="social_media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="logindetails">
        <div class="title"><span></span>Admin login</div>
        <form action="login.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
            <?php } ?>
            <div class="row">
                <i class="fas fa-user-edit"></i>
                <input type="text" name="uname" placeholder="Enter the username" required> <br> <br>
            </div>
            <div class="row">
                <i class="fas fa-key"></i>
                <input type="password" name="password" placeholder="Enter the password" required> <br> <br>
            </div> <br>
            <div class="row button">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>

</html>
