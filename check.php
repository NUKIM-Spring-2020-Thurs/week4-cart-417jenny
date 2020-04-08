<?php
ob_start();
session_start();

$id=$_POST["id"];
$pwd=$_POST["pwd"];

$uid="jenny";
$upwd="1223344";

if ($id==$uid && $pwd==$upwd) {
	$_SESSION["login"]="S";
	$_SESSION["ID"]="id";
	header('Location:catalog.php');
} else {
	$_SESSION["login"]="F";
	header('Location:login.php');
} 
 ?>