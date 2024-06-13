<?php 
    include "include/db_conn.php";
    $query = "SELECT * FROM feedback";
    $query_run = mysqli_query($conn, $query);
?>

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
        
        .tables {
            width: 25cm;
            margin-left: 20%;
        }
        
        .tables .images {
            width: 150px;
            height: 100px;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        
        th,
        td {
            text-align: left;
            padding: 8px;
            color: black;
        }
        
        th {
            background-color:  #525987;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
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
                    <a href="addpost.php"><i class="fas fa-portrait"></i>Add Post</a></li>
                <li>
                    <a href="posts.php"><i class="fas fa-images"></i>Posts</a></li>
                <li class="active">
                    <a href="view_feedback.php"><i class="far fa-comment-alt"></i> View_Feedback</a>
            </ul>
            <div class="social_media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <?php
        $cn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "test_db");
        $query = "SELECT * FROM feedback";
        $res = mysqli_query($cn, $query);
    ?>

    <table class="tables"> 
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
        </tr>
        
        <?php while ($data = mysqli_fetch_array($res)) { ?>
            <tr>
                <td><?php echo $data["id"]; ?></td>
                <td><?php echo $data["name"]; ?></td>
                <td><?php echo $data["email"]; ?></td>
                <td><?php echo $data["comment"]; ?></td>
            </tr>
        <?php } ?>
    </table>

    <script>
        // Create an EventSource object for server-sent events
        var eventSource = new EventSource("check_new_feedback.php");

        // Handle the 'new_feedback' event
        eventSource.addEventListener("new_feedback", function (event) {
            // Display the notification when new feedback is received
            showAlert();
        });

        // Display pop-up notification
        function showAlert() {
            alert('New feedback received!');
        }
    </script>
</body>

</html>
