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
	table{
		border: 2px solid #60229d;
	    text-align: center;
	    width: -webkit-fill-available;
	}
	th{
		border-bottom: 2px ridge;
		padding: 5px;
	}
	td {		padding: 5px;}
	tr, td {
    border-right: 2px solid #60229d;
    border-top: 2px solid #60229d;
  }
	</style>
</head>
<body>	
	<main>
		<div class="Acts_seasons">
			<table>
				<tr>
					<td colspan="7" style="border: 2px solid #60229d;"><h2>viwe All Seasons</h2></td>
				</tr>
				<tr>
					<th>Season Id</th>
					<th>Season Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr>
				<?php 
				   include_once("../includes/PhpDBConnect.php"); 
				   $get_seasons = "SELECT * FROM season";
				   $run_seasons = mysqli_query($connection, $get_seasons);
				   while($row_seasons=mysqli_fetch_array($run_seasons)){
				   	   $seasons_id = $row_seasons['season_id'];
				   	   $seasons_name = $row_seasons['season_name'];		
				?>
				</tr>
				<tr>
					<td><?php echo $seasons_id; ?></td>
					<td><?php echo $seasons_name; ?></td>
<td><a href="index.php?editSeasons=<?php echo $seasons_id; ?>">Edit</a></td>
<td><a href="deleteSeasons.php?deleteSeasons=<?php echo $seasons_id; ?>">Delete</a></td>
				</tr>
			<?php  } ?>
			</table>
		</div>	
	</main>
</body>
</html>
<?php } ?>
