<?php 
	@session_start();
	include_once("../includes/PhpDBConnect.php");

	if(isset($_GET['order_id'])){
		$order_id = $_GET['order_id'];

	}
?>
<main>
<div class="confirm_pay">
<form action="confirmPayment.php?update_id=<?php echo $order_id; ?>" method="POST" class="confirm_form">
			<center ><h3 style="margin-top: 5%;">Confirm Your Payment</h3></center>

			<div class="confirm_field">

			<div class="invoice_wrapper" >
				<div class="label_td"><label>Invoice Number <b>: </b></label></div>
				<div class="input_div">
					<input type="text" name="invoic_no" placeholder="Invoice No."/>
				</div>
			</div>

			<div class="amount_wrapper">
				<div class="label_td"><label>Amount Sent <b>: </b></label></div>
				<div class="input_div">
					<input type="text" name="amount" placeholder="Amount"/>
				</div>
			</div>

			<div class="paywith_wrapper">
				<div class="label_td"><label>Select Payment Mode <b>: </b></label></div>
				
				<div class="select_div">
					<select name="paywith">
						<option>Select Pay Mode</option>
						<option>PayPal</option>
						<option>Google Pay</option>
						<option>PhonePe</option>
						<option>Paytm</option>
					</select>
				</div>
			</div>

			<div class="Transcation_wrapper">
				<div class="label_td"><label>Transaction/Refference ID <b>: </b></label></div>
				<div class="input_div">
					<input type="text" name="trans_id" placeholder="Transaction ID"/>
				</div>
			</div>

			<div class="mobile_pay">
				<div class="label_td"><label>PhonePe/Paytm/GPay.. Code <b>: </b></label></div>
				<div class="input_div">
					<input type="text" name="mobile_code" placeholder="Code"/>
				</div>
			</div>

			<div class="pay_date">
				<div class="label_td"><label>Payment Date <b>: </b></label></div>
				<div class="input_div">
					<input type="date" name="pay_date" style="padding:5px 30px;" />
				</div>
			</div>


			</div>
			
		<center>
			<div class="confirmBtn">
				<input type="submit" name="confirmBTN" value="Confirm Payment" >	
			</div>
		</center>
</form>
	
	</div>
</main>

<?php 
	
	if(isset($_POST['confirmBTN'])){

		$update_order_id =$_GET['update_id'];
				
		$invoice_no=$_POST['invoic_no'];

		$amount= $_POST['amount'];

		$paywith= $_POST['paywith'];

		$transcation_id = $_POST['trans_id'];

		$payment_code = $_POST['mobile_code'];

		$pay_date = $_POST['pay_date'];
		
		$complete = 'Complete';

$insert_payment = "INSERT INTO customer_orders_payment (invoice_no, amount, payment_with, transaction_ref_id, mobile_code, payment_date) VALUES ('$invoice_no', '$amount', '$paywith', '$transcation_id', '$payment_code', now())";

$run_payment = mysqli_query($connection, $insert_payment);


$update_order = "UPDATE customer_orders SET order_status ='$complete' WHERE order_id='$update_order_id'";

$run_update_order = mysqli_query($connection, $update_order);

$update_Pendding_order = "UPDATE pending_order SET order_status='$complete' WHERE order_id = '$update_order_id'";

$run_update_Pendding_order = mysqli_query($connection, $update_Pendding_order);


		if($run_payment){
			echo "<h2 style='text-align:center; color: slategray;'>Payment received, your order will be completed within 24 horus</h2>";
			}			
	}
?>

<style>
	.confirm_field{
		padding: 20px;
		margin-left: 30%;
	}
.input_div{
	margin: 5px;
	margin-left: 17px;
}
.input_div input{padding: 5px;}
.select_div {margin-left: 15px;}
.select_div select{padding: 5px 27px;}

.invoice_wrapper {display: flex; gap: 10px;}
.amount_wrapper{display: flex; gap: 10px;} 
.paywith_wrapper{display: flex; gap: 10px;}
.Transcation_wrapper{display: flex; gap: 10px;} 
.mobile_pay{display: flex; gap: 10px;}
.pay_date{display: flex; gap: 10px;}

.label_td {
    width: 25%;
    text-align: end;
     align-self: center;

    }

.confirmBtn { margin-bottom: 5%;}
</style>