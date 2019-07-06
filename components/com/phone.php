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
    <title>Missing Phone</title>
</head>

<body>
    <div class="container">
        <h4>Missing Phone</h4>
        <div class="row">
            <form class="col s12" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Complaintant's Name" name="cname" type="text" class="validate">

                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Father's/Mother's Name" name="cfname" type="text" class="validate">

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Mobile Number" name="cmobile" type="number" class="validate">

                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Complaintant's Address" name="caddress" type="text" class="validate">

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Brand" name="brand" type="text" class="validate">

                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Model" name="modelno" type="text" class="validate">
                    </div>
                </div>
                <div class="input-field col s6">
                    <input placeholder="IMEI Number" name="imeino" type="text" class="validate">
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    <button class="btn waves-effect waves-light" type="submit" name="btn">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

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
?>
<?php 
$link = mysqli_connect("localhost", "root", "","ocm");

$cname="";
$cfname="";
$cmobile ="";
$caddress= "";
$brand ="";
$modelno = "";
$imeino = "";
$date = date('Y-m-d');

if(isset($_POST['btn'])){

	 $cname= strip_tags($_POST['cname']);
    $cfname= strip_tags($_POST['cfname']);
    $cmobile = strip_tags($_POST['cmobile']);
    $caddress=  strip_tags($_POST['caddress']);
    $brand = strip_tags($_POST['brand']);
    $modelno = strip_tags($_POST['modelno']);
    $imeino = strip_tags($_POST['imeino']);    

    $check = mysqli_query($link, "INSERT INTO missingphone VALUES ('', '$cname', '$cfname', '$cmobile', '$caddress','$brand','$modelno', '$imeino','$username','$date' )");
    echo " <div class ='container'> <h5>Complaint registered successfully</h5> </div>";
	
}
?>