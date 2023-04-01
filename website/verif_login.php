<?php 
session_start(); 
include 'db/db_conn.php';
include 'main_func.php';

if (isset($_POST['uname']) && isset($_POST['password'])) {

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User_Name_is_required");
	    exit();

	} else if (empty($pass)) {
        header("Location: login.php?error=Password_is_required");
	    exit();

	} else {

        $pass=hash('sha256', $pass);
		$pass=hash('sha512', $pass);

		$sql = "SELECT username, id, password, token FROM users WHERE username='$uname' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username']=$row['username'];
            	$_SESSION['id']=$row['id'];
				$_SESSION['token']=$row['token'];
            	header("Location: dashboard.php");
		        exit();

            } else {
				header("Location: login.php?error=Incorect_User_name_or_password");
		        exit();

			}
		} else {
			header("Location: login.php?error=Incorect_User_name_or_password");
	        exit();

		}
	}
	
} else {
	header("Location: index.php");
	exit();

}