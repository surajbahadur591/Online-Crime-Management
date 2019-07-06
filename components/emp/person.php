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
    <title>Missing person</title>
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

        echo " <h5>Missing Person : </h5>" ;

$sql = "SELECT * FROM missingperson ORDER BY id desc";
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
                echo "<th>Complainant's Name</th>";
                    echo "<th>Complainant's number</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['pname'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['height'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                echo "<td>" . $row['createdby'] . "</td>";
                echo "<td>" . $row['updatedon'] . "</td>";
                echo "<td>" . $row['cname'] . "</td>";
                    echo "<td>" . $row['cmobile'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
       
    } 
}
      
?>
</body>

</html>

