<?php include('serverCompany.php'); ?>
<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GRADUATION-IEU</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
 
   
  <link rel="stylesheet" href="css/demo.css"/>
   
 <link rel="stylesheet" href="css/theme1.css"/>
  
<style>
	/* if body width less than 600px */
	@media only screen and (max-width: 600px) {
		.image1{
			width:inherit;
			height: inherit;
		}
		.btn-danger{
			margin-bottom: 10px;
			width:inherit;
		}
		.table-hover {
			width: auto;
		}
		
}


	
	.container .btn1 {
    position:inherit;
    transform: translate(-70%, -150%);
    -ms-transform: translate(-70%, -100%);
    background-color: #F7F2F2;
    color: white;
    font-size: 16px;
    padding: 12px 50px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
	margin-left: 100px;
	
	
}
	

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
	.active .buttons {
  padding: 5px 0;
  background: #eee;
  text-align: center;
  z-index: 10;
  position: relative;
}
.carouselbox button {
  border: none;
  display: none;
}
.active button {
  display: block;
} 
.offscreen {
  position: absolute;
  left: -2000px;
}
	* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
	#gif2{
		
    visibility:hidden;
	}
	#gif{
	visibility:hidden;	
	}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<div class="container">
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   <div class="modal-header"><h3>IEU-GRADUATION</h3>
   <span class="close">&times;</span>
     
	  </div>
    <a>
		<p>Dear Alumni;</p>

<p>Izmir University of Economics Graduation System serves together with universities, universities and colleagues related to the graduates of Izmir University of Economics.
</p>
<p>An electronic system that our graduates can use with their own passwords and accounts is structured; the graduates and employers are in contact.</p>

<p>
Graduates need to update their personal information in order to benefit from these services and approval of graduation information by the system administrator.</p>

<p>If you have any questions about the system, you can get help from the student affairs.</p></a>
  </div>

</div></div>
<!-- Navbar content -->
<div style="margin-top: 20px" >
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar" style="margin-bottom: 50px">
  <a class="navbar-brand" href="#">
    <img src="8f885ec21f1b4a859bcaa4ca4b4eb69a.png" width="60" height="60" class="d-inline-block align-top" alt=""> 
    <a class="n" style="margin-top:2px">IEU_GRADUATION</a>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
    <ul class="navbar-nav"  style="margin-left: auto">
      <li class="nav-item">
        <a class="nav-link" href="indexlogin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutUs2.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="HELP2.html">Help(SSS)</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<!-- Navbar content finished-->
<!-- JoinUs-Share Friend-Write-Find Friends Button content -->
<div class="container" style="margin-bottom: 20px">

  <img src="1.jpg" class="image1" name="slideshow" width="1110" height="430" alt="My slideshow">
  <button class="btn1" onclick="stop()" ><img src="7.jpg" width="30"></button>
	</div>
	<div class="container">
	 <div class="row">
    <div class="col-lg">
      <button type="button" class="btn btn-primary" style="width:inherit" ><a href="Write2.php"><img src="img_215612.png" width="50"></a><h3>WRITE!</h3></button>
    </div>
    <div class="col-lg">
      <button type="button" class="btn btn-warning" style="width:inherit" onclick="location.href='find2.php'" ><img src="101791-200.png" width="50"><h3>FIND FRIEND!</h3></button>
    </div>
    <div class="col-lg">
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#shareModal" style="width:inherit" ><img src="Group-512.png" width="50"><h3>SHARE FRIEND!</h3></button>
     <!-- Modal -->
  <div class="modal fade" id="shareModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">SHARE FRIENDS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
			<p> Share Friends with Facebook(Click it)</p>
           <a href="https://twitter.com/intent/tweet?url=http://www.ieumezunder.org/" target="_blank" data-url=""  data-lang="tr" >
<a href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fmezun.ieu.edu.tr%2Ftr" 

  onclick="

    window.open(

      'https://www.facebook.com/sharer.php?u=http%3A%2F%2Fmezun.ieu.edu.tr%2Ftr, 

      'facebook-share-dialog', 

      'width=226,height=236'); 

    return false;">
	
		<img  style="margin-bottom:10px" src="facebook_2.png" width="200" height="225" />

</a>
			   
       <p> Share Friends with Twitter(Click it)</p>
        <a href="https://twitter.com/intent/tweet?screen_name=ieumezunder&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @ieumezunder</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></a>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
		</div>
    
  </div>
  
</div>


  </div>
