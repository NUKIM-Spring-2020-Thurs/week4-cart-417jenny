<meta charset="UTF-8">
<?php 
if (isset($_COOKIES["ID"])) {
	$user=$_COOKIES["ID"];
 	echo "歡迎再度光臨".$_COOKIES["ID"];
 	//setcookie("ID","",time()-3600);
 } 
 else{
 	echo "歡迎新朋友";
 	$user="";
 ?>

 	<form action="check.php" method="POST">
		Please input your username:<input type="text" name="id" value="<?php echo $user ?>" required><br/>
		Please input your password:<input type="text" name="pwd" required><br/>
		<input type="submit">
	</form>