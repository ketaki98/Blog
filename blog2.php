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
  <h2>Food Blog</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Poha</h2>
      <h5>Dec 7, 2020</h5>
     <img src="poha.jpg" style="height:500px;" > 
      <p>Maharashtrian Food</p>
<p>Poha is mostly used in the Indian Subcontinent and other south Asian countries. Apart from the classics like Batata Poha or kanda poha and chivda, there is a lot of variety that can be produced with this ingredient ranging from breakfast and snacks to dinner. Given below are a few Poha Dishes recipes that you can easily make.</p>
    </div>
    
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Abc</h2>
      <img src="abc.jfif" style="height:100px;" > 
      <p>Food blogger</p>
	  </div>
	  <div class="card">
      <h2>Misal Pav</h2>
      <h5> Sep 2, 2020</h5>
     <div><img src="misal.jpg" style="height:200px;" > </div>
      <p>Maharashtrian Breakfast</p>
<p>misal pav recipe | how to make maharashtrian misalpav recipe with detailed photo and video recipe. a popular spicy dish from the western india which is made up of a spicy dish misal served bread or pav. the uniqueness of this dish is with its topping and the spicy misal is topped with chivda mix, or sev or farsan. this spicy and lip-smacking dish is typically served for breakfast or as a snack which can be easily extended for lunch and dinner too.</p>
    </div>
    
    
  </div>
</div>

<div class="footer">
  <a href="index1.php"><b>Previous</b></a>
  <a href="blog3.php"><b>Next</b></a>
 
</footer>

</body>
</html>
