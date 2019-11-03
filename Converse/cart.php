<!DOCTYPE html>
<html lang="en">
<head>
<title>Converse Online Shop</title>
	<script type="text/javascript" src="./script/cart.js">
	</script>
	<link rel="stylesheet" type="text/css" href="Template.css" />
	<style>
		 .container1{background-image: url(./img/cart_background.jpg);
		             background-repeat: no-repeat;
		             background-size: 100% 100%;}
		 .container2 {
            background-color: rgba(255, 255, 255, 0.8);
            height: 100%;
        }
.table1 {
margin: 40px;
margin-bottom: 15px;
padding: 10px;
margin-top: 15px;
margin-right: 15px;
border: 1px solid #333;
border-radius:1em;
overflow:hidden; 
width: 300px;
}
.table2{
margin: 15px;
margin-bottom: 15px;
margin-left: 10px;
padding: 10px;
margin-top: 15px;
border: 1px solid #333;
border-radius:1em;
overflow:hidden; 
width: 600px;
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
	<div class="container1">
	<div class="container2">
	<table style="width: 1000px;">
	<tr>
	<td>
	<div>
		<?php
	    session_start();
		$servername = "localhost";
	    $username = "f31ee";
	    $password = "f31ee";
	    $dbname = "f31ee";
	    $conn = mysqli_connect($servername, $username, $password, $dbname);
	    if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
				}
		if (sizeof($_SESSION['cart'])==0)
		{echo "<table width='450px' style='margin-left: 40px;'><tr><td><h2>Your shopping cart is empty now.</h2></td></tr></table>";
		}
	foreach($_SESSION['cart'] as $key1=>$value1)
	{
		$order = $_SESSION['cart'][$key1];
		$productId = $order[0];
		$size = $order[1];
        $sql = "SELECT * FROM ShoeInfo WHERE ProductID = ".$productId;
        $result = mysqli_query($conn, $sql);
	    $row = mysqli_fetch_assoc($result);
	    $name = $row['ProductName'];
	    $price = $row['Price'];
	    $image = $row['ImgAddr']."_1.jpg";
		echo "<table class='table1'>";
		echo "<tr><td colspan=2><b>$name</b></td></tr>";
		echo "<tr>";
		echo "<td rowspan=4><img src=$image height='70px'></td>";
		echo "</tr>";
		echo "  <tr><td> Price: SGD <b><large>".$price."</large></b></td></tr>";
		echo "	<tr><td> Size: ".$size."</td></tr>";
		echo "	<tr><td><a href='./edit.php?key={$key1}' style='text-decoration: none;
		                                                                 font: bold 13px arial, helvetica, sans-serif;
		                                                                 color: #555;'>EDIT</a>";
		echo " <a href='./script/remove.php?key={$key1}' style='text-decoration: none;
		                                                                 font: bold 13px arial, helvetica, sans-serif;
		                                                                 color: #555;'>REMOVE</a></td></tr>";
		echo "</table>";
	}
	header('location:' . $_SERVER['PHP_SELF'].'?'.SID);
         ?>
         </div>
         </td>
         <td>
         <div>

	    	        <?php
	    	    if (sizeof($_SESSION['cart'])!=0)
	    	    {
	            $total = 0;
                if(!isset($_SESSION['cart']))
	                {
		                $_SESSION['cart'] = array();
		            }

		        echo "<table class='table2'><tr><td><h2>ORDER SUMMARY</h2></td></tr>";
	            foreach($_SESSION['cart'] as $key1=>$value1)
	                {
                        $order = $_SESSION['cart'][$key1];
		                $productId = $order[0];
		                $size = $order[1];
                        $sql = "SELECT * FROM ShoeInfo WHERE ProductID = ".$productId;
                        $result = mysqli_query($conn, $sql);
	                    $row = mysqli_fetch_assoc($result);
	                    $name = $row['ProductName'];
	                    $price = $row['Price'];
		                $total = $total + $price;
		                echo "<tr><td>".$name."</td><td>..........</td><td>".number_format($price,2)."</td></tr>";
		                echo "<tr><td>".$size."</td></tr>";
	                }
	            echo "<tr><td><b><large>Total Price: </td><td></td><td><b><large>".number_format($total,2)."</b></large></td></tr>";
	            echo"<tr><td colspan=3><form id='checkout' action='Payment.php'><input type='submit' class='button' value='Check Out'></td></tr></table>";
	            }
	        ?>
	    	</div>
	    	        </td>
	        </tr>
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