
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            
			margin-right:2px;
        }
        table tr td:last-child{
            width: 500px;
        }
		.container {
  position: relative;
  border-radius: 5px;
  background-color: #ffffff;
  padding: 20px 0px 30px 0px;
  margin-top:9%;
  
  height:auto;
  width:auto;
  border-radius: 25px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		</style>
		
    
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">My Blogs</h2>
                        <a href="newblog.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Blog</a>
                    </div>
                    <?php
                   
                    require_once "config.php";
                    
                    
                    $sql = "SELECT * FROM post ";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Id</th>";
										echo "<th>Name</th>";
										echo "<th>Photo</th>";
										echo "<th>Occupation</th>";
										echo "<th>Header</th>";
                                       echo "<th>Title</th>";
                                        echo "<th>Category</th>";
										echo "<th>Description</th>";
										echo "<th>Posted on</th>";
										echo "<th>Image</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
										 echo "<td>" . '<img src="'.$row['photo'].'"  style="width:200px; height:100px;">';  "</td>";
										echo "<td>" . $row['mywork'] . "</td>";
										echo "<td>" . $row['title1'] . "</td>";
										echo "<td>" . $row['title'] . "</td>";
									    echo "<td>" . $row['category'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
										 echo "<td>" . $row['posted'] . "</td>";
										  echo "<td>" . '<img src="'.$row['image'].'"  style="width:50px; height:50px;">' .  "</td>";
                                      
										echo "<td>";
                                            echo '<a href="view.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                   
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
	</div>
</body>
</html>