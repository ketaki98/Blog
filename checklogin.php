<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Access Denied</title>

</head>
<body >

<center><b><font style="font-size:50px;" >Access Denied</font></b></center><br><br>
<body>
<div align="center" style="font-size:25px;">
<div >
<h1>Invalid Credentials Provided </h1>
<p align="center">&nbsp;</p>
</div>
<div id="container">
<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();
require('connection.php');



$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$encrypted_mypassword=md5($mypassword); //MD5 Hash for security

$myusername = stripslashes($myusername);
echo $mypassword = stripslashes($mypassword);


$sql=mysqli_query($con, "SELECT * FROM tbmembers WHERE email='$myusername' and password='$encrypted_mypassword'");


$count=mysqli_num_rows($sql);


if($count==1){

$user = mysqli_fetch_assoc($sql);
$_SESSION['member_id'] = $user['member_id'];
header("location:post.php");
}

else {
echo "Wrong Username or Password<br><br>Return to <a href=\"login.php\">login</a>";
}

$email;$comment;$captcha;
        if(isset($_POST['email'])){
          $email=$_POST['email'];
        }
        if(isset($_POST['comment'])){
          $comment=$_POST['comment'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LfWmssZAAAAADhXfVDlHVyyyITXFv8mMf5bAjN-";
        $ip = $_SERVER['REMOTE_ADDR'];
       
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
      
        if($responseKeys["success"]) {
                echo '<h2>Thanks for posting comment</h2>';
        } else {
                echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }

ob_end_flush();

?> 
</div>

</div>
</body>
</html>