<!-- JoinUs-Share Friend-Write-Find Friends Button content finished -->
<!-- Job Advert-Activities-Anouncement table content -->
	<div class="container">
	<div class="row">
  <div class="col-lg-9">
	<div class="container" style="margin-top:50px  " >
		<h2>Job Adverts</h2>
	</div>
	<div class="container" >
		<table class="table table-sm" style="max-width: 800px" >
  <thead>
    <tr>
      <th scope="col">Advert</th>
      <th scope="col">Company</th>
      <th scope="col">Position</th>
      <th scope="col">Deadline</th>
    </tr>
  </thead>
   <tr >
      <th scope="row"  >1</th>
      
      <td>Google</td>
      <td>Software Intern</td>
      <td>02.02.2019</td>
		</tr>
     <tr>
      <th scope="row"  >2</th>
      <td>IBM</td>
      <td>Software Intern</td>
      <td>02.01.2019</td>
    </tr>
</table>
	</div> 
	<div class="container" style="margin-top:50px " >
		<h2>All Activities</h2><p>(See also in below date table)</p>
	</div>
	<div class="container" >
		<table class="table table-sm" style="max-width: 800px" >
  <thead>
   <tbody>
    
  </tbody>
    <tr>
      <th scope="col">Activity</th>
      <th scope="col">Activity Name</th>
      <th scope="col">Begin Date</th>
      <th scope="col">Finish Date</th>
      <th scope="col">Application Link</th>
    </tr>
  </thead>
  <tr >
      <th scope="row"  >1</th>
      <td ><a href=" " title="Click for the full site" style="background-color:#FFFFFF;color:#000000;text-decoration:none">Graduation Night</a></td>
      <td>22.11.2018-12:00</td>
      <td>22.11.2018-15:00</td>
      <td><a href="https://twitter.com/ieumezunder/status/852948078260883458">Click it</a></td>
		</tr>
     <tr>
      <th scope="row"  >2</th>
      <td ><a href=" " title="Click for the full site" style="background-color:#FFFFFF;color:#000000;text-decoration:none">Graduation Meeting</a></td>
      <td>28.11.2018-12:00</td>
      <td>28.11.2018-15:00</td>
      <td><a href="https://twitter.com/ieumezunder/status/860856103718060032">Click it</a></td>
    </tr>
  <tbody>
    <tr >
      
    </tr>
  </tbody>
</table>
	</div> 
	<div class="container" style="margin-top:50px  " >
		<h2>Anouncements</h2>
	</div>
	<div class="container" >
		<table class="table table-sm" style="max-width: 800px; margin-bottom: 70px" >
  <thead>
    <tr>
      <th scope="col">Anouncement Name</th>
      <th scope="col">Date</th>
      <th scope="col">Anouncement Link</th>
    </tr>
  </thead>
  <tr>
      <th scope="row"  >New Year Meeting</th>
      <td ><a href=" " title="Click for the full site" style="background-color:#FFFFFF;color:#000000;text-decoration:none">28.12.2018-12:00</a></td>
     
      <td><a href="https://twitter.com/ieumezunder/status/861191737540317184">Click it</a></td>
    </tr>
  <tbody>
    <tr >
      
    </tr>
  </tbody>
</table>
    
       <!-- Alumnies slide show content -->
	  </div><div class="container"><h2>Alumnies</h2></div>
	  <div class="slideshow-container"  style=" border:solid #020202">

<div class="mySlides" >
  <div class="numbertext">1 / 4</div>
  <img class="mezun" src="mezunlar_1524145719.jpg" style="width:inherit">
	<div class="text" id="1"  style="margin-left: 170px; max-width:600px; top:0"></div>
</div>

<div class="mySlides">
  <div class="numbertext" >2 / 4</div>
  <img src="mezunlar_1532593145.jpg" style="width:inherit">
	<div class="text" id="2" style="margin-left: 150px; max-width: 600px; top:0"></div>
</div>

<div class="mySlides" >
  <div class="numbertext">3 / 4</div>
  <img src="mezunlar_1521621524.jpg" style="width:inherit">
  <div class="text" id="3" style=" margin-left: 150px; max-width: 600px; top:0"> </div>
</div>
<div class="mySlides">
  <div class="numbertext">4 / 4</div>
  <img src="mezunlar_1522995848.jpg" style="width:inherit">
  <div class="text" id="4" style="margin-left: 150px; max-width: 600px; top:0"></div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
 
<br>

<div style="text-align:center; margin-bottom: 50px ">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
   <span class="dot" onclick="currentSlide(4)"></span> 
</div>
		
	<!-- Alumnies slide show content finished -->	
	  <div class="container"><h2>Activities</h2></div>
