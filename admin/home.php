<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
        * {
            font-family: 'Roboto Slab', serif;
            font-size: 19px;
        }
        .horizontalbar {
            margin-left: 10%;
         background:  #525987;
            color: white;
            font-weight: bold;
            width: 100%;
            height: auto;
        }
        
        .horizontalbar .title {
            text-align: center;
            padding-top: 2%;
        }
        
        .logo {
            margin-left: 200px;
        }
        
        .logo .image {
            height: 90%;
            width: 90%;
            position: fixed;
        }
        .logout{
            text-align:right;
            text-decoration: none;
            color:white;
            margin-left: 90%;
            
        }
        .wrapper .sidebar ul li.active {
    background: #72716e;
}

.wrapper .sidebar ul li.active a {
    color: #fff;
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
                    <!-- <a href="registeradmin.php"><i class="fas fa-user-friends"></i>Add Admin</a></li>
                <li> -->
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
        <div class="horizontalbar">
            <div class="title">
                <h1>Infopedia</h1>-Innovational Content Sharing Website
            </div>
            <a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i>logout</a>
        </div>
    </div>
    
    <div class="logo">
        <img src="images/infopedia logo.jpg" class="image" alt="infopedia">
    </div>
</body>

</html>