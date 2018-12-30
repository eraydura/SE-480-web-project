<?php
$baglan = mysql_connect("localhost","root","manisa45");
if(!$baglan){
 die('404 ERROR:' . mysql_error()); 
}
$db_select = mysql_select_db("form");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<style>

	div.scrollmenu {
    
    overflow: auto;
    white-space: nowrap;
}

div.scrollmenu a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: auto;
    text-decoration: none;
}

	</style>
  
<title>Graduation_IEU</title>
</head>

<body>
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
<div class="container">
<form method="post">
  <div class="form-group row" style="margin-bottom : 100px">
    <label for="formGroupExampleInput">Write anything you want (max 150 character)</label>
	  <textarea id="text" maxlength="150" style="width:1100px; height: 200px;" onkeyup="myFunction()" name="text" type="text" ></textarea>
    
     <button id="eray" type="submit" class="btn btn-primary" value="Gönder" style="width: 1100px">Submit</button>
    <h3 id="char-left">LEFT: 150</h3>
  </div>
	</form>
	</div>
	
      <?php 
	  $text=$_POST["text"];
	  $veri= mysql_query("insert into text(write1) Values('".$text."')");
	  ?>
	  
	  <div class="container">
	  <div class="scrollmenu" style="margin-bottom : 100px;">
	  <ul class="list-group" style="max-height:250px">
	  <?php
	 $verileri_al=mysql_query("Select* from text");
	while($dizi= mysql_fetch_array($verileri_al)){
		echo "<li class='list-group-item '>".$dizi["write1"]."</li>";
	}
	?>
	</ul>
	</div>
	</div>
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

  </div>
</div>
<script>
	function myFunction(){
  var x = document.getElementById("text").value;
	var n=150;
	var left=(n-x.length);
    document.getElementById("char-left").innerHTML =left;}
    

	</script>
</body>
</html>
