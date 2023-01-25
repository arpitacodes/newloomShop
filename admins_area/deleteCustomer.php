<?php 
if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{
 include_once("../includes/PhpDBConnect.php"); 
	if(isset($_GET['deleteCustomer'])){
		$customer_id = $_GET['deleteCustomer'];
$get_customer = "DELETE FROM customers WHERE customer_id = '$customer_id'";
		$run_customer =mysqli_query($connection,$get_customer);
		if($run_customer){
		echo "<script> alert('Customer has been Deleted..!!') </script>";
	echo "<script>window.open('index.php?viewCustomer','_self') </script>";
		}
	}
?>
<?php } ?>	