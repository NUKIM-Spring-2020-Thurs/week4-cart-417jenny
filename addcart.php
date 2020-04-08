<?php 
ob_start();
session_start();

if (isset($_SESSION["item"])) {
	$_SESSION["item"]="item";
	header('Location:cart.php');
	if (isset($_SESSION["sum"])) {
		$_SESSION["sum"]="sum";
		header('Location:cart.php');
	}
}
header('Location:catalog.php');
 ?>