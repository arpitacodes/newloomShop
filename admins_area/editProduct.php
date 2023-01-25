<?php
if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{
	 include_once("../includes/PhpDBConnect.php"); 
 if(isset($_GET['editProduct'])){
 	$edit_prod_id = $_GET['editProduct'];
 $get_edit_prod="SELECT * FROM products WHERE products_id='$edit_prod_id'";
 	$run_edit = mysqli_query($connection,$get_edit_prod);
 	$row_edit=mysqli_fetch_array($run_edit);
 	$update_pro_id = $row_edit['products_id'];
 	$pro_title =$row_edit['products_title'];
 	$pro_price =$row_edit['product_price'];
 	$pro_desc =$row_edit['product_description'];
 	$pro_keywords =$row_edit['product_keywords'];
 	$pro_uses =$row_edit['product_uses'];
 	$pro_img1 =$row_edit['product_img1'];
 	$pro_img2 =$row_edit['product_img2'];
 	$pro_img3 =$row_edit['product_img3'];
 	$cloth_type_id =$row_edit['clothtype_id'];
 	$season_id =$row_edit['season_id'];
 }
//To get the exact Cloth Type's Name for each Products
 $get_clothtypes= "SELECT * FROM clothtypes WHERE clothtype_id='$cloth_type_id'";
  $run_clothtypes=mysqli_query($connection,$get_clothtypes);
  $row_clothtypes=mysqli_fetch_array($run_clothtypes);

  $clothtype_title = $row_clothtypes['cloth_type'];

//To get the exact Season's Name for each Products
  $get_season= "SELECT * FROM season WHERE season_id='$season_id'";
  $run_season=mysqli_query($connection,$get_season);
  $row_season=mysqli_fetch_array($run_season);

  $season_title = $row_season['season_name'];
 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Products</title>
	<style>
		body{
			font-family: serif, sans-serif;
		}
		.product_form{
			width: auto;
			padding: 5px;
			display: inline-block;
		}
		input, textarea {background: transparent;	}	
		.wrapper_label_input{
			display: flex;
			gap: 1px;
			margin: 5px;			
		}
		.label_aree{
			font-size: 16px;
			padding: 3px;
			width: 45%;			
		}
		.all_select {   display: flex;		}
		.selectlabel {
		    align-self: center;
		    font-size: 18px;
		    font-style: oblique;
		}
		.wrapper_select_option {    padding: 6px;		}
		select#prod_select {
		        padding: 3px;
			    border-radius: 5px;
			    }
	 	.input_submit{
	 		margin-top: 10px;
    		padding-left: 15%;
	 	}
	 	input#but_submit {
		    padding: 5px 10px;
		    border-radius: 5px;
		    font-size: 16.5px;
		}
		#input_submit_but{
			border: none;
			background: no-repeat;
		}	
	</style>
</head>
<body>
  <center>
<div class="product_form">
<!-- //action="InsertProduct.php" -->
<form  name="container" action="" method="POST"  enctype="multipart/form-data">
	<legend class="legened">
		<h2>Update/Edit Product's Details</h2>
	</legend>				
	<div class="wrapper_label_input">					
		<div class="label_aree">
		   <label class="labless">Product's Name/Title</label>
		   <br>
		</div>
		<div class="input_field">
			<input type="text" id="ProductTitle" name="product_title" value="<?php echo $pro_title; ?>" />
		</div>
	</div>
				<div class="wrapper_label_input">
		<div class="label_aree">
			 <label class="labless">Product's price</label><br>
		</div>
		<div class="input_field">
			<input class="input_date" pattern="^\d*(\.\d{0,2})?$" type="number" id="Product_price" name="sales_price" id="sales" value="<?php echo $pro_price; ?>" ><br>
		</div>
	</div> 				
	<div class="wrapper_label_input">
		<div class="label_aree">
		   <label class="labless">Product's Description</label><br>
		</div>
		<div class="text_field">
			<textarea name="product_description" id="prod_textare" cols="30" rows="15" style="height: 100px;width: 165px;">			
				<?php echo $pro_desc; ?>
			</textarea>
			<br>
		</div>
	</div>	
	<div class="wrapper_label_input">
		<div class="label_aree">
		   <label class="labless">Product's Keywords</label><br>
		</div>
		<div class="input_field">
			<input type="text" id="Prod_keyword" name="product_keywords" value="<?php echo $pro_keywords; ?>">
		</div>
	</div>				
	<div class="wrapper_label_input">
		<div class="label_aree">
					<label class="labless">Product's Features/Uses</label><br>
		</div>
		<div class="text_field">
			<textarea name="product_uses" id="prod_feature" cols="30" rows="15" style="height: 90px;width: 165px;" >
			<?php echo $pro_uses; ?>				
			</textarea><br>
		</div>

	</div>			
				
	<div class="wrapper_label_input">
		<div class="label_aree">
			<label class="labless">Product's Image Ist</label><br>
		</div>

		<div class="input_field">
			<input type="file" id="prod_img1" name="product_img1">
			<img src="products_images/<?php echo $pro_img1; ?>" width="60" height ="60">
		</div>
	</div>
				
	<div class="wrapper_label_input">
		<div class="label_aree">
			<label class="labless">Product's Image IInd</label><br>
		</div>

		<div class="input_field">
			<input type="file" id="prod_img2" name="product_img2" >
			<img src="products_images/<?php echo $pro_img2; ?>" width="60" height ="60">
		</div>
	</div>
				
	<div class="wrapper_label_input">
		<div class="label_aree">
			<label class="labless">Product's Image IIIrd</label><br>
		</div>
		<div class="input_field">
			<input type="file" id="prod_img3" name="product_img3">
			<img src="products_images/<?php echo $pro_img3; ?>" width="60" height="60">
		</div>
	</div>

			<!-- Seasons STarts  -->
