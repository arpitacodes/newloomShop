<?php

include("adminDBconnect.php");

function insertPtduct() {
	
	if(isset($_POST['insert_product']))	{
		
		//inputs/text variables

		$product_title = $_POST['product_title'];

		$product_category = $_POST['product_category'];

		//$product_brand = $_POST['product_brand'];

		$sales_price = $_POST['sales_price'];

		$product_description = $_POST['product_description'];

		$product_keywords = $_POST['product_keywords'];

		$product_feature = $_POST['product_feature'];

		$product_thread = $_POST['product_thread'];

		//$product_status = $_POST['product_status'];
		$status = 'on';

		$product_made = $_POST['product_made'];
		

		//Images variables

		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];

		//Images temprry names

		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 = $_FILES['product_img2']['tmp_name'];
		$temp_name3 = $_FILES['product_img3']['tmp_name'];
		


	if($product_title=='' OR $product_description=='' OR $sales_price=='' OR $product_keywords=='' OR $product_img1=='')
	{
		echo "<script> alert('Please fill up remaining fields!!') </script>";
		exit();
	}

	else {

		//Uploading image into image folder
		move_uploaded_file($temp_name1, "./products_images/$product_img1");
		move_uploaded_file($temp_name2, "./products_images/$product_img2");
		move_uploaded_file($temp_name3, "./products_images/$product_img3");

	/* brand_id, '$product_brand',*/

	$insert_products = "INSERT INTO  products (category_id, product_title, product_description, 
		product_price, product_status, product_img1, product_img2, product_img3, 
		prodct_thread_type, product_feature, product_keywords, made_in, create_at)) VALUES('$product_category', '$product_title', '$product_description', '$sales_price', '$status','$product_img1','$product_img2','$product_img3', '$product_thread', '$product_feature', '$product_keywords', '$product_made', current_timestamp() )";



			$run_productInsertion = mysqli_query($connection, $insert_products);

			if($run_productInsertion) 
			{
					echo "<script> alert('Product Inserted Sucsefully!! Thank you..') </script>";
				
			}
			else echo 
				"<script> alert('error:'.$run_productInsertion.$connection->error') </script>";

		}
	}

}
?>