<?php 
session_start(); 
include 'db/db_conn.php';
include 'main_func.php';

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['re_password'])) {

	$uname=validate($_POST['uname']);
	$pass=validate($_POST['password']);
	$re_pass=validate($_POST['re_password']);
	$hwid=validate($_POST['hwid']);
	$ip=$_SERVER['REMOTE_ADDR'];
	$user_data='uname='. $uname;


	if (empty($uname)) {
		header("Location: signup.php?error=User_Name_is_required&$user_data");
	    exit();

	}
	else if (empty($pass)) {
        header("Location: signup.php?error=Password_is_required&$user_data");
	    exit();

	}
	else if (empty($re_pass)) {
        header("Location: signup.php?error=Re_Password_is_required&$user_data");
	    exit();

	}

	else if ($pass !== $re_pass) {
        header("Location: signup.php?error=The_confirmation_password_does_not_match&$user_data");
	    exit();

	} else {

		$pass=hash('sha256', $pass);
		$pass=hash('sha512', $pass);

	    $sql = "SELECT username FROM users WHERE username='$uname'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result)>0) {
			header("Location: signup.php?error=The_username_is_taken_try_another&$user_data");
	        exit();

		} else {
			
			$result=create_acc($pass, $uname, $ip, $hwid);
           	if ($result) {
				$_SESSION['username']=$uname;
           	 	header("Location: dashboard.php?error=$result");
	         	exit();

           	} else {
	           	header("Location: signup.php?error=$result&$user_data");
		        exit();

           	}

		}

	}
	
}else{
	header("Location: signup.php");
	exit();
}