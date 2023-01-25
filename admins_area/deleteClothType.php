<?php 
if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{
	include_once("../includes/PhpDBConnect.php"); 
	if(isset($_GET['deleteClothType'])){
		$cloth_type_id = $_GET['deleteClothType'];
	$delete_cloth_type = "DELETE FROM clothtypes WHERE clothtype_id = '$cloth_type_id'";
	$run_delete_cloth_type =mysqli_query($connection,$delete_cloth_type);
		if($run_delete_cloth_type){
			echo "<script> alert('One Cloths Type has been Deleted..!!') </script>";
			 echo "<script>window.open('index.php?viewCloths','_self') </script>";
		}
	}
?>
<?php } ?>