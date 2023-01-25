<?php
@session_start();
include("./includes/PhpDBConnect.php");
include("./functions/indexFunction.php"); 

if(isset($_GET['c_id'])){
	$customer_id = $_GET['c_id'];

  $select_customer = "SELECT * FROM customers WHERE customer_id='$customer_id' ";
  $run_customer = mysqli_query($connection, $select_customer);

  $row_customer = mysqli_fetch_array($run_customer);

  $cust_mail = $row_customer['customer_email'];
  $cust_name = $row_customer['customer_name'];

}
		

	$ip_address = get_client_ip();

    (float)$totalprice=0;

    $sel_price = "SELECT * FROM cart WHERE ip_address ='$ip_address'";

    $run_price = mysqli_query($connection,$sel_price);

    $status= 'Pending';

    $invoice_no = mt_rand(1,100000);

    $count_product = mysqli_num_rows($run_price);

    $i= 0; //for send to the customer email account


    while($run_record = mysqli_fetch_array($run_price)){

      $product_id = $run_record['p_id'];

      $prod_price = "SELECT * FROM products WHERE products_id='$product_id'";
      
      $run_product_price = mysqli_query($connection,$prod_price);

      while($row_pro_price=mysqli_fetch_array($run_product_price)){

        $product_name = $row_pro_price['products_title'];

        $product_price=array($row_pro_price['product_price']); 

        $values=array_sum($product_price);

        (float)$totalprice +=  (float)$values;
        //totalPrice
        $i++;

      }
    }

//To Getting Quantity

    $get_cart = "SELECT * FROM cart WHERE ip_address = '$ip_address'";
    
    $run_cart = mysqli_query($connection,$get_cart);

    $get_qty = mysqli_fetch_array($run_cart);

    $qty = $get_qty['quantity'];

    if($qty==0){

    	$qty=1;
    	$sub_total =  (float)$totalprice;

    }
    else{
      
    	$qty = $qty;
    	$sub_total =  (float)$totalprice *  (int)$qty;
    }

     $insert_orders = "INSERT INTO customer_orders(customer_id,due_amount,invoice_no,total_products,order_date,order_status)VALUES('$customer_id','$sub_total','$invoice_no', '$count_product', NOW(), '$status')";

    $run_order = mysqli_query($connection, $insert_orders);

   
    	echo "<script>alert('Order Successfully Submited, Thanks!!')</script>";
    	echo "<script>window.open('./customers/myAccount.php','_self')</script>";

      $insert_to_pending_orders = "INSERT INTO pending_order (customer_id, invoice_no,product_id, quantity, order_status)VALUES('$customer_id','$invoice_no','$product_id', '$qty', '$status')";

      $run_pending_orders =mysqli_query($connection,$insert_to_pending_orders);

    	$emplty_cart = "DELETE FROM cart WHERE ip_address='$ip_address'";

    	$run_empty = mysqli_query($connection, $emplty_cart);


    $from = 'admin@sutwala.com';

    $subject = 'Order Details';

    $message = "

    <div>
      <p> Hello Dear <b>$customer_name</b> <br>
      You have ordered these products on our website sutwala.com, please find your order details below and pay the dues as soon as possible, so we can proceed your order. <br><br>
      Thank You..!</p>


      <table width:600; >
        <tr>
          <td><h2>Your Order Details from sutwala.com</h2></td>
        </tr>
        <tr>
          <th><b>S. No. &nbsp;</b></th>
          <th><b>Products Name &nbsp;</b></th>
          <th><b>Quantity &nbsp;</b></th>
          <th><b>Total Price &nbsp;</b></th>
          <th><b>Invoic No.</b></th>
        </tr>

        <tr>
          <td>$i</td>
          <td>$product_name</td>
          <td>$qty</td>
          <td>$sub_total</td>
          <td>$invoice_no</td>
        </tr>
      </table> 

      <h3>Please goto your account and pay the dues</h3>
      <h2><a href='sulwala.com'>Click here</a>to login to your account</h2>
      <h3>Thank You for Order on -www.sutwala.com</h3>


    </div>  ";

    mail($cust_mail, $subject, $message, $from);
?>