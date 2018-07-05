<?php 

if($_POST['pass']=="coordinacionTESIingles"){
	session_start();
	$_SESSION['valida']=TRUE;

	echo "<script>window.location.href=\"index\";</script>";

}else{

	echo "<script>
	alert(\"Error al iniciar sesión\");
	window.location.href=\"login\";</script>";
}

 ?>