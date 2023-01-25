
<?php 
	include_once("../includes/PhpDBConnect.php");
	
	//to get the customer ID

	$mail = $_SESSION['customer_email'];

	$get_mail= "SELECT * FROM customers WHERE customer_email='$mail'";

	$run_mail=mysqli_query($connection, $get_mail);

	$row_mail =mysqli_fetch_array($run_mail);

	$customer_id = $row_mail['customer_id'];
?>

<table width="700" align="center" style="margin-top:2%; width: auto; "> 
	<div class="viewOrdres"><h3>View Your Orders</h3></div>

	<tr >
		<th>Order No.&nbsp;</th>
		<th>Due Amount&nbsp;</th>
		<th>Invoic No.&nbsp;</th>
		<th>Total Products&nbsp;</th>
		<th>Order Date&nbsp;</th>
		<th>Paid/Unpaid&nbsp;</th>
		<th>Status</th>
	</tr>
 
 <!--  -->
	
<?php 
	
		$i=0;
	$get_orders = "SELECT * FROM customer_orders WHERE customer_id = '$customer_id'";

	$run_orders = mysqli_query($connection,$get_orders);

	while($row_orders=mysqli_fetch_array($run_orders)){

		$order_id = $row_orders['order_id'];
		$due_amount = $row_orders['due_amount'];
		$invoice_no = $row_orders['invoice_no'];
		$total_products = $row_orders['total_products'];
		$order_date = $row_orders['order_date'];
		$order_status = $row_orders['order_status'];
			$i++;

			if($order_status=='Pending'){ $order_status="Unpaid"; }
			else { $order_status ="Paid"; }

	
		echo "

			<tr align='center' >
				<td>$i</td>
				<td>$due_amount </td>
				<td>$invoice_no</td>
				<td>$total_products</td>
				<td>$order_date</td>
				<td>$order_status</td>

				<td>
					<?php if($order_status=='Paid'){
				 		'Confirmed'
				}
				else
					<a href='confirmPayment.php?order_id=$order_id'>Confirm if Paid</a>
				 					
				</td>

			</tr>

		";

	}


?>

 </table>

 <style>
 	.viewOrdres {
	    text-align: center;
	    padding: 1em;
	    color: slategrey;
	}		
 </style>
 
