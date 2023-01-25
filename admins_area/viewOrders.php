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
			<td colspan="7" style="border: 2px solid #60229d;"><h2>view All Orders</h2></td>
		</tr>
			<tr>
				<th>Order No.</th>
				<th>Customer e-mail</th>
				<th>Invoice No.</th>
				<th>Product ID</th>
				<th>Quantity</th>
				<th>Status</th>
				<th>Delete</th>
			</tr>	

<?php 
	 include_once("../includes/PhpDBConnect.php"); 
	$get_orders = "SELECT * FROM pending_order";
	$run_orders =mysqli_query($connection,$get_orders);
	$i=0;
	while($row_orders=mysqli_fetch_array($run_orders)){
	 $customer_id=$row_orders['customer_id'];	
	 $order_id=$row_orders['pending_order_id'];
	 $invoice_no=$row_orders['invoice_no'];
	 $product_id=$row_orders['product_id'];
	 $product_qut=$row_orders['quantity'];
	 $order_status=$row_orders['order_status'];
	      $i++;	
	  
?>		
	<tr>
		<td class="p_val"><?php echo $i; ?></td>
		<td class="p_val">
			<?php 
	$get_customer= "SELECT * FROM customers WHERE customer_id = '$customer_id'";
				$run_cust = mysqli_query($connection,$get_customer);
				$row_cust= mysqli_fetch_array($run_cust);
				$customer_mail = $row_cust['customer_email'];
				echo $customer_mail;
			?>
		</td>
		<td class="p_val"><?php echo $invoice_no; ?></td>
		<td class="p_val"><?php echo  $product_id; ?></td>
		<td class="p_val"><?php echo  $product_qut; ?></td>		
		<td class="p_val">
		 <?php 
		    if($order_status=='Pending')
		    	{
		    		echo $order_status='Pending';
		    	}
		    else
		    {
		    	echo $order_status='Complete';
		    }

		 ?>		 	
		</td>
		<td class="p_val">
		   <a href="deleteCustomerOrders.php?deleteCustomerOrders=<?php echo $customer_id; ?>">Delete</a>
		</td>		
	</tr>
		<?php } ?>
		<!-- while closed -->
</div>
</table>
</main>
<?php } ?>
