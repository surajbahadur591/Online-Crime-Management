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
            <a href="../dashboardemp.php" class="brand-logo">Online Crime Management</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../emp/blogs.php">Blogs</a></li>
                <li><a href="../emp/createpost.php">Create Post</a></li>
                <li><a href="../emp/viewcomplaints.php">View Complaints</a></li>
                <li><a href="../emp/viewrecords.php">View Criminal Records</a></li>
                <li><?php   echo $_SESSION['username'];   ?></li>
                <li><a href="../../index.php">Log out</a></li>

            </ul>
        </div>
    </nav>
    <div class="container">
        <h5>VIEW COMPLAINTS</h5>
        <a class="waves-effect waves-light btn-large" target="frames" href="person.php">View Missing Person</a>
        <a class="waves-effect waves-light btn-large" target="frames" href="phone.php">View Missing Phone</a>
        <a class="waves-effect waves-light btn-large" target="frames" href="vehicle.php">View Stolen vehicle</a>
        <a class="waves-effect waves-light btn-large" target="frames" href="lostfound.php">Lost & Found</a>

        <iframe src="" frameborder="0" name="frames" height="500px" width="100%"></iframe>
    </div>

</body>
</html>