<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback</title>
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
.feedbackdetails {
            width: 450px;
            height: 520px;
            background: #fff;
            text-align: center;
            border: solid 1px black;
            margin-left: 42%;    
            margin-top: 5%;
            margin-bottom: .75%;
            font-size: 20px;
        }
        
        .feedbackdetails form {
            padding: 30px 20px 25px 20px;
        }
        
        .feedbackdetails form .row {
            height: 45px;
            background-color: #ffffff;
            margin-bottom: 15px;
            position: relative;
        }
        
        .feedbackdetails form .row input {
            height: 100%;
            width: 80%;
            padding-left: 50px;
            border-radius: 5px;
            border: 1px solid lightgray;
            font-size: 16px;
        }
        
        .feedbackdetails form .row i {
            position: absolute;
            width: 47px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background:  #525987;;
            border: 1px solid #000000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .feedbackdetails form .button input {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            padding-left: 0px;
            background:  #525987;;
            border: 1px solid #000000;
        }
        
        .title {
            line-height: 80px;
            background-color:  #525987  ;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
        }
        
        .ahref {
            text-decoration: none;
            color: white;
            margin-right: 10px;
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
                <li><a href="home.php"><i class="fas fa-house-user"></i>Home</a></li>
                <li>
                    <a href="about.php"><i class="fas fa-user-friends"></i>About</a>
                </li>
                <li>
                    <a href="admin/user_view_posts.php"><i class="fas fa-portrait"></i>Posts</a>
                </li>
                <!-- <li><a href="contactus.php"><i class="fas fa-images"></i>Contuct Us</a></li> -->
                <li class="active"><a href="feedback.php"><i class="far fa-comment-alt"></i> Feedback</a></li>
                <li><a href="adminlogin.php"><i class="far fa-comment-alt"></i> Admin</a></li>
            </ul>
            <div class="social_media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="feedbackdetails">
        <div class="title"><span>Feedback</span></div>
        <form action="feedback_db.php" method="post">
            <div class="row">
                <i class="fas fa-user-edit"></i>
                <input type="text" name="name" placeholder="enter your name" required> <br> <br>
            </div>
            <div class="row">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="enter your email" required> <br> <br>
            </div>
            <div class="row">
                <i class="fas fa-comment"></i>
                <input type="text" name="comment" placeholder="comment" required style="height: 150px;"> <br> <br>
            </div> <br> <br> <br> <br> <br> <br>
            <div class="row button">
                <input type="submit" value="submit" onclick="showAlert()">
            </div>
        </form>
    </div>

    <script>
        function showAlert() {
            alert("Feedback recorded");
        }
    </script>
</body>

</html>
