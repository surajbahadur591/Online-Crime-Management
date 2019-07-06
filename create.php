<!-- Online Crime Management, Public Servie is a Web Service for public who can easily register their complaint without visiting Police Station.
Developed By Suraj Bahadur Kumal (Software Engineer and Developer @surajbahadur )

[ Technology used : HTML, CSS(materialedcss) , MYSQL and PHP ]
[ Independent of Platform ]
[ Developed on Windows10 ]

Follow  me  on Social media
Facebook Id : https://www.facebook.com/Suraj.bahadur978
Youtube Id :https://www.youtube.com/c/SurajBahadur
Github Link : https://github.com/surajbahadur591 -->

<!-- This is the php file which is used to create database and tables related to OCM Project. Do not alter it unless you know what you are doing -->
<?php 
    $link = mysqli_connect("localhost", "root", "","");
    $query = mysqli_query($link, "create DATABASE ocm");
    $link = mysqli_connect("localhost", "root", "" , "ocm");

    $query = mysqli_query($link, "CREATE TABLE regdetails (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    username VARCHAR(50) NOT NULL, 
    email VARCHAR(50),
    pass VARCHAR(50)
    )");


    $query = mysqli_query($link, "CREATE TABLE regdetailscus (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    pass VARCHAR(50)
    )");

    $query = mysqli_query($link, "CREATE TABLE blogs (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title  VARCHAR(255) NOT NULL,
    content VARCHAR(250) NOT NULL,
    createdby VARCHAR(50) NOT NULL,
    time1 TIMESTAMP,
    date1 DATE
    )");

    $query = mysqli_query($link, "CREATE TABLE records (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name1  VARCHAR(50) NOT NULL,
    age1  VARCHAR(25) NOT NULL,
    bloodgroup VARCHAR(30) NOT NULL,
    crime VARCHAR(250) NOT NULL
    )");

    $query = mysqli_query($link, "CREATE TABLE missingphone(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cname  VARCHAR(50) NOT NULL,
    cfname  VARCHAR(50) NOT NULL,
    cmobile BIGINT(10) NOT NULL,
    caddress VARCHAR(250) NOT NULL,
    brand VARCHAR(20) NOT NULL,
    modelno VARCHAR(20) NOT NULL,
    imeino VARCHAR(30) NOT NULL,createdby VARCHAR(20) NOT NULL,
    updatedon date
    )");
    
    $query = mysqli_query($link, "CREATE TABLE missingperson(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        cname  VARCHAR(50) NOT NULL,
        cfname  VARCHAR(50) NOT NULL,
        cmobile BIGINT(10) NOT NULL,
        caddress VARCHAR(250) NOT NULL,
        gender VARCHAR(6) NOT NULL,
        height FLOAT(10) NOT NULL,
        color VARCHAR(10) NOT NULL,
        pname VARCHAR(20) NOT NULL, createdby VARCHAR(20) NOT NULL,
    updatedon date
    )");

     $query = mysqli_query($link, "CREATE TABLE lostfound(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        cname  VARCHAR(50) NOT NULL,
        cfname  VARCHAR(50) NOT NULL,
        cmobile BIGINT(10) NOT NULL,
        caddress VARCHAR(250) NOT NULL,
        itemname VARCHAR(20) NOT NULL,
        place VARCHAR(40) NOT NULL,createdby VARCHAR(20) NOT NULL,
    updatedon date
        )");

    $query = mysqli_query($link, "CREATE TABLE stolenvehicle(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cname  VARCHAR(50) NOT NULL,
    cfname  VARCHAR(50) NOT NULL,
    cmobile BIGINT(10) NOT NULL,
    caddress VARCHAR(250) NOT NULL,
    vehicleno VARCHAR (20) NOT NULL,
    brand VARCHAR (30) NOT NULL,
    color VARCHAR(20) NOT NULL,
    modelno VARCHAR(20) NOT NULL,
    createdby VARCHAR(20) NOT NULL,
    updatedon date
    )");
   
    if(mysqli_connect_errno()){
        echo "Failed to connect<br>";
    }
    else {
     echo "<h1>Database and Tables are Successfully Created. Peace!!  &#128516</h1>";
     
    }
?>