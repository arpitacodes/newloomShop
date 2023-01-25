<?php
    @session_start();
    include_once("../includes/PhpDBConnect.php");   
   
?>
<link rel="stylesheet" href="./styles/adminLogin.css">

 <div>
	<h2 style="color: #123423; text-align:center; padding: 20px;">
		<?php echo @$_GET['adminLogout']; ?>
	</h2>
</div> 

<div class="row">
    <div class="colm-form">
    <form action="" method="POST" class="form_login">
        <div class="form-container">
            <input type="e-mail" name="admin_mail" placeholder="Email address">
            <input type="password" name="mail_password" placeholder="Password">
            <button class="btn-login" name="to_login">Login</button>
            <a href="AdminLogin.php?adminForgetPasswor">Forgotten password?</a>
        <?php 
				if (isset($_GET['adminForgetPasswor'])) {
					
					echo "					
						<form action='' method='POST'>
						  <br><b style='color: black; line-height:20px;'>Enter Your e- mail,
						  We'll send your password on your email </b> <br><br>
						  <input type='e-mail' name='cust_mail' placeholder='Enter Your E-mail' required /><br>
						  <input type='submit' name='forg_pass' class='send-btn' value='Send'/><br>
					    </form>
				
					";
				}
				if(isset($_POST['forg_pass'])){
					$c_mail =$_POST['cust_mail'];

					$sel_cust= "SELECT * FROM admins_details WHERE admin_email = '$c_mail'";

					$run_cust = mysqli_query($connection, $sel_cust);

					$ckeck_cust = mysqli_num_rows($run_cust);

					$row_cust= mysqli_fetch_array($run_cust);

					$cust_name = $row_cust['admin_fname'];
					$cust_pass = $row_cust['admin_password'];

					if($ckeck_cust == 0){

						echo "<script>alert('This E-mail does not exist. SORRY!!')</script>";
						exit();

					}
					else{
						
						$from = 'soot@sutwala.com';

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
						echo "<script>window.open('AdminLogin.php','_self')</script>";


						}


					}


		?>
		<a href="adminRegistaration.php">Create New</a>
		 
        </div>
    </form>  
    </div>

</div>
<div class="roww">
	
</div>

		<?php

			if(isset($_POST['to_login'])){
				$admin_mail = $_POST['admin_mail'];

				$admin_mail_password = $_POST['mail_password'];

		$select_admin="SELECT * FROM admins_details WHERE admin_email='$admin_mail' AND admin_password = '$admin_mail_password'";

				$run_admin = mysqli_query($connection, $select_admin);

				$check_admin = mysqli_num_rows($run_admin);

				if($check_admin==0){

					echo "<script>alert('Password or Email address is not correct, Try again!!!')</script>";
					exit();
				}
				if($check_admin==1 ){
					$_SESSION['admin_email'] = $admin_mail;
					echo "<script>window.open('index.php?logged_in=You are successfully logged in','_self')</script>";
				}

			}

?>
