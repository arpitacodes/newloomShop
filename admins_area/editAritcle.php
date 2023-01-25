<?php
if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{
	 include_once("../includes/PhpDBConnect.php"); 
 if(isset($_GET['editAritcle'])){
 	$edit_article_id = $_GET['editAritcle'];
 	$get_edit_article="SELECT * FROM articles WHERE article_id='$edit_article_id'";
 	 	$run_edit = mysqli_query($connection,$get_edit_article);
 	$row_edit=mysqli_fetch_array($run_edit);
 	$update_article_id = $row_edit['article_id'];
 	$article_title =$row_edit['article_title'];
 	$article_description =$row_edit['article_description'];
 	$article_content =$row_edit['article_content'];
 	$posted_by =$row_edit['posted_by'];
 	$article_image =$row_edit['article_image']; 	

 }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Article</title>
	<style>
		body{
			font-family: serif, sans-serif;
		}
		.product_form{
			width: auto;
			padding: 5px;
			display: inline-block;
		}
		input, textarea {    background: transparent;		}
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
<form  name="container" action="" method="POST"  enctype="multipart/form-data">

	<legend class="legened">
		<h2>Update/Edit Article's Details</h2>
	</legend>
				
	<div class="wrapper_label_input">
					
		<div class="label_aree">
		   <label class="labless">Article's Title</label>
		   <br>
		</div>

		<div class="input_field">
			<input type="text" id="articTitle" name="artic_title" value="<?php echo $article_title; ?>" />
		</div>

	</div>
				
	<div class="wrapper_label_input">

		<div class="label_aree">
			 <label class="labless">Article's Description</label><br>
		</div>

		<div class="input_field">
			<textarea name="artic_descrip" id="descrip" cols="30" rows="10" >
				 <?php echo $article_description; ?>
			</textarea><br>
		</div>

	</div> 
				
	<div class="wrapper_label_input">

		<div class="label_aree">
		   <label class="labless">Article's Content</label><br>
		</div>

		<div class="text_field">
			<textarea name="artic_content" id="artic_textare" cols="30" rows="25" style="height: 100px;width: 165px;">			
				<?php echo $article_content; ?>
			</textarea>
			<br>
		</div>

	</div>		
				
	<div class="wrapper_label_input">
		<div class="label_aree">
			<label class="labless">Article's Image </label><br>
		</div>

		<div class="input_field">
			<input type="file" id="artic_img" name="artic_img">
			<img src="article_images/<?php echo $article_image; ?>" width="60" height ="60">
		</div>
	</div>
				
		<div class="input_submit">
		 <button id="input_submit_but">
			<input id="but_submit" type="submit" name="update_Article" value="Update Article">
		 </button>
		</div>

</form>
</div>	

</center>

</body>
</html>

<?php
	
	if(isset($_POST['update_Article']))
	{
				//inputs/text variables

		$article_title = $_POST['artic_title'];

		$article_descrip = $_POST['artic_descrip'];

		$article_content = $_POST['artic_content'];
		

		//Images variables

		$article_img = $_FILES['artic_img']['name'];
		
		//Images temprry names
		$tmp_article_img = $_FILES['artic_img']['tmp_name'];
				


if($article_title=='' OR $article_descrip=='')
{
	echo "<script> alert('Please fill up remaining fields!!') </script>";
	exit();
}

else {

	//Uploading image into image folder
	move_uploaded_file($tmp_article_img, "./article_images/$article_img");
	
$update_article = "UPDATE articles SET article_title='$article_title', article_description='$article_descrip', article_content='$article_content ', article_image='$article_img', article_date=NOW() WHERE article_id ='$update_article_id'";
		$run_article = mysqli_query($connection, $update_article);
 
		 if($run_article)
		 {
            echo "<script> alert('Article Updated Sucsefully!!') </script>";
            echo "<script>window.open('index.php?viewArticle','_self') </script>";
               
         }else {die(mysqli_error($connection));}

	}
}
	
?>	
<?php } ?>