<?php
session_start();
$_SESSION['auth'] = true;

include 'include/dbconnect.php';

$stmt = $objDb->prepare('INSERT INTO users (`email`, `password`, `type`, `validated`) VALUES (:email, :password, "admin", 1)');
$stmt->execute(array('email' => $_POST['email'], 'password' => md5($_POST['password'])));

header("Location:dashboard/index.php");


?>