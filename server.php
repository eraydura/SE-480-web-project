
<?php 
session_start();

$tc="";
$name_surname="";
$faculty="";
$department="";
$id_number="";
$email="";
$phone_number="";

$errors=array();

//connect to database
	$db=mysqli_connect('localhost','root', 'manisa45', 'mezun_sistemi');

//if register button is clicked
	//post un içine button name yazıyorum

	if(isset($_POST['registerGraduate'])){
		$tc= mysqli_real_escape_string($db,$_POST['tc']);
		$name_surname= mysqli_real_escape_string($db, $_POST['name_surname']);
		$faculty= mysqli_real_escape_string($db, $_POST['faculty']);
		$department= mysqli_real_escape_string($db, $_POST['department']);
		$id_number= mysqli_real_escape_string($db, $_POST['id_number']);
		$email= mysqli_real_escape_string($db, $_POST['email']);
		$phone_number= mysqli_real_escape_string($db, $_POST['phone_number']);
		$password_1= mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2= mysqli_real_escape_string($db, $_POST['password_2']);

		if (empty($tc)) {
			# code...
			array_push($errors, "Tc is required");
		}
		if (empty($name_surname)) {
			# code...
			array_push($errors, "Name and surname are required");
		}
		if (empty($faculty)) {
			# code...
			array_push($errors, "Faculty is required");
		}
		if (empty($department)) {
			# code...
			array_push($errors, "department is required");
		}
		if (empty($id_number)) {
			# code...
			array_push($errors, "Id number is required");
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
			$sql="INSERT INTO registration_graduate (tc, name_surname, faculty, department, id_number,email, phone_number, password) 
			VALUES ('$tc', '$name_surname', '$faculty', '$department', '$id_number', '$email', '$phone_number', '$password')";

			mysqli_query($db,$sql);
			$_SESSION['name_surname']=$name_surname;
			$_SESSION['success']="You are now logged in";
			header('location: indexlogin.php');
		}
	}
	if (isset($_POST['loginGraduate'])) {
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
  	$query = "SELECT * FROM registration_graduate WHERE email='$email' AND password='$password'";
  	$result = mysqli_query($db, $query);
  	if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['name_surname'] = $name_surname;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: indexlogin.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }


	}




	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['name_surname']);
		header('location: indexFix.php');
		# code...
	}











 ?>