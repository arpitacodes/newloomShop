
<style>
	.chenge_pass_wrapepr{margin: 1.5rem;}
	.cust_pass{		display: flex;	}

	label{
		width: 35%;
		margin: 3px;
	}
	input[type="password"]{
		width: 25%;
		margin: 3px;
		padding: 2px;	
		border-radius: 7px;
	}
	input[type="submit"]{width: 22%;		margin-top: 10px;	border-radius: 3px;}
h1{font-size: 27px;}

@media screen and (max-width: 60em){ 
	h1{font-size: 18px;}

	.cust_pass{display: block;}

	input[type=password]{width: 100%;}

	.changeBtn {    text-align: -webkit-center;		}

	input[type="submit"] {    width: 47%;	}
}

.changePass{
	    text-align: center;
	    padding: 1em;
	  }
</style>

<div class="chenge_pass_wrapepr">
	
		<div class="changePass"><h1>Change your Password</h1></div>
	<form action="" method="POST">

		
		 
		  <div class="cust_pass" style="margin-top:15px;">
              <label><b>Enter Current Password :</b></label>
              <input type="password" name="current_password"/>           
          </div> 

		  <div class="cust_pass">
              <label><b>New Password :</b></label>
              <input type="password" name="new_password"/>           
          </div> 

          <div class="cust_pass">
              <label><b>Confirm Password :</b></label>
              <input type="password" name="confirm_password" />
          </div>

          <div class="changeBtn">
          	<input type="submit" name="change_pass" value="change Password">
          </div>


	</form>
	
</div>

<?php 
	@session_start();
	include_once("../includes/PhpDBConnect.php");

	$email = $_SESSION['customer_email'];

	if (isset($_POST['change_pass'])) {
		
		$current_pass = $_POST['current_password'];
		$new_pass = $_POST['new_password'];
		$confirm_pass = $_POST['confirm_password'];

	$get_change_pass = "SELECT * FROM customers WHERE customer_password='$current_pass'";
	$run_change_pass =mysqli_query($connection,$get_change_pass);

	if(mysqli_num_rows($run_change_pass)==0){
		echo "<script>alert('Current Password is not valid, try again!!')</script>";
		exit();
	}

	if($new_pass != $confirm_pass ){
		echo "<script>alert('Password did not match!!')</script>";
		exit();
	}
	else
	{
		$update_change_pass = "UPDATE customers SET  customer_password='$new_pass' WHERE customer_email ='$email'";

		$run_update = mysqli_query($connection,$update_change_pass);

		echo "<script>alert('Your Password has been Succsefully changed!!')</script>";
		echo "<script>window.open('myAccount.php','_self')</script>";
	}

	}
?>