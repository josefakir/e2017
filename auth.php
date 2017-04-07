<?php 
	session_start();
	if($_SESSION['aut']!=true){
		header("Location: index.php?m=".base64_encode('Necesitas inicar sesión'));
	}
	define('URL_API','http://localhost/est/api/');
?>