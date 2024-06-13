<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
        
        * {
            font-family: 'Roboto Slab', serif;
            font-size: 20px;
        }
        
        .container {
            font-size: xx-large;
            margin-left: 20%;
            margin-top: 3%;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-right: 12%;
        }
        
        .wrapper .sidebar ul li.active {
            background: #72716e;
        }
        
        .wrapper .sidebar ul li.active a {
            color: #fff;
        }
image {
    width: 87%;
    max-height: 713px;
    margin-left: 0%;
    margin-top: -3%;
    position: fixed;
}
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Infopedia</h2>
            <ul>
                <li class="active"><a href="home.php"><i class="fas fa-house-user"></i>Home</a></li>
                <li>
                    <a href="about.php"><i class="fas fa-user-friends"></i>About</a>
                </li>
                <li>
                    <a href="admin/user_view_posts.php"><i class="fas fa-portrait"></i>Posts</a>
                </li>
                <!-- <li><a href="contactus.php"><i class="fas fa-images"></i>Contuct Us</a></li> -->
                <li><a href="feedback.php"><i class="far fa-comment-alt"></i> Feedback</a></li>
                <li><a href="adminlogin.php"><i class="far fa-comment-alt"></i> Admin</a></li>
            </ul>
            <div class="social_media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="logo">
        <img src="admin/images/infopedia logo.jpg" class="image" style="margin-left:20%; margin-top:-8%;" alt="infopedia">
    </div>
</body>

</html>
