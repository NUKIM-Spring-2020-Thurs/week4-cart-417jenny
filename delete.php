<?php 
session_start();

if (isset($_SESSION["item"]==S001)) {
	setcookie("item", "", time()-3600);
	setcookie("sum", "", time()-3600);
}
else{
	if (isset($_SESSION["item"]==S002)) {
	setcookie("item", "", time()-3600);
	setcookie("sum", "", time()-3600);
    }
    else{
    	if (isset($_SESSION["item"]==S003)) {
		setcookie("item", "", time()-3600);
		setcookie("sum", "", time()-3600);
    	}
    }
}

header('Location:cart.php');
 ?>