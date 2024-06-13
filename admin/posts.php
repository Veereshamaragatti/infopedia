<?php

// session_start();
//  if(!isset($_SESSION['name']))	{
// 	session_destroy(); 
	
// 	header('Location:adminlogin.php');
// }

// echo 'welcome' .$_SESSION['name'];






$cn=mysqli_connect("localhost","root","");
mysqli_select_db($cn,"test_db");  
      
    // Import the file where we defined the connection to Database.     
   
    
        // Look for a GET variable page if not found default is 1.        
             $query = "SELECT * FROM posts ORDER BY id DESC";     
        $res= mysqli_query ($cn, $query); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style> @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
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
        }
        
        th {
            background-color: #525987;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }.wrapper .sidebar ul li.active {
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
                    <!-- <a href="registeradmin.php"><i class="fas fa-user-friends"></i>Add Admin</a></li>
                <li> -->
                    <a href="addpost.php"><i class="fas fa-portrait"></i>Add Post</a></li>
                <li class="active">
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

    </div>
    <table class="tables">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>category</th>
                <th>description</th>
                <th>image</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>

                		
<?php
		while($data=mysqli_fetch_array($res))
		{
			?>
			 <tr>
                <td><?php echo $data["id"];?></td>
                <td><?php echo $data["title"];?></td>
                <td><?php echo $data["category"];?></td>
                <td><?php echo $data["description"];?></td>
                <td><img src="<?php echo $data["image"];?>"width="50" height="50"></td>
                <td><a href="edit.php?id=<?php echo $data['id'];?>"><span class='button'>Edit</span></a></td>
                <td><?php echo"<a href='delete.php?id=". $data['id'] ."' onclick=' return checkdelete()'><input type='submit' value='Delete' id='deletebtn' class='button'></a>"?></td>
			
            </tr>
<?php		   
		   
		}
		
?>



           
            
        </tbody>
    </table>
</body>

</html>