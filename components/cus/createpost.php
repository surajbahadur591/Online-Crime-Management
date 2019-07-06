<!-- Online Crime Management, Public Servie is a Web Service for public who can easily register their complaint without visiting Police Station.
Developed By Suraj Bahadur Kumal (Software Engineer and Developer @surajbahadur )

[ Technology used : HTML, CSS(materialedcss) , MYSQL and PHP ]
[ Independent of Platform ]
[ Developed on Windows10 ]

Follow  me  on Social media
Facebook Id : https://www.facebook.com/Suraj.bahadur978
Youtube Id :https://www.youtube.com/c/SurajBahadur
Github Link : https://github.com/surajbahadur591 -->

<?php
session_start();
$username = $_SESSION['username']; 
if ( isset( $_SESSION['username'] ) ) {
} else {
    // Redirect them to the login page
    header("Location: ../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Crime Management
    </title>
    <link rel="stylesheet" href="../../materialized/materialize/css/materialize.css">
    <link rel="icon" href="../ocm.jpg">

</head>

<body>

    <nav class=" grey darken-3">
        <div class="nav-wrapper container grey darken-3">
            <a href="../dashboardcus.php" class="brand-logo">Online Crime Management</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../cus/blogs.php">Blogs</a></li>
                <li><a href="../cus/createpost.php">Create Post</a></li>
                <li><a href="../cus/complaints.php">Register Complaints</a></li>
                <li><?php   echo $_SESSION['username'];   ?></li>
                <li><a href="../../index.php">Log out</a></li>

            </ul>
        </div>
    </nav>
    <div class="container">
        <h5>CREATE POST</h5>
    </div>

    <div class="row container">
        <form class="col s12" method="POST">

            <div class="row">
                <div class="col s12">
                    <input id="title" type="text" placeholder="Title" name="post_title">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" placeholder="Content"
                        name="post_content"></textarea>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="post_btn">Create Post</button>

        </form>
    </div>

</body>
</html>

<?php 
$link = mysqli_connect("localhost", "root", "","ocm");


$title="";
$content="";
$date = date('Y-m-d');
$time = date('Y-m-d H:i:s');

if(isset($_POST['post_btn'])){

	$title = strip_tags($_POST['post_title']);
    $content = strip_tags($_POST['post_content']);
    
    $title = strtoupper($title);
    $content = ucwords($content); 

    $check = mysqli_query($link, "INSERT INTO blogs VALUES ('', '$title', '$content', '$username', '$time','$date' )");
    echo " <div class ='container'> <h5> Post was successfully Created </h5> </div>";
}
?>