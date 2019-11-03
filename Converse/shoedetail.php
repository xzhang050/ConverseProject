<!DOCTYPE html>
<html lang="en">
<head>
<title>Converse Online Shop</title>
	<script type="text/javascript">
	function changeImage(newSource)
{
	document.getElementById("large_pic").src = newSource;
}
	</script>
	<link rel="stylesheet" type="text/css" href="Template.css" />
</head>
<?php
    $ProductID = $_GET["ID"];
    $servername = "localhost";
	$username = "f31ee";
	$password = "f31ee";
	$dbname = "f31ee";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
				}
    $sql = "SELECT * FROM ShoeInfo WHERE ProductID = ".$ProductID;
    $result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$name = $row['ProductName'];
	$price = $row['Price'];
	$image1 = $row['ImgAddr']."_1.jpg";
	$image2 = $row['ImgAddr']."_2.jpg";
	$image3 = $row['ImgAddr']."_3.jpg";
	$description = $row['Description'];

?>
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
	<div>
	<table>
	<form id="addToCart" action="./script/addToCart.php" method="post">
	<tr>
	<?php
	echo "<td colspan=3 rowspan=4><img src=$image1 width='500px' height='360px' id='large_pic'></td>";
	echo "<td id='shoeName'><u>$name</u>";
	echo "<input type='hidden' id='ProductId' name='ProductId' value=$ProductID>";
	?>
	</tr>
	<tr>
	<?php
	echo "<td id='discription'>$description</td>";
	?>
	</tr>
	<tr>
	<?php
	echo "<td>Price:  SGD <b>$price</b>";
	?>
		<br>
		<br>Size:  <select id="Size" name="Size">
		<optgroup>
		<?php include "./script/Database.php" ?>
		<?php
		    $sql = "SELECT * FROM Inventory WHERE ProductID = ".$ProductID;
		    $result = mysqli_query($conn, $sql);
	        $row = mysqli_fetch_assoc($result);
	        $key_1 = 35;
	        foreach($row as $key=>$value)
	        {
	            if ($key!="ProductID")
	            {
                if ($value!=0)
                {
                    echo "<option value='$key_1'>$key_1</option>";
                }
                $key_1 = $key_1 + 1;
                }

	        }
	        ?>
					</optgroup>  
					</select></td>
	</tr>
	<tr>
	<td><input class="button" type="submit" value="ADD TO CART" ONCLICK="alert('Put in cart successfully!');"></td>
	</tr>
	<tr>
		<td><img src=<?php echo $image1;?> height='50px' onmouseover=<?php echo "changeImage('$image1');";?>></td>
		<td><img src=<?php echo $image2;?> height='50px' onmouseover=<?php echo "changeImage('$image2');";?>></td>
		<td><img src=<?php echo $image3;?> height='50px' onmouseover=<?php echo "changeImage('$image3');";?>></td>
	</tr>
	</form>
	</table>

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