<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payment</title>
	<style>
	.payment_wrapper{
	padding: 20px;
    width: 100%;
    text-align: center;
    /*background: #5f9ea057;*/
    border-radius: 7px;
    font-size: 18px;
	}

	b, a{
		display: inline-block;
	}
	 img:hover{
		box-shadow: 0 5px 4px #123;
		
	}
	input{width: 13rem;}
	    form {text-align: -webkit-center;}
button:hover{ border-bottom: 1px solid var(--cultured); }
</style>
</head>
<body>
	
	 <?php 
 		include("./includes/PhpDBConnect.php");
 		//include("./functions/indexFunction.php"); 

	?>
<div class="payment_wrapper">
	
	<h2>Payment Option for You!!</h2><br>

		 <?php 
			$ip_address = get_client_ip();

			$get_customer = "SELECT * FROM customers WHERE customer_ip_address = '$ip_address' ";

			$run_customer = mysqli_query($connection, $get_customer);

			$customer = mysqli_fetch_array($run_customer);

			$customer_id = $customer['customer_id'];

		?>

	<b>Pay with</b> &nbsp; </b><br>
		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> 
			<input type="hidden" name="cmd" value="_cart"> 
			<input type="hidden" name="business" value="seller@designerfotos.com"> 
			<input type="hidden" name="item_name" value="hat"> 
			<input type="hidden" name="item_number" value="123"> 
			<input type="hidden" name="amount" value="15.00"> 
			<input type="hidden" name="first_name" value="John"> 
			<input type="hidden" name="last_name" value="Doe"> 
			<input type="hidden" name="address1" value="9 Elm Street"> 
			<input type="hidden" name="address2" value="Apt 5"> 
			<input type="hidden" name="city" value="Berwyn"> 
			<input type="hidden" name="state" value="PA"> 
			<input type="hidden" name="zip" value="19312"> 
			<input type="hidden" name="night_phone_a" value="610"> 
			<input type="hidden" name="night_phone_b" value="555"> 
			<input type="hidden" name="night_phone_c" value="1234"> 
			<input type="hidden" name="email" value="jdoe@zyzzyu.com"> 
			<input type="image" name="submit" src="./images/paypal.PNG" alt="PayPal - The safer, easier way to pay online" > 
		</form>

	 &nbsp; <span><b>or <a href= "customerOrder.php?c_id= <?php echo $customer_id;?>">Pay Offline</a></span> </b><br><br>
	<b>If you selected, with offline payment, then please check your email account to get the invoice number!!</b>
	<br>
</div>

</body>
</html>
