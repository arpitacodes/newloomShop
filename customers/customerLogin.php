
<?php
    @session_start();
    //include_once("./includes/PhpDBConnect.php");   
   
?>
<div class="login_form">
	<form action="checkout.php " method="POST" class="to_cust_login">
     <h2>Login OR Register</h2><br>
		<label>Enter Your E-mail:</label>
		<input type="e-mail" name="customer_mail" placeholder="Your E-mail" required/><br>
		<label>Enter Your Password: </label>
		<input type="password" name="mail_password" placeholder="Your Password" required /><br>
		<p class="regitretion">
			<a href="checkout.php?custForgetPassword">Forget password?</a>
		</p>
		<input type="submit" name="to_login" value="Login"><br>
	</form>

	<?php 
		if (isset($_GET['custForgetPassword'])) {
			
			echo "

			<div>
				<form action='' method='POST'>
				  <br><b>Enter Your e- mail,
				  We'll send your password on your email </b> <br><br>
				  <input type='e-mail' name='cust_mail' placeholder='Enter Your E-mail' required /><br>
				  <input type='submit' name='forg_pass' value='Send'/><br>
			    </form>
			</div>
			";
		}
if(isset($_POST['forg_pass'])){
	$c_mail =$_POST['cust_mail'];

	$sel_cust= "SELECT * FROM customers WHERE customer_email = '$c_mail'";

	$run_cust = mysqli_query($connection, $sel_cust);

	$ckeck_cust = mysqli_num_rows($run_cust);

	$row_cust= mysqli_fetch_array($run_cust);

	$cust_name = $row_cust['customer_name'];
	$cust_pass = $row_cust['customer_password'];

	if($ckeck_cust == 0){

		echo "<script>alert('This E-mail does not exist. SORRY!!')</script>";
		exit();

	}
	else{
		
		$from = 'admin@sutwala.com';

		$subject = 'Your Password';

		$message = "

			<div>
			 <h3>Dear $cust_name</h3><br>
			 <p>You requested for your password at <b>www.sutwala.com</b></p>
			 <b> Your Password is </b> <span>$cust_pass</span> <br> <br>

			 <h3>Thank You for using our website..</h3><br><br>
			</div> 


		";

		mail($cust_mail, $subject, $message, $from);

		echo "<script>alert('Password was sent on your email, please check your email inbox !')</script>";
		echo "<script>window.open('checkout.php','_self')</script>";


		}


	}


	?>

	<p class="regitretion"><a href="custRegistretion.php">New? Register Here</a></p>
</div>

<style>
	.login_form{
	width: 30%;
    font-size: 18px;
   
	}

	input[type="submit"] {
    width: 25%;
    border-radius: 3px;
    margin: 0 5rem 0rem 5rem;
	}
input[type="submit"]:hover{color: hsl(353, 100%, 78%);}
.regitretion{
	/*text-align: center;*/
	/*margin-left: 4.5rem;*/
    /*margin-top: 10px;*/
    margin-bottom: 10px;
	}

input[type='e-mail'], input[type='password']{
	width: 65%;
	border-radius: 2px;
	}

</style>

<?php

	if(isset($_POST['to_login'])){
		$customer_email = $_POST['customer_mail'];
		$customer_password = $_POST['mail_password'];

$select_customer="SELECT * FROM customers WHERE customer_email='$customer_email' AND customer_password = '$customer_password'";

		$run_customer = mysqli_query($connection, $select_customer);

		$check_customer = mysqli_num_rows($run_customer);

		$get_ip_address = get_client_ip();

		$select_cart = "SELECT * FROM cart WHERE ip_address='$get_ip_address'";

		$run_cart = mysqli_query($connection, $select_cart);

		$ckeck_cart = mysqli_num_rows($run_cart);

		if($check_customer==0){

			echo "<script>alert('Password or Email address is not correct, Try again!!!')</script>";
			exit();
		}
		if($check_customer==1 AND $check_cart==0){
			$_SESSION['customer_email'] = $customer_email;

			echo "<script>window.open('customers/myAccount.php','_self')</script>";
		}
		else{
			$_SESSION['customer_email'] = $customer_email;
			//echo "<script>window.open('paymentOption.php','_self')</script>";
			echo "<script>alert('Yor successfully logged in, you can order now!!')</script>";
			//echo "Yor successfully logged in, you can order now!!";
			include("./paymentOption.php");
		}

		
	}

?>

<!-- 
		if(mysqli_num_rows($run_customer)>0){
			$_SESSION['customer_email']=$customer_email;
			echo "<script>window.open('index.php','_self')</script>";
		}
		else
			echo "<script>alert('Your E-mail or Password incorrect, Try again!!')</script>";


 -->