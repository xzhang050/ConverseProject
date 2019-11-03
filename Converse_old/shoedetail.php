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
		nav li a{
			display:block;
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
			display: inline-block;
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
		.container1{background-image: url(./img/index_background.jpg);
		             background-repeat: no-repeat;
		             background-size: 100% 100%;}
		.container2 {
            background-color: rgba(255, 255, 255, 0.8);
            height: 100%;
        }
	</style>
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
					<option value="35">35</option>  
					<option value="36">36</option>
					<option value="37">37</option>  
					<option value="38">38</option>  
					<option value="39">39</option>  
					<option value="40">40</option>  
					<option value="41">41</option>  
					<option value="42">42</option>  					
					</optgroup>  
					</select></td>
	</tr>
	<tr>
	<td><input class="button" type="submit" value="ADD TO CART"></td>
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