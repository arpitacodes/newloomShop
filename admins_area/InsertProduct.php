<?php
 		$form_complete = null; 
  	include_once("../includes/PhpDBConnect.php");  
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Products</title>
	<style>
		body{			font-family: serif, sans-serif;		}
		.product_form{
			width: auto;
			padding: 5px;
			display: inline-block;
		}
		input, textarea {background: transparent;		}	
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
		.all_select {  display: flex;		}
		.selectlabel {
		    align-self: center;
		    font-size: 18px;
		    font-style: oblique;
		}
		.wrapper_select_option { padding: 6px;	}
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
		h2{color: slategrey;}

	</style>

</head>
<body>
 
<div class="product_form">
<!-- //action="InsertProduct.php" -->
<form  name="container" action="InsertProduct.php" method="POST"  enctype="multipart/form-data">
	<legend class="legened">
		<h2>New Product's Details</h2>
	</legend>
		<div class="wrapper_label_input">					
		<div class="label_aree">
		   <label class="labless">Product's Name/Title</label>
		   <br>
		</div>
		<div class="input_field">
			<input type="text" id="ProductTitle" name="product_title" required/>
		</div>
	</div>
		<div class="wrapper_label_input">
		<div class="label_aree">
			 <label class="labless">Product's sales price</label><br>
		</div>
		<div class="input_field">
			<input class="input_date" pattern="^\d*(\.\d{0,2})?$" type="number" id="Product_price" name="sales_price" id="sales" value="0000.00" required><br>
		</div>
	</div> 				
	<div class="wrapper_label_input">
		<?php
        if(isset ($_POST['product_description']) && empty(trim ($_POST['product_description'])))
        { echo "<p class=\'alert\'>Product's Description is required</p>";  }
    ?>

		<div class="label_aree">
		   <label class="labless">Product's Description</label><br>
		</div>

		<div class="text_field">
			<textarea name="product_description" id="prod_textare" cols="30" rows="15" style="height: 100px;width: 165px;">			
			</textarea>
			<br>
		</div>

	</div>
			
	<div class="wrapper_label_input">

		<div class="label_aree">
		   <label class="labless">Product's Keywords</label><br>
		</div>
		<div class="input_field">
			<input type="text" id="Prod_keyword" name="product_keywords" required>
		</div>
	</div>

	<div class="wrapper_label_input">
		<div class="label_aree">
		   <label class="labless">Width</label><br> 
		</div>
		<div class="input_field">
			<input type="text" id="Prod_width" name="product_width" required>
		</div>
	</div>			
	<div class="wrapper_label_input">
		<?php
        if(isset ($_POST['product_uses']) && empty(trim ($_POST['product_uses'])))
        { echo "<p class=\'alert\'>Product's Features/Uses is required</p>";  }
    ?>
		<div class="label_aree">
			<label class="labless">Product's Features/Uses</label><br>
		</div>

		<div class="text_field">
			<textarea name="product_uses" id="prod_feature" cols="30" rows="15" style="height: 90px;width: 165px;">				
			</textarea><br>
		</div>
	</div>
								
	<div class="wrapper_label_input">
		<div class="label_aree">
			<label class="labless">Product's Image 1st</label><br>
		</div>
		<div class="input_field">
			<input type="file" id="prod_img1" name="product_img1">
		</div>
	</div>
				
	<div class="wrapper_label_input">
		<div class="label_aree">
			<label class="labless">Product's Image 2nd</label><br>
		</div>

		<div class="input_field">
			<input type="file" id="prod_img2" name="product_img2">
		</div>
	</div>
				
	<div class="wrapper_label_input">
		<div class="label_aree">
			<label class="labless">Product's Image 3rd</label><br>
		</div>
		<div class="input_field">
			<input type="file" id="prod_img3" name="product_img3">
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
			<option value="season" >choose season</option>
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
			<option value="Cloths_type">Choose Cloths Type </option>
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
			<input id="but_submit" type="submit" name="product_submit" value="Insert Product">
		 </button>
		</div>

</form>
</div>	

<!-- <a href="../thankyou.php" > Thank you </a> -->
</body>
</html>

<?php
	
	if(isset($_POST['product_submit']))
	{
				//inputs/text variables

		$product_title = $_REQUEST['product_title'];

		$product_cloth_type = $_REQUEST['product_cloth_type'];

		$product_season = $_REQUEST['product_season'];

		$sales_price = $_REQUEST['sales_price'];

		$product_description = $_REQUEST['product_description'];

		$product_keywords = $_REQUEST['product_keywords'];

		$product_uses = $_REQUEST['product_uses'];
		$product_width = $_REQUEST['product_width'];
			
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

$insert_products = "INSERT INTO products (clothtype_id, season_id, products_title, product_description,product_price, product_status, product_img1, product_img2, product_img3, product_uses,product_keywords, cloth_width, create_at) VALUES('$product_cloth_type','$product_season','$product_title','$product_description', '$sales_price', '$status','$product_img1','$product_img2','$product_img3','$product_uses','$product_keywords', '$product_width', NOW())";

		$run_productInsertion = mysqli_query($connection, $insert_products);
 
		 if($run_productInsertion)
		 {
            echo "<script> alert('Inserted Sucsefully!!') </script>";
               
         }else {die(mysqli_error($connection));}

	}
}
	
?>
	<?php 
  $form_complete ?: true;
  if($form_complete){
    foreach($_POST as $name => $value){
      if('submit' != $name){
        if(is_array($value)){
          $value=implode(',', $value);
        }
        echo "<p><b>".ucfirst($name)."</b> is $value.</p>";
      }
    }
  }

  if(!empty($_POST)){
    foreach($_POST as $value){
      $value = trim($value);
    }
  }

?>

 <!-- website link for text editore 
 
 tinymce.com  -->