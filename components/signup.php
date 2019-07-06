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
                <li><a href="../index.php">Log in</a></li>
            </ul>
        </div>
    </nav>

    <div class="row container">
        <form class="col s12" method="POST">
            <h5>Sign up</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="First Name" id="first_name" name="reg_fname" type="text">
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" placeholder="Last Name" name="reg_lname">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" placeholder="E-mail" name="reg_email">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" placeholder="Password" name="reg_password">
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="reg_btn">Sign Up</button>

        </form>
    </div>
    <div class="container">
        <h5>
    <?php 
$link = mysqli_connect("localhost", "root", "","ocm");

$fname="";
$lname="";
$em="";
$password="";
$username="";
$username = $fname."_". $lname;
$error_msg=array();

if(isset($_POST['reg_btn'])) {
    $fname = strip_tags($_POST['reg_fname']);
    $lname = strip_tags($_POST['reg_lname']);
    $em = strip_tags($_POST['reg_email']);
    $password = strip_tags($_POST['reg_password']);
    $username = $fname."_". $lname;
    
    if(strlen($fname)<5 || strlen($fname)>25){
        array_push($error_msg,"first name should be between 5 and 25<br>");
        echo("first name should be between 5 and 25<br>");
        }
    if(strlen($lname)<5 || strlen($lname)>25){
        array_push($error_msg,"last name should be between 5 and 25<br>");
        echo("last name should be between 5 and 25<br>");
        }
 
    if(strlen($password)<5 || strlen($password)>25){
        array_push($error_msg,"password should be between 5 and 25<br>");
        echo("password should be between 5 and 25<br>");
        }
    
    $e_check = mysqli_query($link, "SELECT * FROM regdetails WHERE email= '$em'");
    $e_row = mysqli_num_rows($e_check);
    if($e_row ==1){
        array_push($error_msg, "Email already exists<br>");
        echo("Email already Exists!! &#128531 <br>");
    }
        
    if(empty($error_msg)){
        $query = mysqli_query($link, "INSERT INTO regdetailscus VALUES ('','$fname', '$lname', '$username','$em', '$password')");
        echo "<h2>Registration Successful &#128515</h2>";    
    }
    }
    
?>  </h5>
    </div>

</body>
</html>

