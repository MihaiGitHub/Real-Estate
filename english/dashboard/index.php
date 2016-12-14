<?php
ob_start(); 
session_start();

if(!$_SESSION['auth']){ 
	header('Location: index.php?authen=false');
	exit;
}
/*
// Session timeout after 15 minutes
if((time() - $_SESSION['last_access']) > 1200){
	header('Location: index.php?timeout');
	exit;
} else {
	$_SESSION['last_access'] = time();
}
*/

if(array_key_exists('logout', $_GET)){
	session_unset();
	$green = 'You have been logged out successfully.';

	header("Location:../index.php");
}
?>
<body class="home-page-1">
	<?php include 'include/nav.php'; ?>
    <?php echo 'dashboard'; ?>

<?php		  
$content = ob_get_contents();
ob_end_clean();
include 'include/header.php';
print $content;
include 'include/footer.php'; 
?>