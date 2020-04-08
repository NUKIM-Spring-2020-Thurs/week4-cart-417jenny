<meta charset="UTF-8">

<?php 
ob_start();
session_start();

if ($_SESSION["item"]==S001) {
	$a="10吋變形平板";
	$a1="12000";
}
else{
	if ($_SESSION["item"]==S002) {
	$a="15.6吋筆記型電腦";
	$a1="27000";
    }
    else{
    	if ($_SESSION["item"]==S003) {
		$a="iPhone手機";
		$a1="21000";
    	}
    }
}

 ?>

 <table>
 	<thead>
 		<tr>功能</tr>
 		<tr>編號</tr>
 		<tr>名稱</tr>
 		<tr>價格</tr>
 		<tr>數量</tr>
 	</thead>
 	<tbody>
 		<tr><a href="delete.php">刪除</a></tr>
 		<tr><?php echo .$_SESSION["item"] ?></tr>
 		<tr><?php echo .$a ?></tr>
 		<tr><?php echo .$a1 ?></tr>
 		<tr><?php echo .$_SESSION["sum"] ?></tr>
 	</tbody>
 </table>

 <hr>
		<a href="catalog.php">商品清單</a>
		<a href="cart.php">購物車</a>
