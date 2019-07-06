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
    header("Location: ../index.php");
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
    <link rel="stylesheet" href="../materialized/materialize/css/materialize.css">
    <link rel="icon" href="../components/ocm.jpg">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <nav class=" grey darken-3">
        <div class="nav-wrapper container grey darken-3">
            <a href="../components/dashboardcus.php" class="brand-logo">Online Crime Management</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../components/cus/blogs.php">Blogs</a></li>
                <li><a href="../components/cus/createpost.php">Create Post</a></li>
                <li><a href="../components/cus/complaints.php">Register Complaints</a></li>
                <li><?php   echo $_SESSION['username'];   ?></li>
                <li><a href="../index.php">Log out</a></li>

            </ul>
        </div>

    </nav>
    <div class="container">
        <marquee>
            <h3> Welcome <?php echo $_SESSION['username']; ?> &#128526</h3>
        </marquee>
    </div>
</body>

</html>