<div class="all_select">
	<div class="selectlabel">
    	<label class="labless">Choose Season</label><br>
	</div>

	<div class="wrapper_select_option">
      <select name="product_season" id="prod_select" style="margin-left: 5rem;">
					
		<div class="opption_tag">
			<option value="<?php echo $season_id;?>" ><?php echo $season_title;?></option>
		</div>
		<?php

			$get_season = "SELECT * FROM season";
		    $run_season = mysqli_query($connection, $get_season);

		    while ($row_season = mysqli_fetch_array($run_season)) 
		    {                        // code...

                $season_id = $row_season['season_id'];
	            $season_name = $row_season['season_name'];
							         
echo "<option class='panel-list-item' value='$season_id'>$season_name</option>";
		 	}
		               
	   ?> 
	  </select>
	</div> 
</div>

<!-- all_select div start  -->
<div class="all_select">
	
	<div class="selectlabel">
    	<label class="labless">Product's Cloths types</label><br>
	</div>
						
<!-- wrapper_select_option for Cloth Types category of products  -->
<div class="wrapper_select_option">
	<select name="product_cloth_type" id="prod_select" style="margin-left: 1.8rem;">
						
		<div class="opption_tag">
			<option value="<?php echo $cloth_type_id;?>">
				<?php echo $clothtype_title;?>					
		    </option>
		</div>
		<?php
			$get_clothtypes = "SELECT * FROM clothtypes";
		$run_clothtypes = mysqli_query($connection, $get_clothtypes);

		while ($row_clothtypes = mysqli_fetch_array($run_clothtypes)) 
        {                        // code...

        $clothtype_id = $row_clothtypes['clothtype_id'];
	    $cloth_type = $row_clothtypes['cloth_type'];
											         
		echo "<option class='panel-list-item' value='$clothtype_id'>$cloth_type</option>";               

	    }
		?> 
	</select>
</div>
</div>

		<div class="input_submit">
		 <button id="input_submit_but">
			<input id="but_submit" type="submit" name="update_product" value="Update Product">
		 </button>
		</div>

</form>
</div>	
</center>
<!-- <a href="../thankyou.php" > Thank you </a> -->
</body>
</html>

<?php	
	if(isset($_POST['update_product']))
	{
				//inputs/text variables
		$product_title = $_POST['product_title'];
		$product_cloth_type = $_POST['product_cloth_type'];
		$product_season = $_POST['product_season'];
		$sales_price = $_POST['sales_price'];
		$product_description = $_POST['product_description'];
		$product_keywords = $_POST['product_keywords'];
		$product_uses = $_POST['product_uses'];			
		$status = 'on';	

		//Images variables
		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];

		//Images temprry names
		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 = $_FILES['product_img2']['tmp_name'];
		$temp_name3 = $_FILES['product_img3']['tmp_name'];
		
if($product_title=='' OR $product_description=='' OR $sales_price=='' OR $product_keywords=='' OR 
	$product_img1=='')
{
	echo "<script> alert('Please fill up remaining fields!!') </script>";
	exit();
}

else {

	//Uploading image into image folder
	move_uploaded_file($temp_name1, "./products_images/$product_img1");
	move_uploaded_file($temp_name2, "./products_images/$product_img2");
	move_uploaded_file($temp_name3, "./products_images/$product_img3");


$update_products = "UPDATE products SET clothtype_id='$product_cloth_type', season_id='$product_season', products_title='$product_title', product_description='$product_description',product_price='$sales_price', product_uses='$product_uses', product_keywords='$product_keywords', product_img1='$product_img1', product_img2='$product_img2', product_img3='$product_img3', create_at=NOW() WHERE products_id ='$update_pro_id'";


		$run_productUpdate = mysqli_query($connection, $update_products);
 
		 if($run_productUpdate)
		 {
            echo "<script> alert('Product Updated Sucsefully!!') </script>";
            echo "<script>window.open('index.php?viewProducts','_self') </script>";
               
         }else {die(mysqli_error($connection));}

	}
}	
?>	
<?php } ?>