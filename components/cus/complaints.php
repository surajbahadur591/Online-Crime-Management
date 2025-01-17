<!-- Online Crime Management, Public Servie is a Web Service for public who can easily register their complaint without visiting Police Station.
Developed By Suraj Bahadur Kumal (Software Engineer and Developer @surajbahadur )

[ Technology used : HTML, CSS(materialedcss) , MYSQL and PHP ]
[ Independent of Platform ]
[ Developed on Windows10 ]

Follow  me  on Social media
Facebook Id : https://www.facebook.com/Suraj.bahadur978
Youtube Id :https://www.youtube.com/c/SurajBahadur
Github Link : https://github.com/surajbahadur591 -->

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
    <?php 
        session_start();
        $username = $_SESSION['username']; 
        if ( isset( $_SESSION['username'] ) ) {
        } else {
            // Redirect them to the login page
            header("Location: ../../index.php");
        }
        $link = mysqli_connect("localhost", "root", "","ocm");
        $blog = mysqli_query($link, "SELECT * FROM blogs ORDER BY time1 DESC");
         
?>

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

        <h5>Register Complaint</h5>
        <a class="waves-effect waves-light btn-large" href="../com/view.php" target="frames">View Complaint Status</a>
        <a class="waves-effect waves-light btn-large" href="../com/phone.php" target="frames">Missing / Stole
            Phones</a>
        <a class="waves-effect waves-light btn-large" href="../com/person.php" target="frames">Missing Person</a>
        <a class="waves-effect waves-light btn-large" href="../com/lostfound.php" target="frames">Lost & Found</a>
        <a class="waves-effect waves-light btn-large" href="../com/vehicle.php" target="frames">Stolen Vehicles</a>

        <iframe src="" frameborder="0" name="frames" height="500px" width="100%"></iframe>

    </div>
</body>

</html>


<!DOCTYPE html>