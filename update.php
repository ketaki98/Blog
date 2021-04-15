<?php

require_once "config.php";
 

$name = $photo = $mywork = $title1 =$title = $category = $description = $posted = $image =  "";
$name_err = $photo_err = $mywork_err = $title1_err = $title_err = $category_err = $description_err = $posted_err = $image_err = "";
 
if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];
    
	
	 $input_name = trim($_POST["name"]);
    if(empty($input_title)){
        $name_err = "Please enter the name .";     
    }  else{
        $name = $input_name;
    }
	
   
$input_photo = trim($_POST["photo"]);
    if(empty($input_photo)){
        $photo_err = "Please insert the photo .";     
    }  else{
        $photo = $input_photo;
    }
	
	$input_mywork = trim($_POST["mywork"]);
    if(empty($input_mywork)){
        $mywork_err = "Please enter the occupation .";     
    }  else{
        $mywork = $input_mywork;
    }
	
$input_title1 = trim($_POST["title1"]);
    if(empty($input_title1)){
        $title1_err = "Please enter the header .";     
    }  else{
        $title1 = $input_title1;
    }
	
  $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter the title .";     
    }  else{
        $title = $input_title;
    }
    
    $input_category= trim($_POST["category"]);
    if(empty($input_category)){
        $category_err = "Please enter the category .";     
    }  else{
        $category = $input_category;
    }
    
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter the description .";     
    }  else{
        $description = $input_description;
    }
	
	
    $input_posted = trim($_POST["posted"]);
    if(empty($input_posted)){
        $posted_err = "Please enter an date.";     
    } else{
        $posted= $input_posted;
    }
	
	
    $input_image = trim($_POST["image"]);
    if(empty($input_image)){
        $image_err = "Please enter an image.";     
    } else{
        $image = $input_image;
    }
    
    
 if (empty($name_err)&& empty($photo_err)&& empty($mywork_err)&& empty($title1_err) &&empty($title_err) && empty($category_err) && empty($description_err)&& empty($posted_err)&& empty($image_err)){
        $sql = "UPDATE post SET name=?, photo=?, mywork=?, title1=? title=?, category=?, description=? , posted=? , image=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssssssssi",$param_name,$param_photo,$param_mywork,$param_title1, $param_title, $param_category, $param_description, $param_posted,  $param_image, $param_id);
            
			$param_name = $name;
			  $param_photo= $photo;
			    $param_mywork = $mywork;
				  $param_title1 = $title1;
            $param_title = $title;
            $param_category = $category;
            $param_description = $description;
			$param_posted = $posted;
			$param_image = $image;
            $param_id = $id;
            
            if(mysqli_stmt_execute($stmt)){
                header("location: post.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($link);
} else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);
        
        $sql = "SELECT * FROM post WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            $param_id = $id;
            
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
    }  else{
    
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
			margin-top:2px;
        }
		.container {
  position: relative;
  border-radius: 5px;
  background-color: #ffffff;
  padding: 20px 0px 30px 0px;
  margin-top:5%;
  margin-left:15%;
  height:auto;
  width:auto;
  border-radius: 25px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
		}
    </style>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Post</h2>
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					  <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
						 <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control <?php echo (!empty($photo_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $photo; ?>">
                            <span class="invalid-feedback"><?php echo $photo_err;?></span>
                        </div>
						 <div class="form-group">
                            <label>Occupation</label>
                            <input type="text" name="work" class="form-control <?php echo (!empty($mywork_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mywork; ?>">
                            <span class="invalid-feedback"><?php echo $mywork_err;?></span>
                        </div>
						 <div class="form-group">
                            <label>Header</label>
                            <input type="text" name="header" class="form-control <?php echo (!empty($title1_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title1; ?>">
                            <span class="invalid-feedback"><?php echo $title1_err;?></span>
                        </div>
                         <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>
                         <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control <?php echo (!empty($category_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $category; ?>">
                            <span class="invalid-feedback"><?php echo $category_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $description; ?>">
                            <span class="invalid-feedback"><?php echo $description_err;?></span>
                        </div>
						 <div class="form-group">
                            <label>Posted</label>
                            <input type="date" name="posted" class="form-control <?php echo (!empty($posted_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $posted; ?>">
                            <span class="invalid-feedback"><?php echo $posted_err;?></span>
                        </div>
						
					 <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control <?php echo (!empty($image_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $image; ?>">
                            <span class="invalid-feedback"><?php echo $image_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="post.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
	</div>
</body>
</html>