<?php 
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		form{
			margin: 4%;
		}
		label{margin: 0 15px 0 0;font-weight: bold;
			font-size: 14px;		}
		input[type="text"]{
			margin: 10px;
			font-weight: bold;
			font-size: 14px;
		}
		input[type="submit"]{ padding: 5px; border-radius: 5px; }
		h2{color: slategrey;}
	</style>

</head>
<body>
	
		<h2>Inser New Cloth Type Name </h2>
	<form action="" method="POST">
			
		<div class="cloth_wrapper">
			<label>Cloth Type Name<b> : </b> </label>
			<input type="text" name="Cloths_type" placeholder="New Cloth Type.."><br>
			<input type="submit" name="addNewCloth_types" value="Insert Cloths Type ">
			<br>

		</div>
	</form>
	<?php 
		include("includes/adminDBconnect.php");

		if(isset($_POST['addNewCloth_types'])){

			$clothtype_title=$_POST['Cloths_type'];

			$insert_new_cloth="INSERT INTO clothtypes (cloth_type) VALUES ('$clothtype_title')";
			$run_new_cloth=mysqli_query($connection,$insert_new_cloth);

			if($run_new_cloth){
				echo "<script> alert('New Cloth Types Name has been Inserted..! ') </script>";
			}
		}
	?>
</body>
</html>
<?php } ?>