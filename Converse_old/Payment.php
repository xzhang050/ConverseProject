<!DOCTYPE html>
<html lang="en">
<head>
<title>Converse Online Shop</title>
<link rel="stylesheet" type="text/css" href="Template.css" />
<style>
.payment
{
    margin-left: 30px;
}
.container1{background-image: url(./img/cart_background.jpg);
		             background-repeat: no-repeat;
		             background-size: 100% 100%;}
.container2 {
            background-color: rgba(255, 255, 255, 0.8);
            height: 100%;
        }
</style>
</head>
<body>
<div id="wrapper">
	<header>
		<img src="img/converse_logo.jpg" height="85px">
	</header>
	<nav>
		<ul>
			<li><a href="cart.php">CART</a></li>
			<li><a href="index.html">HOME</a></li>
		</ul>
	</nav>
	<div class="container1">
	<div class="container2">
	<div class="payment">
	<h1>PAYMENT PAGE</h1>
		<p>Kindly fill up the form below to confirm your order</p>
		<form action="./script/SubmitOrder.php" method="post" id=PaymentForm>
			<label>     Name:           </label>
			<input type="text" name="name" id="name" required onchange="validateName()">
			<br><br>
			
			<label>     E-mail:         </label>
			<input type="text" name="email" id="email" required onchange="validateEmail()">
			<br><br>
			
			<label>		Mobile Number:	</label>
			<input type="text" name="mobilenum" id="mobilenum" required onchange="validateMobileNum()">
			<br><br>
			
			<label>		Address:</label>
			<textarea name="address" id="address" rows="9" cols="50" required onblur="validateAddress()"></textarea>
			<br><br>
            
			<label>		Delivery Method:</label><br>
			<input type="radio" name="delivery" value="standard">Standard Delivery<br>
			<input type="radio" name="delivery" value="express">Express Delivery<br>
			<br>
			
			<p>Key in your 12-digit card details. Omit all dashes. </p>
			<label>		Payment Details:</label>
			<input type="text" name="cardnum" id="cardnum" required onchange="validateCardNum()">
			<br><br>
			
			<input type="submit" id="mySubmit" value="Confirm" class="button" required>
			<br><br>
		</form>
		
	</div>
	<footer>
	<ul>
		<li><a href="AboutUs.html">ABOUT US</a></li>
		<li><a href="ContactUs.html">CONTACT US</a></li>
		<li><a href="LocateUs.html">LOCATE US</a></li>
	</ul>
	</footer>
		</div>
	</div>
</div>
</body>