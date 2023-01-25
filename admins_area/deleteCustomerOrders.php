<?php 
if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{
 include_once("../includes/PhpDBConnect.php"); 
	if(isset($_GET['deleteCustomerOrders'])){
		$delOrder_id = $_GET['deleteCustomerOrders'];
	$delete_order = "DELETE FROM pending_order WHERE pending_order_id  = '$delOrder_id'";
		$run_delOrder =mysqli_query($connection,$delete_order);
		if($run_delOrder){
			echo "<script> alert('Order has been Deleted..!!') </script>";
			 echo "<script>window.open('index.php?viewOrders','_self') </script>";
		}
	}
?>
<?php } ?>