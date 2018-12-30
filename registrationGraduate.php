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
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#eray">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Register
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="registrationGraduate.php">Register for Graduation</a>
                        <a class="dropdown-item" href="registrationCompany.php">Register for Company</a>
                      </div>

                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="HELP.html">Help(SSS)</a>
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
                    <option value="1">Faculty of Engineering</option><option value="9">Faculty of Business</option><option value="22">Faculty of Arts and Sciences</option><option value="23">Faculty of Fine Arts and Design</option> <option value="2">Faculty of Law</option><option value="4">Faculty of Medicine</option><option value="3">Faculty of Communication</option><option value="5">Faculty of Health Sciences</option></select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="department" name="department" value="<?php echo $department;  ?>"> <option>Select a department</option>
                      <option value="1">Aerospace Engineering</option>
                      <option value="2"> Biomedical Engineering</option>
                      <option value="3"> Civil Engineering</option>
                      <option value="4"> Computer Engineering</option>
                      <option value="5">  Electrical and Electronics Engineering</option>
                      <option value="6">  Food Engineering</option>
                      <option value="7">  Genetics and Bioengineering</option>
                      <option value="8"> Industrial Engineering</option>
                      <option value="9"> Mechanical Engineering</option>
                      <option value="10"> Mechatronics Engineering</option>
                      <option value="11"> Software Engineering</option>
                      <option value="12">Accounting and Auditing Program</option>
                      <option value="13">Business Administration</option>
                      <option value="14">Economics</option>
                      <option value="15">International Trade and Finance</option>
                      <option value="16">Logistics Management</option>
                      <option value="17">Political Science and International Relations</option>
                      <option value="18">Law</option>
                      <option value="19">Mathematics</option>
                      <option value="20">Translation and Interpretation (English)</option>
                      <option value="21">Physics</option>
                      <option value="22">Psychology</option>
                      <option value="23">Sociology</option>
                      <option value="24">Cinema and Digital Media</option>
                      <option value="25">Media and Communication</option>

                      <option value="26">Public Relations and Advertising</option>

                      <option value="27">Health Management</option>
                      <option value="28">Nursing</option>
                      <option value="29">Architecture</option>


                      <option value="30">Industrial Design</option>
                      <option value="31">Interior Architecture and Environmental Design</option>
                      <option value="32">Fashion and Textile Design</option>
                      <option value="33">Visual Communication Design</option>


                    </select> 
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
                    <p>Please write a result: What is the value of sin 30°?</p>
                       
                 

                        <input id="numb" type="text">

                        <button type="button" class="btn btn-primary " name="try" onclick="myFunction()" >Try It </button>

                        <p id="demo"></p>

                        <script>
                        function myFunction() {
                        var x, text;

                        // Get the value of input field with id="numb"

                        x = document.getElementById("numb").value;


                        if ( x!=0.5) {
                        text = "Input not true";
                        } else {
                          text = "Input OK";
                        }
                        document.getElementById("demo").innerHTML = text;
                        }
                        </script>


                  </div>
                      <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" onclick="Myfunction()" name="accept" id="inlineCheckbox1" value="yes">I have read<a href=""> Membership Condition</a>
                            </label>
                            
                        </div>
                           <script>
                         function Myfunction() {
                         var checkBox = document.getElementById("inlineCheckbox1");
                         var button = document.getElementById("btn");
						 
						 
                         if (checkBox.checked == true && document.getElementById("demo").innerHTML!="Input not true" ){
                         button.style.display = "block";
                         } else {
                         button.style.display = "none";
                         }
                         }
                         </script>

                  <input type="hidden" name="_token" value="9GhPiPYIwB3Aotp2qFj2ZY2vPA2rImG4zgW5J8Gr">
                  <button type="submit" style="display:none" class="btn btn-primary " id="btn"    name="registerGraduate">Register</button>
                </form>
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
          </body>
          </html>