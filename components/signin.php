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
    <link rel="stylesheet" href="../materialized/materialize/css/materialize.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="./ocm.jpg">
</head>
<body>

    <nav class=" grey darken-3">
        <div class="nav-wrapper container grey darken-3">
            <a href="../index.php" class="brand-logo">Online Crime Management</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="./signup.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <div class="row container">
        <form class="col s12" method="POST">
            <h5>Public Sign In</h5>

            <div class="row">
                <div class="input-field col s12">
                    <input id="email1" type="email" placeholder="E-mail" name="log_em">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password1" type="password" placeholder="Password" name="log_pass">
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="log_btn">Sign In</button>
        </form>
    </div>
</body>

</html>

<?php 
session_start();
$link = mysqli_connect("localhost", "root", "","ocm");

$em="";
$password="";
if(isset($_POST['log_btn'])){

	$em = strip_tags($_POST['log_em']);
	$password = strip_tags($_POST['log_pass']);

	$check = mysqli_query($link, "SELECT * FROM regdetailscus WHERE email='$em' AND pass='$password'");
	$row = mysqli_num_rows($check);

	if($row == 1) {
        header ("Location: dashboardcus.php");
        $uname= mysqli_query($link, "SELECT username FROM regdetailscus WHERE email='$em' AND pass='$password'");
        $name =  mysqli_fetch_assoc($uname);

        $_SESSION['username'] = $name['username'];
	}
	else {
		echo "Email and Password does not match";
	}
}
?>
