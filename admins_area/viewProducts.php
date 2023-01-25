<?php 
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{
?>

<style>
	.p_val{
		padding: 5px;
		align-self: center;
	}
	table{
		border: 2px solid #60229d;
	    text-align: center;
	    width: -webkit-fill-available;
	}
	th{
		border-bottom: 2px ridge;
		padding: 5px;
	}
	tr, td {
    border-right: 2px solid #60229d;
    border-top: 2px solid #60229d;
   
}
</style>
<main>
	<table>
<div class="view_wrapper">	
		<tr>
			<td colspan="8" style="border: 2px solid #60229d;"><h2>view All Products</h2></td>
		</tr>
			<tr>
				<th>S. No.</th>
				<th>Title</th>
				<th>Price</th>
				<th>Image</th>
				<th>Total Soled</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>	
		
<?php 
	include_once("../includes/PhpDBConnect.php"); 
	$get_prod = "SELECT * FROM products";
	$run_prod =mysqli_query($connection,$get_prod);
	$i=0;
	while($row_prod=mysqli_fetch_array($run_prod)){
	 $product_id=$row_prod['products_id'];
	 $product_title=$row_prod['products_title'];
	 $product_img1=$row_prod['product_img1'];
	 $product_price=$row_prod['product_price'];
	 $product_status=$row_prod['product_status'];
	      		  $i++;
?>
	<tr>
		<td class="p_val"><?php echo $i; ?></td>
		<td class="p_val"><?php echo $product_title; ?></td>
		<td class="p_val"><?php echo $product_price; ?></td>
	    <td class="p_val">
			 <img src="./products_images/<?php echo $product_img1; ?>" alt="prductImage" width="50" height="50">
		 </td>
		<td class="p_val">
					
		<?php 
//Count totale sold products 
	$get_sold="SELECT * FROM pending_order WHERE product_id='$product_id'";
		$run_sold=mysqli_query($connection,$get_sold);
		$count_items=mysqli_num_rows($run_sold);
		echo $count_items;
		?>				
		</td>
		<td class="p_val"><?php echo $product_status; ?></td>
		<td class="p_val">
		 <a href="index.php?editProduct=<?php echo $product_id; ?>">Edit</a>
		</td>
		<td class="p_val">
			<a href="deletProduct.php?deletProduct=<?php echo $product_id; ?>">Delete</a>
		</td>
	</tr>
		<?php } ?>		<!-- while closed -->
</div>
</table>
</main>
<?php } ?>