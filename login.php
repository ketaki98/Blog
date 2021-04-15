<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
input[type=text] ,input[type=password], select, textarea {
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


.container {
  position: relative;
  border-radius: 5px;
  background-color: #ffffff;
  padding: 20px 0px 30px 0px;
  margin-top:9%;
  margin-left:15%;
  height:50%;
  width:70%;
  border-radius: 25px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
} 


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



input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #000000;
  height: 350px;
}

.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

.hide-md-lg {
  display: none;
}



@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  .vl {
    display: none;
  }
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>




<div class="container">
  
    <div class="row">
     
      <div class="vl">
        <span class="vl-innertext"></span>
      </div>

      <div class="col">
        <img src="images/login.png" alt="logo" align="left" width="100%" height="300px" >
		
		<center style="font-size:20px;">
<br>Not yet registered? <a href="registeracc.php"><b>Register Here</b></a><br>
<br>
<a href="index1.php"><b>Guest User?</b></a>
</center>
      </div>

      <div class="col">
	   <h1 style="text-align:center">Login</h1>

       <th style="font-size:50px; text-align:center" ></th>
	   
<tr>
<form name="form1" method="post" action="checklogin.php" onSubmit="return loginValidate(this)">
<td>
<table width="100%" border="0" cellpadding="1" cellspacing="3" >
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>

<tr>
<td  style="font-size:15px;" align="center">Email:</td>
<td ><input style="font-size:15px;" name="myusername" type="text" id="myusername"></td>
</tr>
<tr>

<tr>
<td style="font-size:15px;" align="center">Password:</td>
<td><input style="font-size:15px;" name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
	<td><div class="g-recaptcha" data-sitekey="6LfWmssZAAAAAKjOn6lHitBkPaWjuSRsD-bs3dHz"></div></td>
</tr>

<tr>
<td>&nbsp;</td>

<td align="left"><input style="font-size:20px;" type="submit" name="Submit" value="Login" class="btn btn-primary"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>

</div>
      </div>
      
    </div>
  </form>
</div>



</body>
</html>
