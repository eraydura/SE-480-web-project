<?php include('serverCompany.php'); ?>

<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
    <title> Company user login </title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
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
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Untitled-1.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Register for Graduation</a>
		  <a class="dropdown-item" href="#">Register for Company</a>
        </div>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Help(SSS)</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<div class="container">
<div class="header">
    <h2>Login</h2>
</div>

    <form action="loginCompany.php" method="post">
        <?php include('errors.php'); ?>
        <div class="imgcontainer">
            <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a>
    <img src="C:\Users\Serpil\Desktop\\mezun.png" alt="Avatar" class="avatar">
  </div>
                        <h5><strong>ID INFORMATION</strong></h5>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="E-mail" name="email" required>
                        </div>
                  
                        <h5><strong>LOGIN INFORMATION </strong></h5>
                        <div class="form-group"><input class="form-control" type="password" placeholder="Password" name="password" required>
                        </div>
                        
                        
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="loginCompany">Login</button>
                        </div>

                        <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    

    <span class="psw">Forgot <a href="#">password?</a></span>
                    </form>
	</div>
                    <div class="card text-center">
  <div class="card-header">
    <h4>Follow us on social Media</h4> <a href=""><img style="max-width: 20px" src="facebook_2.png"></a> <a href=""><img style="max-width: 20px" src="instagram.png"> </a><a href=""><img style="max-width: 20px" src="twitter.png"></a>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <h4>Our Adress</h4>
  İzmir University of Economics 
  Sakarya Caddesi, No:156
  35330 Balçova <br> İzmir/TÜRKİYE<br> 
  <img style="max-width: 20px" src="telephone.png">+90 232 279 2525 
    </div> 
    <br>
    
    <div class="col-sm">
     
    </div>
    <div class="col-sm">
     <iframe frameborder="0" height="200" marginheight="0" marginwidth="0" scrolling="no" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ekonomi+%C3%9Cniversitesi,+Bal%C3%A7ova,+Sakarya+Cad.+156,+Izmir,+T%C3%BCrkiye&amp;aq=0&amp;oq=izmir+ekonomi&amp;sll=37.0625,-95.677068&amp;sspn=58.685917,114.169922&amp;t=m&amp;ie=UTF8&amp;hq=Ekonomi+%C3%9Cniversitesi,+Bal%C3%A7ova,+Sakarya+Cad.+156,&amp;hnear=Izmir%2FIzmir+Province,+Turkey&amp;ll=38.394146,27.04113&amp;spn=0.053816,0.111408&amp;z=13&amp;output=embed" width="150%"></iframe>
    </div>
  </div>
</div>
   
  </div>
  <div class="card-footer text-muted">
      <div ><a>Sitemizi  <script language="Javascript" src="http://sa.sayaclar.com/c/s4.php?a=w8uiz30&s=1a7"></script> <a> kişi ziyaret etti.</a></a></div>
      <footer>&copy; Copyright 2018 ieu.edu.tr</footer>

  </div>
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
</body>
</html>