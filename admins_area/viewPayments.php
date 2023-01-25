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
			<td colspan="8" style="border: 2px solid #60229d;"><h2>All Payments</h2></td>
		</tr>
			<tr>
				<th>Payment No.</th>
				<th>Invoice No.</th>
				<th>Amount Paid</th>
				<th>Payment Method</th>
				<th>Refrence No.</th>
				<th>Code</th>
				<th>Payment Date</th>
				<th>Delete</th>
			</tr>	

<?php 
	 include_once("../includes/PhpDBConnect.php"); 
	$get_payment = "SELECT * FROM payments";
	$run_payment = mysqli_query($connection,$get_payment);
	$i=0;
	while($row_payment = mysqli_fetch_array($run_payment)){
	 $pay_id = $row_payment['payment_id'];	
	 $invoice_no = $row_payment['invoice_no'];
	 $amount = $row_payment['amount'];
	 $payment_mode = $row_payment['payment_mode'];
	 $refNo = $row_payment['refrence_no'];
	 $code = $row_payment['code'];
	 $payment_date = $row_payment['payment_date'];
	      $i++;	
?>		
	<tr>
		<td class="p_val"><?php echo $i; ?></td>
		<td class="p_val">
			<?php echo $invoice_no;		?>
		</td>
		<td class="p_val"><?php echo  $amount; ?></td>
		<td class="p_val"><?php echo  $payment_mode; ?></td>
		<td class="p_val"><?php echo  $refNo; ?></td>		
		<td class="p_val"><?php echo $code; ?></td>
		<td class="p_val"><?php echo $payment_date; ?></td>
		<td class="p_val">
		   <a href="deleteOrders.php?deleteOrders=<?php echo $customer_id; ?>">Delete</a>
		</td>		
	</tr>
		<?php } ?>
		<!-- while closed -->

</div>
</table>
</main>
<?php } ?>


