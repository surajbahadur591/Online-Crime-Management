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
    <link rel="stylesheet" href="../../materialized/materialize/css/materialize.css">
    <title>View</title>
</head>

<body>
    <h5>View Complaints</h5>

</body>

</html>
<?php 
        session_start();
        $username = $_SESSION['username']; 
        if ( isset( $_SESSION['username'] ) ) {
        } else {
            // Redirect them to the login page
            header("Location: ../../index.php");
        }
        
        $link = mysqli_connect("localhost", "root", "","ocm");
      
?>
<?php
echo " <h5>Missing Phone : </h5>" ;

$sql = "SELECT * FROM missingphone where createdby='$username' ORDER BY id desc";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Brand</th>";
                echo "<th>Model No</th>";
                echo "<th>IMEI NO</th>";
                echo "<th>Registered by</th>";
                echo "<th>Updated on</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['brand'] . "</td>";
                echo "<td>" . $row['modelno'] . "</td>";
                echo "<td>" . $row['imeino'] . "</td>";
                echo "<td>" . $row['createdby'] . "</td>";
                echo "<td>" . $row['updatedon'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
       
    } 
}

echo " <h5>Missing Person : </h5>" ;

$sql = "SELECT * FROM missingperson where createdby='$username' ORDER BY id desc";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Person name</th>";
                echo "<th>Gender</th>";
                echo "<th>height</th>";
                echo "<th>color</th>";
                echo "<th>Registered by</th>";
                echo "<th>Updated on</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['pname'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['height'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                echo "<td>" . $row['createdby'] . "</td>";
                echo "<td>" . $row['updatedon'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
       
    } 
}

echo " <h5>Lost & Found : </h5>" ;

$sql = "SELECT * FROM lostfound where createdby='$username' ORDER BY id desc";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Item name</th>";
                echo "<th>Place of loss</th>";
                echo "<th>Registered by</th>";
                echo "<th>Updated on</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['itemname'] . "</td>";
                echo "<td>" . $row['place'] . "</td>";
                echo "<td>" . $row['createdby'] . "</td>";
                echo "<td>" . $row['updatedon'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
       
    } 
}

echo " <h5>Stolen vehicle : </h5>" ;

$sql = "SELECT * FROM stolenvehicle where createdby='$username' ORDER BY id desc";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Vehicle no</th>";
                echo "<th>Brand</th>";
                echo "<th>Color</th>";
                echo "<th>Model no</th>";
                echo "<th>Registered by</th>";
                echo "<th>Updated on</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['vehicleno'] . "</td>";
                echo "<td>" . $row['brand'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                echo "<td>" . $row['modelno'] . "</td>";
                echo "<td>" . $row['createdby'] . "</td>";
                echo "<td>" . $row['updatedon'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
       
    } 
}

?>