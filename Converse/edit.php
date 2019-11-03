<!DOCTYPE html>
<html lang="en">
<head>
<title>Converse Online Shop</title>
<link rel="stylesheet" type="text/css" href="Template.css" />
	<style>
		 .container1{background-image: url(./img/cart_background.jpg);
		             background-repeat: no-repeat;
		             background-size: 100% 100%;}
		 .container2 {
            background-color: rgba(255, 255, 255, 0.8);
            height: 100%;
        }

        #shoeName{
		font-size: 100;
		font-family: Comic Sans Ms;
		padding-top: 10px;
		font-weight: bold;
		height: 40px;
		}
		#discription{
		font-family: Comic Sans Ms;
		padding-top: 5px;
		height: 80px;
		}
	</style>
</head>
<body>
<div id="wrapper">
	<header>
		<img src="./img/converse_logo.jpg" height="85px" >
	</header>
	<nav>
	<ul>
	<li><a href="cart.php">CART</a></li>
	<li><a href="index.html">HOME</a></li>
	</ul>
	</nav>
	<div class='container1'>
	<div class='container2'>
	<table>
	<form id="SaveToCart" action="./script/SaveToCart.php" method="post">
	<tr>
	<?php
    session_start();
    $key = $_GET["key"];
    $order = $_SESSION['cart'][$key];
    $productId = $order[0];
	$size = $order[1];
	$servername = "localhost";
	$username = "f31ee";
	$password = "f31ee";
	$dbname = "f31ee";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
				}
	$sql = "SELECT * FROM ShoeInfo WHERE ProductID = ".$productId;
    $result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$name = $row['ProductName'];
	$price = $row['Price'];
	$image = $row['ImgAddr']."_1.jpg";
	echo "<td colspan=3 rowspan=4><img src=$image width='500px' height='360px' id='large_pic'></td>";
	echo "<td id='shoeName'><u>$name</u>";
	?>
	</tr>
	<tr>
	<td></td>
	</tr>
	<tr>
	<?php
	echo "<td>Price:  SGD <b>$price</b>";
	?>
		<br>
		<br>Size:  <select id='Size' name='Size'>
					<optgroup>
					<option value=<?php echo $size;?> selected='selected'><?php echo $size;?></option>
					<option value='35'>35</option>
					<option value='36'>36</option>
					<option value='37'>37</option>
					<option value='38'>38</option>
					<option value='39'>39</option>
					</optgroup>
					</select></td>
					<?php echo "<input type='hidden' id='key' name='key' value=$key>" ?>
	</tr>
	<tr>
	<td><input type='submit' class='button' value='SAVE'></td>
	</tr>
	<tr>
	</tr>
	</form>
	</table>
    </div>
	</div>
	<footer>
	<ul>
		<li><a href="AboutUs.html">ABOUT US</a></li>
		<li><a href="ContactUs.html">CONTACT US</a></li>
		<li><a href="LocateUs.html">LOCATE US</a></li>
	</ul>
	</footer>
</div>
</body>