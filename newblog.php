<?php
require_once "config.php";
 
$name = $photo = $mywork = $title1 =$title = $category = $description = $posted = $image =  "";
$name_err = $photo_err = $mywork_err = $title1_err = $title_err = $category_err = $description_err = $posted_err = $image_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
   $input_name = trim($_POST["name"]);
    if(empty($input_name)){
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
        $mywork_err = "Please insert the occupation .";     
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
    
   
    if (empty($name_err)&&empty($photo_err)&& empty($mywork_err)&& empty($title1_err) &&empty($title_err) && empty($category_err) && empty($description_err)&& empty($posted_err)&& empty($image_err)){
        $sql = "INSERT INTO `post`( `name`, `photo`, `mywork`, `title1`, `title`, `category`, `description`, `posted`, `image`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssssssss",$param_name,$param_photo,$param_mywork,$param_title1, $param_title, $param_category, $param_description, $param_posted, $param_image);
            
		    $param_name = $name;
		    $param_photo= $photo;
		    $param_mywork = $mywork;
		    $param_title1 = $title1;
            $param_title = $title;
            $param_category = $category;
            $param_description = $description;
			$param_posted = $posted;
			$param_image = $image;
            
            
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
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
                            <input type="text" name="mywork" class="form-control <?php echo (!empty($mywork_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mywork; ?>">
                            <span class="invalid-feedback"><?php echo $mywork_err;?></span>
                        </div>
						 <div class="form-group">
                            <label>Header</label>
                            <input type="text" name="title1" class="form-control <?php echo (!empty($title1_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title1; ?>">
                            <span class="invalid-feedback"><?php echo $title1_err;?></span>
                        </div>
                         <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
                            <span class="invalid-feedback"><?php echo $title_err;?></span>
                        </div>
                         <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="category" id="myInput" class="form-control <?php echo (!empty($category_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $category; ?>">
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
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
	<script>
function autocomplete(inp, arr) {
  
  var currentFocus;
 
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      for (i = 0; i < arr.length; i++) {
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
      
        currentFocus++;
      
        addActive(x);
      } else if (e.keyCode == 38) { //up
       
        currentFocus--;
      
        addActive(x);
      } else if (e.keyCode == 13) {
      
        e.preventDefault();
        if (currentFocus > -1) {
       
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
 
    if (!x) return false;
   
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
   
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
   
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
 
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
var category = ["Travel","Food","Fashion","Science"];
autocomplete(document.getElementById("myInput"), category);
</script>
</body>
</html>