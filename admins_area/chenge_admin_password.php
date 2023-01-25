
<link rel="stylesheet" href="./styles/adminRegistaration.css">
<div class="chenge_pass_wrapepr">
			<h1>Change your Password</h1>
	<form action="" method="POST">
			<div class="row">
                <div class="col-10">
                    <label >Current Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="current_password" name="current_password" maxlength="8" required/>
                </div>
            </div>
				 
		  	<div class="row">
                <div class="col-10">
                    <label for="password">Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="password" name="new_password" maxlength="8" required/>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="password">Confirem Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="confirm_password" name="confirm_password" maxlength="8" required/>
                </div>
            </div>

         <div class="row">
                <input type="submit" name="chenge_admin_password" value="Change Password" >              
            </div> 


	</form>
	
</div>

<?php 
	@session_start();
	include_once("../includes/PhpDBConnect.php");

	$email = $_SESSION['admin_email'];

	if (isset($_POST['chenge_admin_password'])) {
		
		$admin_pass = $_POST['current_password'];
		$new_pass = $_POST['new_password'];
		$confirm_pass = $_POST['confirm_password'];

	$get_change_pass = "SELECT * FROM admins_details WHERE admin_password='$admin_pass'";
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
		$update_change_pass = "UPDATE admins_details SET  admin_password='$new_pass' WHERE admin_email ='$email'";

		$run_update = mysqli_query($connection,$update_change_pass);

		echo "<script>alert('Your Password has been Succsefully changed!!')</script>";
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}

	}
?>