<div id="caleandar" style="margin-bottom: 50px">
<script type="text/javascript" src="caleandar.js">
</script>   
<script type="text/javascript" src="demo2.js">
</script>
</div>
</div>
		
	   <!-- Job Advert-Activities-Anouncement table content finished -->	
	   <!-- Login-Chat Small Column content-->
  <div class="col-sm-3">	
  
   <button type="button" class="btn btn-primary" onclick="window.location.href='http://localhost:3000/'" style="margin-top:50px; width:inherit; height:50px; margin-bottom:50px;">GRADUATION-CHAT</button>
   
   

  
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <h2 class="card-header">Home Page</h2>
      <div class="card-body">
        
        <p class="card-text">  <div class="content">
         <?php if (isset($_SESSION['success'])): ?>
         <div class="error success">
             <h3>
                 <?php
                 echo $_SESSION['success'];
                 unset($_SESSION['success']);
?>


             </h3>


         </div>
     <?php endif ?>

     <?php if(isset($_SESSION["company_name"])): ?>
     <p>Welcome <strong> <?php echo $_SESSION['company_name']; ?></strong></p>
     <?php endif ?>

     <?php if(isset($_SESSION["name_surname"])): ?>
     <p>Welcome <strong> <?php echo $_SESSION['name_surname']; ?></strong></p>
    
     <?php endif ?>
     
      <?php
       if(isset($_POST['loginGraduate'])){
		   
          $_email=$_POST['email'];
		  $baglan = mysql_connect("localhost","root","manisa45");
          if(!$baglan){
          die('404 ERROR:' . mysql_error()); 
          }
         $db_select = mysql_select_db("mezun_sistemi");
         $db=mysql_query("Select * from registration_graduate WHERE email LIKE '".$_email."'");
	while($row= mysql_fetch_array($db)){
		
		echo "<p> WELCOME </p> <p>".$row["name_surname"]."</p>";
		
	}
          }
        ?>
       
         <?php
       if(isset($_POST['Company'])){
          $_email=$_POST['email'];
		  $baglan = mysql_connect("localhost","root","manisa45");
          if(!$baglan){
          die('404 ERROR:' . mysql_error()); 
          }
         $db_select = mysql_select_db("mezun_sistemi");
         $db=mysql_query("Select * from registration_company WHERE email LIKE '".$_email."'");
	while($row= mysql_fetch_array($db)){
		
		echo "<p> WELCOME </p> <p>".$row["company_name"]."</p>";
		
	}
          }
        ?>
        </p>
       <a class="btn btn-danger" onClick="<?php session_unset(); session_destroy();?>" href="index.php" style="color: white;"> Logout</a></p>
      </div>
    </div>
        
      </strong>
    </div>

                    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	</div>
</div>
</div>
	 <!-- Login-Chat Small Column content finished-->
	 <!-- Footer content-->
<div class="card text-center" id="contact">
  <div class="card-header">
    <h4>Follow us on social Media</h4> <a href="https://www.facebook.com/izmirekonomiuniversitesi/"><img style="max-width: 20px" src="facebook_2.png"></a> <a href="https://www.instagram.com/izmirekonomiuni/?hl=tr"><img style="max-width: 20px" src="instagram.png"> </a><a href="https://twitter.com/izmirekonomiuni"><img style="max-width: 20px" src="twitter.png"></a>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <h4>Our Adress</h4>
  İzmir University of Economics 
  Sakarya Caddesi, No:156
  35330 Balçova <br> İzmir/TURKEY<br> 
  <img style="max-width: 20px" src="telephone.png">+90 232 279 2525 
    </div> 
    <br>
    
    <div class="col-sm">
       <!-- Map content-->
    </div>
    <div class="col-sm" >
     <iframe frameborder="0" style="width:inherit;height:inherit"  marginheight="inherit" marginwidth="inherit" scrolling="no" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ekonomi+%C3%9Cniversitesi,+Bal%C3%A7ova,+Sakarya+Cad.+156,+Izmir,+T%C3%BCrkiye&amp;aq=0&amp;oq=izmir+ekonomi&amp;sll=37.0625,-95.677068&amp;sspn=58.685917,114.169922&amp;t=m&amp;ie=UTF8&amp;hq=Ekonomi+%C3%9Cniversitesi,+Bal%C3%A7ova,+Sakarya+Cad.+156,&amp;hnear=Izmir%2FIzmir+Province,+Turkey&amp;ll=38.394146,27.04113&amp;spn=0.053816,0.111408&amp;z=13&amp;output=embed" width="150%"></iframe>
       <!-- Map content finished-->
    </div>
  </div>
