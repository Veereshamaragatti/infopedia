<!DOCTYPE html>
<html lang="en">

<head>
    <title>Health Care</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../style1.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');

        * {
            font-family: 'Roboto Slab', serif;
            font-size: 20px;
        }

        .box {
            width: calc(50% - 2px);
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid black;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .box img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
        }

        .box h3 {
            margin: 0;
            padding: 10px 0;
        }

        .box p {
            margin: 0;
            padding: 10px 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-left: 250px;
        }

        .wrapper .sidebar ul li.active {
            background: #72716e;
        }

        .wrapper .sidebar ul li.active a {
            color: #fff;
        }

        .blue-text {
            background-color: #525987;
            color: white;
            padding: 10px;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
            width:80%;
            margin-left:20%;
        }

        .posts {
            margin-top: 3%;
        }

        .page-container {
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Infopedia</h2>
            <ul>
                <li><a href="../home.php"><i class="fas fa-house-user"></i>Home</a></li>
                <li><a href="../about.php"><i class="fas fa-user-friends"></i>About</a></li>
                <li><a href="user_view_posts.php"><i class="fas fa-portrait"></i>Posts</a></li>
                <!-- <li><a href="../contactus.php"><i class="fas fa-images"></i>Contuct Us</a></li> -->
                <li><a href="../feedback.php"><i class="far fa-comment-alt"></i> Feedback</a></li>
                <li><a href="../adminlogin.php"><i class="far fa-comment-alt"></i> Admin</a></li>
            </ul>
            <div class="social_media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="posts">
        <div class="page-container">
            <div class="blue-text">Technology</div>
            <div class="container">
                <?php
                include "include/db_conn.php";
                $query = "SELECT * FROM `posts` WHERE category = 'Technology' ORDER BY id DESC";
                $query_run = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_array($query_run)) {
                ?>
                    <div class="box">
                        <img src="<?php echo $data['image']; ?>" alt="">
                        <h3><?php echo $data["title"]; ?></h3>
                        <p><?php echo $data["description"]; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
