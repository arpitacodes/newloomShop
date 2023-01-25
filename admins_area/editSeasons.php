<?php 		 
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{
include_once("../includes/PhpDBConnect.php"); 
	if(isset($_GET['editSeasons'])){
		$seasons_id = $_GET['editSeasons'];
	$edit_season = "SELECT * FROM season WHERE season_id = '$seasons_id'";
		$run_edit_season = mysqli_query($connection, $edit_season);
		$row_edit_season = mysqli_fetch_array($run_edit_season);
		$season_id = $row_edit_season['season_id'];
		$seasonName = $row_edit_season['season_name'];	}		
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
			font-size: 16px;		}
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
			<label>Edit Season Name<b> : </b> </label>
<input type="text" name="seasons_name" value="<?php echo $seasonName; ?>" />
	<br>
		<input type="submit" name="editSeasonsBtn" value="Edit Season" />
			<br>
		</div>
	</form>
	</center>
</body>
</html>
<?php 
if(isset($_POST['editSeasonsBtn'])){
	$season_Name = $_POST['seasons_name'];		
		$update_season_name = "UPDATE season SET season_name='$season_Name' WHERE  season_id='$season_id'";
		$run_season= mysqli_query($connection,$update_season_name);
		if($run_season){
	echo "<script> alert('Season Name has been updated..! ') </script>";
	echo "<script> window.open('index.php?viewSeasons', '_self') </script>";
		}
	}
	
?> 
<?php } ?>