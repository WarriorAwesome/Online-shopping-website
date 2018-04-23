<?php 
error_reporting(0);
?>

<?php
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'test1');

	// variable declaration
	$password = "";
	$email    = "";
	$errors   = array();

	// call the register() function if register_btn is clicked
	if (isset($_POST['submit'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_destroy();
		header("location:index.php");
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form


		$fn = e($_POST['fname']);

		$ln = e($_POST['lname']);

		$gen = e($_POST['g']);

		$cno = e($_POST['contact']);

		$eid = e($_POST['email']);

		$pass = e($_POST['c_password']);

		$pass2 = e($_POST['password']);

		// form validation: ensure that the form is correctly filled
		if (empty($fn)) {
			array_push($errors, "First name is required");
		}
		if (empty($ln)) {
			array_push($errors, "Last name is required");
		}
		if (empty($gen)) {
			array_push($errors, "Gender is required");
		}
		if (empty($cno)) {
			array_push($errors, "Contact number is required");
		}
		if (empty($eid)) {
			array_push($errors, "email is required");
		}
		if (empty($pass)) {
			array_push($errors, "Password is required");
		}
		if (empty($pass2)) {
			array_push($errors, "Password confirmation is required");
		}
		if ($pass != $pass2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$passw = md5($pass);//encrypt the password before saving in the database

				$query = "INSERT INTO signuptable(FirstName, LastName, Gender, ContactNo, EmailId, Password) VALUES('".$fn."', '".$ln."', '".$gen."', '".$cno."', '".$eid."', '".$passw."')";

				mysqli_query($db,$query) or die("<h2 style = 'color:red;'>This Email id Already Has been Registered........</h2>");

				//$_SESSION['success']  = "New user successfully created!!";

				header("location:login2.php?");
		}

	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM signuptable WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $email, $errors;

		// grap form values
		$email = e($_POST['Email_id']);
		$pass = e($_POST['password']);
		$pss = md5($pass);

		// make sure form is filled properly
		if (empty($email)) {
			array_push($errors, "Email_id is required");
		}
		if (empty($pass)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$query = "SELECT * FROM signuptable WHERE EmailId='$email' AND Password='$pss' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$logged_in_user = mysqli_fetch_assoc($results);
				if($logged_in_user['user_type'] =='admin')
				{
					$_SESSION['user'] = $logged_in_user;
					header("location:afterlogin.php?");
				}

				else {
					$_SESSION['user'] = $logged_in_user;
					header("location:afterlogin.php?");
				}
			}else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>
