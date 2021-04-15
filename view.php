<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    
    require_once "config.php";
    
    
    $sql = "SELECT * FROM post WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
       
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
       
        $param_id = trim($_GET["id"]);
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
            
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                
				$name = $row["name"];
					  $photo = $row["photo"];
					   $mywork = $row["mywork"];
					    $title1 = $row["title1"];
                $title = $row["title"];
                $category = $row["category"];
                $description = $row["description"];
				 $posted = $row["posted"];
				  $image = $row["image"];
            } else{
            
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    
    mysqli_stmt_close($stmt);
    
    
    mysqli_close($link);
} else{
   
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 20px;
  background: #ffffff;
}

.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: #ffffff;
  border-radius: 4px;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.leftcolumn {   
  float: left;
  width: 75%;
   
}

.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 10px;
   
}



.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
   background-color:#474e5d;
  margin-top: 20px;
}


@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

	
</style>
</head>
<body>

<div class="header">
  <h2><?php echo $row["title1"]; ?></h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      
                        
                        <p><b><?php echo $row["title"]; ?></b></p>
                   
       <p><b><?php echo $row["posted"]; ?></b></p>
	 <p><b><?php echo '<img src="'.$row['image'].'" style="width:1000px; height:500px;">';  ?></b></p>
     
      <p><b><?php echo $row["description"]; ?></b></p>
    </div>
    
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2><?php echo $row["name"]; ?></h2>
       <?php echo '<img src="'.$row['photo'].'"  style="width:150px; height:100px;">';  ?>
      <p>I am a blogger . And I love travelling.</p>
	  </div>
	  
    
    
  </div>
</div>

<div class="footer">
 
 <p>&copy; 2020. All rights reserved </p>

</div>

</body>
</html>
