<?php 
	session_start();
	include('funciones.php');
	if($_SESSION['aut']!=true){
		header("Location: index.php?m=".base64_encode('Necesitas inicar sesión'));
	}
	//define('URL_API','http://localhost/est/api/');
	define('URL_API','http://b0ld.net/b0ld.net/bluegeni_dondeir/api/');

?>
