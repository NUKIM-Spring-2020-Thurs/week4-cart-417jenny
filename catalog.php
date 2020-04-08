<meta charset="UTF-8">

<form action="addcart.php" method="POST">

選擇商品:<select name="item" id="a" value="<?php echo $item ?>" required>
			<option value="S001">10吋變形平板-$12000</option>
			<option value="S002">15.6吋筆記型電腦-$27000</option>
			<option value="S003">iPhone手機-$21000</option>
		</select>
		<input type="text" name="sum" value="<?php echo $sum ?>" required>
		<input type="submit" value="加入購物車">
		<hr>
		<a href="catalog.php">商品清單</a>
		<a href="cart.php">購物車</a>

</form>

<?php
ob_start();
session_start();

setcookie("item",$_SESSION["item"],$date);
setcookie("sum",$_SESSION["sum"],$date);

 ?>

