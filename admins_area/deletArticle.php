<?php 
if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{ 
		 include_once("../includes/PhpDBConnect.php"); 
	if(isset($_GET['deletArticle'])){
		$delete_id = $_GET['deletArticle'];
	$delete_Article ="DELETE FROM articles WHERE article_id='$delete_id'";
		$run_delete_Article =mysqli_query($connection,$delete_Article);

		if($run_delete_Article){
			echo "<script> alert('One Article has been Deleted..!!') </script>";

			 echo "<script>window.open('index.php?viewArticle','_self') </script>";
		}
	}

?>
<?php } ?>