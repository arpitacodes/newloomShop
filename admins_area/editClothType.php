<?php 
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{
	 include_once("../includes/PhpDBConnect.php"); 
	if(isset($_GET['editClothType'])){
		$cloth_type_id = $_GET['editClothType'];
		$edit_cloth = "SELECT * FROM clothtypes WHERE clothtype_id='$cloth_type_id'";
		$run_edit_cloth = mysqli_query($connection, $edit_cloth);
		$row_edit_cloth = mysqli_fetch_array($run_edit_cloth);
		$editCloth_type_id=$row_edit_cloth['clothtype_id'];
		$cloth_type_name= $row_edit_cloth['cloth_type'];	}		
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		form{margin: 10%;}
		label{margin: 0 15px 0 0;font-weight: bold;
			font-size: 16px;}
		input[type="text"]{
			margin: 10px;
			font-weight: bold;
			font-size: 16px;
		}
		input[type="submit"]{ padding: 5px; border-radius: 5px; }
	</style>

</head>
<body>
	<center>
	<form action="" method="POST">
			
		<div class="cloth_wrapper">
			<label>Edit Cloth Type Name<b> : </b> </label>
<input type="text" name="Cloths_type" value="<?php echo $cloth_type_name; ?>" />
<br>
	<input type="submit" name="editCloth_types" value="Edit Cloths Type " />
			<br>
		</div>
	</form>
	</center>
</body>
</html>
<?php 
if(isset($_POST['editCloth_types'])){
	$clothName = $_POST['Cloths_type'];		
		$update_cloth_name = "UPDATE clothtypes SET cloth_type='$clothName' WHERE  clothtype_id='$editCloth_type_id'";
		$run_cloth= mysqli_query($connection,$update_cloth_name);
		if($update_cloth_name){
			echo "<script> alert('Cloth Types Name has been updated..! ') </script>";
			echo "<script> window.open('index.php?viewCloths', '_self') </script>";
		}
}		
?> 
<?php } ?>