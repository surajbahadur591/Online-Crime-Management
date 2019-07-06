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
       $blog = mysqli_query($link, "SELECT * FROM records");
        ?>

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
        <h5>RECORDS</h5>
      <?php  $sql = "SELECT * FROM records";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Age</th>";
                echo "<th>Bloodgroup</th>";
                echo "<th>Crime</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name1'] . "</td>";
                echo "<td>" . $row['age1'] . "</td>";
                echo "<td>" . $row['bloodgroup'] . "</td>";
                echo "<td>" . $row['crime'] . "</td>";
              
            echo "</tr>";
        }
        echo "</table>";
       
    } 
}
?>
    </div>
</body>

</html>