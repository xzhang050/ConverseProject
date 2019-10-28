<?php
	$productId=$_POST["ProductId"];
	$size=$_POST["Size"];
	$price = $_POST["Price"];
	$name = $_POST["ProductName"];
	$image = $_POST["Image"];
	$order = array($productId, $name, $size,$price,$image);
	session_start();
	if(!isset($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
	}
	$_SESSION['cart'][] = $order;
	header('Location:'."../firstshoe.html");
	exit();
	
?>