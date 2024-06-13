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
            font-size: 20px;
        }
        
        .picture {
            max-width: 100%;
            width: 100%;
            height: 575px;
        }
        
        .titles {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bolder;
            margin-left: 2%;
        }
        
        .description {
            width: 93%;
            padding: 2%;
        }
        
        .posts {
            width: 70%;
            margin-top: 3%;
            margin-left: 22%;
            border: solid 1px #818181;
        }
        
        .details {
            margin-left: 2%;
        }
        .wrapper .sidebar ul li.active {
    background: #72716e;
}

.wrapper .sidebar ul li.active a {
    color: #fff;
}
 /* image url */
 .container {
      display: flex;
      justify-content: space-between;
      margin-top: 10%;
      margin-left:30%;
    }

    .image {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-right: 60px; /* Adjust the value to set the desired spacing */
    }

    .image:last-child {
      margin-right: 0; /* Remove the right margin for the last image in each row */
    }

    .image img {
      width: 190px;
      height: 180px;
      border-radius: 50%;
      object-fit: cover;
    }

    .image p {
      margin-top: 10px;
      font-weight: bold;
      text-align: center;
    }
        
    </style>
</head>

<body>
<div class="wrapper">
        <div class="sidebar">
            <h2>Infopedia</h2>
            <ul>
            <li><a href="../home.php"><i class="fas fa-house-user"></i>Home</a></li>
                <li>
                    <a href="../about.php"><i class="fas fa-user-friends"></i>About</a></li>
                <li class="active">
                    <a href="user_view_posts.php"><i class="fas fa-portrait"></i>Posts</a>
                </li>
                <!-- <li>
                    <a href="../contactus.php"><i class="fas fa-images"></i>Contuct Us</a></li> -->
                    <li>
                    <a href="../feedback.php"><i class="far fa-comment-alt"></i> Feedback</a>
                    <li>
                    <a href="../adminlogin.php"><i class="far fa-comment-alt"></i> Admin</a></li>
            </ul>
            <div class="social_media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="container">
    <div class="image">
      <img src="images/logo/HD-wallpaper-farming-agriculture-field-farm-farmer-indian.jpg" alt="Image 1">
      <a href="agriculture.php">Agriculture</a>
    </div>
    <div class="image">
      <img src="images/logo/HD-wallpaper-technology-brain-binary-black-blue.jpg" alt="Image 2">
      <a href="technology.php">Technology</a>
    </div>
    <div class="image">
      <img src="images/logo/s1.jpg" alt="Image 3">
      <a href="healthcare.php">Health Care</a>
    </div>
    
    
</body>

</html>