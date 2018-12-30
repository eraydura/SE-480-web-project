
<?php 
session_start();

$company_name="";
$website="";
$email="";
$phone_number="";

$errors=array();

//connect to database
	$db=mysqli_connect('localhost','root', 'manisa45', 'mezun_sistemi');

//if register button is clicked
	//post un içine button name yazıyorum

	if(isset($_POST['registerCompany'])){
		
		$company_name= mysqli_real_escape_string($db, $_POST['company_name']);
		$website= mysqli_real_escape_string($db, $_POST['website']);
		$email= mysqli_real_escape_string($db, $_POST['email']);
		$phone_number= mysqli_real_escape_string($db, $_POST['phone_number']);
		$password_1= mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2= mysqli_real_escape_string($db, $_POST['password_2']);

		
		if (empty($company_name)) {
			# code...
			array_push($errors, "Company name is required");
		}
		
		if (empty($website)) {
			# code...
			array_push($errors, "Website is required");
		}
		if (empty($email)) {
			# code...
			array_push($errors, "E-mail is required");
		}
		if (empty($phone_number)) {
			# code...
			array_push($errors, "Phone number is required");
		}
		if (empty($password_1)) {
			# code...
			array_push($errors, "Password is required");
		}


		if ($password_1 != $password_2) {
			# code...
			array_push($errors, "Passwords do not match");
		}

		//if no error, save to database

		if (count($errors)==0) {
			# code...
			$password =md5($password_1);
			$sql="INSERT INTO registration_company (company_name,  website,email, phone_number, password) 
			VALUES ('$company_name', '$website', '$email', '$phone_number', '$password')";

			mysqli_query($db,$sql);
			$_SESSION['company_name']=$company_name;
			$_SESSION['success']="You are now logged in";
			header('location: indexlogin.php');
		}
	}
	if (isset($_POST['loginCompany'])) {
		# code...
		$email= mysqli_real_escape_string($db, $_POST['email']);
		$password= mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			# code...
			array_push($errors, "E-mail is required");
		}

		if (empty($password)) {
			# code...
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM registration_company WHERE email='$email' AND password='$password'";
  	$result = mysqli_query($db, $query);
  	if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['company_name'] = $company_name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: indexlogin.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }


	}




	if (isset($_GET['logout'])) {
		unset($_SESSION['company_name']);
		header('location: indexFix.php');
		# code...
	}











 ?>