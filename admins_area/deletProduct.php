<?php 
if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{ 
		 include_once("../includes/PhpDBConnect.php"); 
	if(isset($_GET['deletProduct'])){
		$delete_id = $_GET['deletProduct'];
	$delete_products ="DELETE FROM products WHERE products_id='$delete_id'";
		$run_delete_product =mysqli_query($connection,$delete_products);
		if($run_delete_product){
		echo "<script> alert('One Product has been Deleted..!!') </script>";
	echo "<script>window.open('index.php?viewProducts','_self') </script>";
		}
	}
?>
<?php } ?>