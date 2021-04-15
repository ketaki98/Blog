 <?php
session_start();
require('connection.php');

//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
} 
//retrive student details from the tbmembers table
$result=mysqli_query($con, "SELECT * FROM tbMembers WHERE member_id = '$_SESSION[member_id]'");
if (mysqli_num_rows($result)<1){
    $result = null;
}
$row = mysqli_fetch_array($result);
if($row)
 {
 // get data from db
 $stdId = $row['member_id']; 
  $encpass= $row['password'];
}
?>
<?php
// updating sql query
if (isset($_POST['changepass'])){
$myId =  $_REQUEST['id'];
$oldpass = md5($_POST['oldpass']);
$newpass = $_POST['newpass'];
$conpass = $_POST['conpass'];
if($encpass == $oldpass)
{
  if($newpass == $conpass)
  {
    $newpassword = md5($newpass); //This will make your password encrypted into md5, a high security hash
    $sql = mysqli_query($con,"UPDATE tbmembers SET password='$newpassword' WHERE member_id = '$myId'" );
    echo "<script>alert('Password Change')</script>";
  }
  else
  {
    echo "<script>alert('New and Confirm Password Not Match')</script>";
  }

}
else
{
    echo "<script>alert('Old password not match')</script>";
}


// redirect back to profile
// header("Location: manage-profile.php");
}
?>
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
<title>Maharashtra Carrom Association</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script language="JavaScript" src="js/user.js">
</script>
</head>
<style>


body {
    font-family: 'Archivo Narrow'; font-size: 22px; margin: 0;
}

.header {
padding: 0px 10px 10px 150px;
margin-right:150px;
height:150px;
color:#ff1493;
text-shadow: 2px 2px 4px #00b8e6;

}

.logo{
float:left;
padding: 0px 0px 0px 190px;
}


.navbar {
   overflow: hidden;
  background-color: #00b8e6;
  box-shadow: 8px 8px 16px 0 gray;
  border-style:round;
  border:1px solid black;
}


.navbar a {
  float: left;
  display: block;
   color: black;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;-shadow: 0 8px 8px 0 gray;
  font-size: 20px;
}




.navbar a:hover {
    background-color:white;
  color: #ff1493;
}


.row {  
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  border-style:round;
  border:1px solid black;
 
  
}


.side {
  -ms-flex: 20%; 
  flex: 16%;
  border-style:round;
 
  padding: 20px;
}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  box-shadow: 0 8px 16px 0 gray;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}



.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color:#ff1493 ;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #00b8e6;
}
.mySlides {
  display: none;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

.main {   
  -ms-flex: 50%; 
  flex: 70%;
  background-color: white;
  padding: 20px;
  border-style:round;
 
 
  
}

.footer {
  padding: 20px;
  text-align: center;
  border-style:round;
  border:1px solid black;
  color:#ff1493;

background-color:#00b8e6;

}
.fa {
  
  font-size: 32px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  float:right;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
    text-color:white;
	

  
}

.fa-twitter {
  background: #55ACEE;
  color: white;
    text-color:white;

}

.fa-youtube {
  background: #bb0000;
  color: white;
    text-color:white;

}

.fa-instagram {
  background: #125688;
  color: white;
    text-color:white;

}


@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

@media screen and (max-width: 600px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
</style>

<body>

<div class="header">
<img src="logo.jpg" alt="logo" align="left" width="180px" height="140px" style="padding: 0px 10px 10px; float:left" >

<h1 style="font-size:3vw; font-family:Berkshire Swash;" "align=left;" >MAHARASHTRA CARROM ASSOCIATION ELECTION</h1>
<div>
<a href="https://www.facebook.com/maharashtracarromassociation" class="fa fa-facebook"></a>
<a href="https://twitter.com/mahacarromasso" class="fa fa-twitter"></a>
<a href="https://www.instagram.com/maharashtracarromassociation/" class="fa fa-instagram"></a>
<a href="https://www.youtube.com/channel/UCD6ONeJ9sBtNH70HR_DCpIg" class="fa fa-youtube"></a>
</div>
</div>
  <br>

<div class="navbar">
<marquee direction="left" width="50%" style="font-size:20px; padding: 10px;  float:right">
 Results will be declared soon.
</marquee>
  <a href="index.php" class="topnav" style="float:left">Home</a>
  <a href="login.php" class="topnav"style="float:left">E-Voting</a>
  <a href="contact.php" class="topnav"style="float:left">Contact</a>
  <a href="suggestion.php" class="topnav"style="float:left">Suggestion</a>
  
</div> <br> 
<div align="center">
<b><font size="30"> Polling System</font></b></div><br>

<div width="550px" align="center">
<div id="header" style="font-size:25px;">
  <h1>CHANGE PASSWORD</h1>
  <a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="changepass.php">Change Password</a>| <a href="logout.php">Logout</a>
</div><br>
<div id="container">
<table border="0" width="620" align="center">
<CAPTION style="font-size:25px"><h3>CHANGE PASSWORD</h3></CAPTION>
<form action="changepass.php?id=<?php echo $_SESSION['member_id']; ?>" method="post">
<table align="center" style="background: rgb(195,245,243);
background: linear-gradient(0deg, rgba(195,245,243,1) 26%, rgba(251,196,237,1) 100%);">
<tr style="font-size:25px"><td>Old Password:</td><td><input type="password" style="font-size:20px" name="oldpass" maxlength="5" value=""></td></tr>
<tr style="font-size:25px"><td>New Password:</td><td><input type="password" style="font-size:20px" name="newpass" maxlength="5" value=""></td></tr>
<tr style="font-size:25px"><td>Confirm New Password:</td><td><input style="font-size:20px" type="password" style="background-color:#999999; font-weight:bold;" name="conpass" maxlength="15" value=""></td></tr>
<tr style="font-size:25px"><td>&nbsp;</td></td><td><input style="font-size:20px" type="submit" name="changepass" value="Update Profile"></td></tr>
</table>
</form>

</div>

</div>
<br>
<div class="footer">
  <h2>&copy; Maharashtra carrom association</h2>

</div>

</body>
</html>