</div>
   
  </div>
    <!-- Visited how many people content-->
  <div class="card-footer text-muted">
      <div ><a>Our website,
      <script language="Javascript"> document.write('<a target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/0.png" border="0" /></a>');document.write('<a  target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/0.png" border="0" /></a>');document.write('<a target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/0.png" border="0" /></a>');document.write('<a  target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/2.png" border="0" /></a>');document.write('<a  target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/0.png" border="0" /></a>');
		  var sc_project=11775990;var sc_invisible=1;var sc_security="7a33e1bd";
		  ;document.write('<noscript><div class="statcounter"><img class="statcounter" src="//c.statcounter.com/11775990/0/7a33e1bd/1/" alt="s"></div></noscript>')
		  </script>
		 
      <a> people visited.</a></a></div>
      <footer>&copy; Copyright 2018 ieu.edu.tr</footer>

  </div>
</div>
	 <!-- Footer content finished-->
	  <!-- All javascript content-->
	<script>
		  
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var current=0;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
	function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
	  
    }
	
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
	
}
	var  mySl = setInterval("carousel()", 2000);
	</script>
	
<script language="JavaScript" type="text/javascript">
	var currentSlide = 0;
if (document.images) {
// test if images object exist.  if images are supported by the browser, create an array of images and preload them.
var slides = new Array();
	slides[0] = new Image();
	slides[0].src="1.jpg";
	slides[1] = new Image();
	slides[1].src = "5.jpg";
	slides[2] = new Image();
	slides[2].src = "4.jpg";
}

	function nextImage() {

	if (document.images  && document.slideshow.complete) {
	// if browser support images, and image loaded complete
		if (currentSlide == slides.length) {
			currentSlide = 0;
		}
		document.slideshow.src = slides[currentSlide].src;
		currentSlide++;
	}
}
	var  mySl = setInterval("nextImage()", 2000);
	function stop() {
	clearInterval(mySl);
	
	if (document.images  && document.slideshow.complete) {
	// if browser support images, and image loaded complete
		if (currentSlide == slides.length) {
			currentSlide = 0;
		}
		document.slideshow.src = slides[currentSlide].src;
		currentSlide++;
	}
}
var modal = document.getElementById('myModal');



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


    modal.style.display = "block";


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function myFunction(x) {
    if (x.matches) { // If media query matches
		document.getElementById("1").style.color = "black";
		document.getElementById("2").style.color = "black";
		document.getElementById("3").style.color = "black";
		document.getElementById("4").style.color = "black";
		document.getElementById("1").style.fontSize = "13px";
		document.getElementById("2").style.fontSize = "13px";
		document.getElementById("3").style.fontSize = "13px";
		document.getElementById("4").style.fontSize = "13px";
        document.getElementById("1").innerHTML="<p style='text-align: justify'>Özgün İnceoğlu  2016 <br> </br> Moda Tasarımı Mezunu</p> ";
		document.getElementById("2").innerHTML="<p style='text-align: justify'>Ekrem Sözdinler 2017 <br> </br> Uluslararası İlişkiler ve Avrupa Birliği Mezunu</p> ";
		document.getElementById("3").innerHTML="<p style='text-align: justify'>Ozan Şenyayla 2016 <br> </br> Yazılım Mühendisliği Mezunu</p> ";
		document.getElementById("4").innerHTML="<p style='text-align: justify'>Belgin Sarıgül 2016 <br> </br> Ekonomi Mezunu</p>";
    } 
	else {
		//Alumni slide show information
		document.getElementById("1").style.color = "black";
		
        document.getElementById("1").innerHTML="Özgün İnceoğlu  2016 - Fashion Design Graduate <br> </br> Fashion was always a passion for me. I chose Izmir University of Economics Fashion Design department because I wanted to live and live as a professional. Izmir University of Economics, which I won in 2011 with success scholarship, was one of the factors driving my life.";
		
		document.getElementById("2").style.color="black";
		document.getElementById("2").innerHTML="Ekrem Sözdinler 2017 - International Relations and European Union Graduate<p> My first choice in 2012, Izmir University of Economics - International Relations and the EU Department to start with 100% scholarship was one of the most correct decisions. The section I read gave me an international look and a wide range of cultures. </p>";
		document.getElementById("3").style.color="black";
		document.getElementById("3").innerHTML="Ozan Şenyayla 2016 - Software Engineering Graduate<br></br>Software Engineering, which I heard for the first time on the first week of high school and which I had chosen as a profession that I wanted to do in the future, was in Izmir University of Economics, which was one of the few choices of that period. Software Engineering was my aim in my high school life.";
		document.getElementById("4").style.color="black";
		document.getElementById("4").innerHTML="Belgin Sarıgül 2016 - Economy Graduate<br></br>In 2011, I started with the 50% scholarship to Izmir University of Economics, which was my only choice. In the second year of my undergraduate studies, I graduated from both departments in 2016 by doing double major in International Relations and European Union department.";
    }
}



var x = window.matchMedia("(max-width: 600px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

</script>



</body>
</html>