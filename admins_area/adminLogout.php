<?php 
	
	@session_start();
	@session_destroy();

	echo "<script>window.open('AdminLogin.php?adminLogout=You are successfully logged out, Come back soon!','_self')</script>";


?>