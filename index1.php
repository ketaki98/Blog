<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #ffffff;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: #ffffff;
  border-radius: 4px;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
   
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 10px;
   
}



/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Clear floats after the columns */
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
  <h2>Daily blog</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Tajmahal</h2>
      <h5>Dec 7, 2020</h5>
     <img src="taj.jpg" style="height:500px;" > 
      <p>Marble mausoleum in Agra, India</p>
      <p>The Taj Mahal was built by the Mughal emperor Shah Jahān (reigned 1628–58) to immortalize his wife Mumtaz Mahal (“Chosen One of the Palace”), who died in childbirth in 1631, having been the emperor’s inseparable companion since their marriage in 1612.Taj Mahal is a mausoleum built to house the grave of Shah Jahan’s favorite wife, Mumtaz, who lost her life at the age of 38 while giving birth to the couple’s fourteenth child. Shah Jahan never recovered from the loss and dedicated the Taj Mahal to her memory. Her grave is found in a crypt under the building. Apparently Shah Jahan had planned to build a black version of the mausoleum as tomb for himself on the other side of the river.  bridge would have connected the two monuments. Yet no black Taj Mahal was ever built and after his death, Shah Jahan was instead buried beside Mumtaz.he The Taj Mahal was famously described by the Indian author Rabindranath Tagore as “the tear-drop on the cheek of time.” The buildings have recently turned yellow as a result of acid rain but various attempts are made to restrict environmental pollution in the area. If nothing else, the Taj Mahal is a great source of income. It is annually visited by some 8 million tourists, not least by couples who like to pose for photos in front of the iconic facade.</p>
    </div>
    
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Travel blogger</h2>
      <img src="images/f1.png" style="height:100px;" > 
      <p>I am a travel blogger and i love to travel in india and outside india also</p>
	  </div>
	  <div class="card">
      <h2>Andaman Nicobar</h2>
      <h5> Sep 2, 2020</h5>
     <div><img src="a.jpg" style="height:200px;" > </div>
      <p>Union territory of India</p>
      <p>Diving in Andaman and Nicobar islands is exceptional. The costal belt surrounding these islands is the abode of one of the richest coral reef ecosystems in the world. The distinction is that here the coral reefs and underwater formations are untouched by human activities. The best season for diving is considered between December and April.</p>
    </div>
    
    
  </div>
</div>

<div class="footer">
  <a href="index1.php"><b>Previous</b></a>
  <a href="blog2.php"><b>Next</b></a>
 
</footer>

</body>
</html>
