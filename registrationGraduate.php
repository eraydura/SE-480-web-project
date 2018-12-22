<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Graduate user registration </title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
function ValidateContactForm()
{
var email = document.ContactForm.Email;
var error="";
if (email.value == "")
{
    email.style.background='Red';
    error="You didn't enter a username.\n";
     alert(error);
window.alert("Please enter a valid e-mail address.");
email.focus();
return false;
}

if (email.value.indexOf("@", 0) < 0)
{
window.alert("Please enter a valid e-mail address.");
email.focus();
return false;
}

if (email.value.indexOf(".", 0) < 0)
{
window.alert("Please enter a valid e-mail address.");
email.focus();
return false;
}

if(document.registration.faculty.selectedIndex==0)
{ alert("Please select your faculty");
document.registration.faculty.focus();
return false;
}




}


 function validatePassword(password_1) {
                
                // Do not show anything when the length of password is zero.
                if (password_1.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password_1)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }
</script>
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
	<h2>Register</h2>
</div>
<div class="container">
	<form action="registrationGraduate.php" method="post"  onsubmit="return validatePassword(password_1);">

        <?php include('errors.php') ?>
                        <h5><strong>ID INFORMATION</strong></h5>
                        <div class="form-group">
                            <input class="form-control" type="Number" placeholder="TC or ID" name="tc" value="<?php echo $tc;  ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name-Surname" name="name_surname" value="<?php echo $name_surname;  ?>">
                        </div>


                        <h5><strong>EDUCATION INFORMATION</strong></h5>
                        <div class="form-group">
                            <select class="form-control" id="faculty" name="faculty" value="<?php echo $faculty;  ?>">
                                <option>Select an academic unit</option>
                            <option value="1">Eğitim Fakültesi</option><option value="9">Fen Edebiyat Fakültesi</option><option value="22">Güzel Sanatlar Fakültesi</option><option value="23">İktisadi ve İdari Bilimler Fakültesi</option></select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="department" name="department" value="<?php echo $department;  ?>"> <option>Select an academic unit</option>
                            <option value="1">Eğitim Fakültesi</option><option value="9">Fen Edebiyat Fakültesi</option><option value="22">Güzel Sanatlar Fakültesi</option></select> 
                        </div>

                        <div class="form-group"><input class="form-control" type="text" placeholder="Id Card Number" name="id_number" value="<?php echo $id_number;  ?>"></div>

                        <h5><strong>CONTACT INFORMATION</strong></h5>
                        <div class="form-group"><input class="form-control" type="email" placeholder="E-mail" name="email" value="<?php echo $email;  ?>">
                        </div>

                        <div class="form-group"><input class="form-control" type="number" placeholder="Phone Number" name="phone_number" value="<?php echo $phone_number;  ?>">
                        </div>
                        <h5><strong>LOGIN INFORMATION </strong></h5>
                        <div class="form-group"><input class="form-control" type="password" placeholder="Password" name="password_1" onkeyup="validatePassword(this.value);"/><span id="msg"></span>

                        </div>
                        <div class="form-group"><input class="form-control" type="password" placeholder="Confirm Password" name="password_2"></div>

                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfDhQsUAAAAADPci_lPsA9nlcP93t4bzTOCs1uA"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfDhQsUAAAAADPci_lPsA9nlcP93t4bzTOCs1uA&amp;co=aHR0cHM6Ly9tZXp1bi51c2FrLmVkdS50cjo0NDM.&amp;hl=tr&amp;v=v1542004393985&amp;size=normal&amp;cb=49be8g4drfua" width="304" height="78" role="presentation" name="a-gkowrhjww2ld" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name=s"g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
                        </div>
                        
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="kabul" id="inlineCheckbox1" value="evet"><a href="">Üyelik
                                    Şartları</a>'nı okudum, kabul ediyorum.
                            </label>
                        </div>


                        <input type="hidden" name="_token" value="9GhPiPYIwB3Aotp2qFj2ZY2vPA2rImG4zgW5J8Gr">
                        <button type="submit" class="btn btn-primary " name="registerGraduate">Register</button>
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
</body>
</html>