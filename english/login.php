<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'include/dbconnect.php';

	$stmt = $objDb->prepare('SELECT id, email, password, type, validated FROM users WHERE email = :email');
	$result = $stmt->execute(array('email' => $_POST['email']));

	while($row = $stmt->fetch()){
		if(md5(trim($_POST['password'])) == $row['password']){
			if($row['validated'] == 1){
				$_SESSION['id'] = $row['id'];
				$_SESSION['type'] = $row['type'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['auth'] = true;
				$_SESSION['last_access'] = time();
				break;
			}
			else {
				$red = "This email has not been validated";

                header('Location: index.php');
		        exit;
			}
		} else {
			$_SESSION['auth'] = false;
			$red = "Invalid username or password";

            header('Location: index.php');
		    exit;
		}
	}
	if($_SESSION['auth']){
		header('Location: dashboard/index.php');
		exit;
	} else {
		header('Location: index.php');
		exit;
	}
}
?>