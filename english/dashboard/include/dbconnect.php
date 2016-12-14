<?php
try {
	$host = "23166.m.tld.pl";
	$dbname = "baza23166_realestate";
	$user = "admin23166_realestate";
	$pass = "Romania2016";

	$objDb = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$objDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo json_encode(array(
		'error' => true,
		'message' => $e->getMessage()
	
	), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
}