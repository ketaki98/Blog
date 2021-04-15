<!DOCTYPE html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>


.login{
text-align:center;}
table{font-size:30px;}

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
input[type=text] ,input[type=password],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #ffffff;
  padding: 20px 0px 30px 0px;
  margin-top:5%;
  margin-left:15%;
  height:50%;
  width:70%;
  border-radius: 25px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}


/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #000000;
  height: 500px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}



/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</style>

<body>
<div class="container">
 <div class="row">
     
      <div class="vl">
        <span class="vl-innertext"></span>
      </div>

      <div class="col">
        <img src="images/regi1.png" alt="logo" align="left" width="100%" height="450px" >
		<br><br>
		<center style="font-size:20px;">
<br>Already have an account? <a href='login.php'><b>Login Here</b></a>
</center>
      </div>

      <div class="col">
	   <h1 style="text-align:center">Signin</h1>
       <th style="font-size:50px; text-align:center"  ></th>

<?php
require('connection.php');
//Process
if (isset($_POST['submit']))
{

$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysqli_query($con, "INSERT INTO tbMembers(first_name, last_name, email,password) 
VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass') ");

die( "<h1 align='center'>You have registered for an account.<br><br>Go to <a href=\"login.php\">Login</a></h1>" );
}

echo "<div id='container'>";
echo '<table width="00px" >';
echo "<tr><form action='registeracc.php' method='post' onsubmit='return registerValidate(this)'><td>
<table width='100%' border='0' cellpadding='1' cellspacing='3'>
<tr><td>&nbsp;</td><td><td>&nbsp;</td><td></tr><tr><td style='font-size:15px;' align='center'>First Name:</td><td align='center'><input style='font-size:15px;' type='text'  name='firstname' maxlength='15' value=''></td><td>&nbsp;</td></tr>";
echo "<tr><td style='font-size:15px;' align='center'>Last Name:</td><td><input style='font-size:15px;' type='text'  name='lastname' maxlength='15' value=''></td></tr>";
echo "<tr><td style='font-size:15px;' align='center'>Email Address:</td><td><input style='font-size:15px;' type='email'  name='email' maxlength='100' id='email'value=''></td><td><span id='result' style='color:red;'></span></td></tr>";
echo "<tr><td style='font-size:15px;' align='center'>Password:</td><td><input style='font-size:15px;' type='password'  name='password' maxlength='15' value=''></td></tr>";
echo "<tr><td style='font-size:15px;' align='center'>Confirm Password:</td><td><input style='font-size:15px;' type='password'  name='ConfirmPassword' maxlength='15' value=''></td></tr>";
echo "<tr><td>&nbsp;</td><td><input style='font-size:20px;' type='submit' name='submit' value='Register Account'/></td></tr>";

echo "</tr></td></table>";
echo "</form></tr></table>";

?>
</div>
</div>



<script src="js/jquery-1.2.6.min.js"></script>
    <script>
    $(document).ready(function(){
      
        $('#email').blur(function(event){
         
            event.preventDefault();
            var emailId=$('#email').val();
                                $.ajax({                     
                            url:'checkuser.php',
                            method:'post',
                            data:{email:emailId},  
                            dataType:'html',
                            success:function(message)
                            {
                            $('#result').html(message);
                            }
                      });
                    
           

        });

    });
   
    </script>
</body>
</html>
