<?php
	$productId=$_POST["ProductId"];
	$size=$_POST["Size"];
	$order = array($productId,$size);
	session_start();
	if(!isset($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
	}
	$_SESSION['cart'][] = $order;
    $new_addr = 'Location:../shoedetail.php?ID='.$productId;
    header($new_addr);
	exit();
	
?>