<!DOCTYPE html>
<html lang="en">
<head>
<title>Converse Online Shop</title>
	<script type="text/javascript" src="./script/cart.js">
	</script>
	<style>
		body {font-family:Verdana, Arial, sans-serif;
              background-color: #ffffff;
}
		#wrapper { background-color: #ffffff;
				   width: 80%;
		           margin: auto;
                   min-width:850px;
		           box-shadow: 10px 10px 5px #888888;
		           }
		 .container1{background-image: url(./img/cart_background.jpg);
		             background-repeat: no-repeat;
		             background-size: 100% 100%;}
		 .container2 {
            background-color: rgba(255, 255, 255, 0.8);
            height: 100%;
        }
		header{ background-color: #000000;
                color: #FFFFFF;
                font-size: 150%;
                padding-left:35%;

}
		nav{background-color: #000000;}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
}
		nav li { float: right;
				 display: inline-block;}
		nav li a{display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;}
		footer {align: center;}
		footer li {
			float: center;
			display:inline-block;
}

		footer li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 200px;
			text-decoration: none;
}

		li a:hover {
			background-color: #111;
}
	    table{
			padding-top: 50px;
			padding-bottom: 50px;}
		a:hover {
			opacity:0.6;
}
a{text-decoration: none;}
footer{background-color: black;}
	    img:hover {
			opacity:0.6;
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
		.button::-moz-focus-inner{
  border: 0;
  padding: 0;
}

.button{
  display: inline-block;
  *display: inline;
  zoom: 1;
  padding: 6px 20px;
  margin: 0;
  cursor: pointer;
  border: 1px solid #bbb;
  overflow: visible;
  font: bold 13px arial, helvetica, sans-serif;
  text-decoration: none;
  white-space: nowrap;
  color: #555;

  background-color: #ddd;
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,1)), to(rgba(255,255,255,0)));
  background-image: -webkit-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
  background-image: -moz-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
  background-image: -ms-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
  background-image: -o-linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));
  background-image: linear-gradient(top, rgba(255,255,255,1), rgba(255,255,255,0));

  -webkit-transition: background-color .2s ease-out;
  -moz-transition: background-color .2s ease-out;
  -ms-transition: background-color .2s ease-out;
  -o-transition: background-color .2s ease-out;
  transition: background-color .2s ease-out;
  background-clip: padding-box; /* Fix bleeding */
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .3), 0 2px 2px -1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .3) inset;
  -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .3), 0 2px 2px -1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .3) inset;
  box-shadow: 0 1px 0 rgba(0, 0, 0, .3), 0 2px 2px -1px rgba(0, 0, 0, .5), 0 1px 0 rgba(255, 255, 255, .3) inset;
  text-shadow: 0 1px 0 rgba(255,255,255, .9);

  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.button:hover{
  background-color: #eee;
  color: #555;
}

.button:active{
  background: #e9e9e9;
  position: relative;
  top: 1px;
  text-shadow: none;
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
}

.button[disabled], .button[disabled]:hover, .button[disabled]:active{
  border-color: #eaeaea;
  background: #fafafa;
  cursor: default;
  position: static;
  color: #999;
  /* Usually, !important should be avoided but here it's really needed :) */
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  text-shadow: none !important;
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
	            echo"<tr><td colspan=3><form id='checkout' action='checkout.php'><input type='submit' class='button' value='Check Out'></td></tr></table>";
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