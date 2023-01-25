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
	td {padding: 5px;}
	tr, td {
    border-right: 2px solid #60229d;
    border-top: 2px solid #60229d;
   
}
	</style>
</head>
<body>	
	<main>		
		<div class="Acts_cloth">			
			<table>
				<tr>
					<th>Cloth Type Id</th>
					<th>Cloth Type Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr>
				<?php 
				  include_once("../includes/PhpDBConnect.php"); 
				   $get_clothtypes = "SELECT * FROM clothtypes";
			$run_clothtypes = mysqli_query($connection, $get_clothtypes);
				   while($row_clothtype=mysqli_fetch_array($run_clothtypes)){
				   	   $cloth_type_id = $row_clothtype['clothtype_id'];
				   	   $cloth_type_name = $row_clothtype['cloth_type'];	  
				?>
				</tr>
				<tr>
					<td><?php echo $cloth_type_id;?></td>
					<td><?php echo $cloth_type_name;?></td>
					<td><a href="index.php?editClothType=<?php echo $cloth_type_id?>">Edit</a></td>
					<td><a href="deleteClothType.php?deleteClothType=<?php echo $cloth_type_id?>">Delete</a></td>
				</tr>
			<?php  } ?>
			</table>
		</div>	
	</main>
</body>
</html>
<?php } ?>
