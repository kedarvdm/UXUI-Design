<?php 
	$currency = '$ ';
    
	$db = new mysqli("localhost", "root", "root", "sellhub_schema"); 
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
    header('Content-Type: text/html; charset=utf-8'); 
    session_start(); 
?>