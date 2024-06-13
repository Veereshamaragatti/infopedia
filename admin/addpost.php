<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Post</title>
    <style>
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
            height: 447%;
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
            background-color:  #525987;
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
                <li class="active">
                   
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
            <div class="title"><span>Add Post</span></div>
            <form action="adding_post.php" method="post"  enctype="multipart/form-data">
                <div class="row">
                    <i class="fas fa-user-edit"></i>
                    <input type="text" name="t1" placeholder="enter the title" required> <br> <br>
                </div>
                <div class="row">
                    <label for="category">Select the category</label>
                    <i class="fas fa-list"></i>
                    <select name="t2" id="category">
                        <option value="Agriculture">Agriculture</option>
                        <option value="Technology">Technology</option>
                        <option value="Health Care">Health Care</option>3
                      </select> <br> <br>
                </div> <br>
                <div class="row">
    <i class="far fa-newspaper"></i>
    <textarea name="t3" placeholder="enter the description" required rows="20"></textarea> <br> <br>
</div> <br> <br> <br> <br> <br> <br>
                <div class="row">
                    <i class="fas fa-paperclip"></i>
                    <input type="file" name="t7" id="upload" placeholder="upload the image" required> <br> <br>
                </div>
                <div class="row button">
                    <input type="submit" name="submit" value="Post">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
