<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Season</title>	
	<style>
		form{margin: 3%;	}
		label{margin: 0 15px 0 0;font-weight: bold;
			font-size: 16px;		}
		input[type="text"]{
			margin: 7px;
			font-weight: bold;
			font-size: 14px;
		}
		input[type="submit"]{ padding: 5px; border-radius: 5px; }
		h2{color: slategrey;}
	</style>
</head>
<body>	
		<h2>Insert New Season Name</h2>
	<form action="" method="POST">			
		<div class="season_wrapper">
			<label>Season Name<b> : </b> </label>
			<input type="text" name="seasons_name" placeholder="New Season Name..">
			<br>
			<input type="submit" name="addNewSeasonName" value="Insert Season ">
			<br>
		</div>
	</form>
	<?php 
	   include_once("../includes/PhpDBConnect.php"); 
		if(isset($_POST['addNewSeasonName'])){
			$season_title=$_POST['seasons_name'];
$insert_new_season="INSERT INTO season (season_name) VALUES ('$season_title')";
			$run_new_season=mysqli_query($connection,$insert_new_season);
			if($run_new_season){
echo "<script> alert('New Season Name has been Inserted..! ') </script>";
			}
		}
	?>
</body>
</html>