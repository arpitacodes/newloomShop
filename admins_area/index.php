<?php 
@session_start();
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{   
	include_once("../includes/PhpDBConnect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="styles/main_admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <style>
	  	details {
	    border: 1px solid #aaa;
	    border-radius: 4px;
	    padding: .5em .5em 0;
	    margin: 3px;
	    margin-left: 15px;
	   }
		summary {
		    font-weight: bold;
		    margin: -.5em -.5em 0;
		    padding: .3em;
		}

		details[open] {
		    padding: .3em;
		}
		details[open] summary {
		    border-bottom: 1px solid #aaa;
		    margin-bottom: .5em;
		}
		.addNew > a{  padding: 10px;   margin:  10px ; }
		.view > a{ padding: 10px; margin: 10px ; }
		li.menu_title {
		    padding: 7px;
		    margin-left: 11px;
		    }
 </style>
</head>
<body>
	
	<header>
		<div class="admin_wrapper" ><!--  -->
			<h3>
			 <?php

			 		$admin_mail =$_SESSION['admin_email'];
			 	$get_mail= "SELECT * FROM admins_details WHERE admin_email='$admin_mail'";
	              $run_mail=mysqli_query($connection, $get_mail);
	              $row_mail =mysqli_fetch_array($run_mail);
	              $admin_id = $row_mail['admin_id'];
	              $admin_fname = $row_mail['admin_fname'];
			    echo "<b>Welcome!! </b><spane>".$admin_fname."</spane>";
			  ?>				
			</h3>
	          <a href="adminAccount.php" class="user_ank">
	          	<i class="fas fa-user"></i>
	          </a>
		</div>				         
	</header>
<main>

<!-- < ? php 
	if(isset($_GET['adminAccount'])){
	   include("adminAccount.php");
	}
?> -->
  <div class="side_wrapper" style="height: 35rem;">
	<div class="left_wrapper" style="width: 20%;">
	   <h3 style="text-align: center;">Manage contect</h3>
		<div class="detailsAdmin" style="width: 75%">
		<details>
	    	<summary>Add New</summary>
	    		<p class="addNew">
			  		<li>
			  			<a href="index.php?insertClothType" class="p_ank">Cloth's Type
			  		    </a>
			  		</li>
			  		
			  		<li><a href="index.php?insertSeason" class="p_ank">Season</a>
			  		</li>
			  		<li><a href="index.php?InsertProduct" class="p_ank">Product</a>
			  		</li>
			  		<li><a href="index.php?newArticle" class="p_ank">Blog</a>
			  		</li>
			  	</p>			  	
		</details>
		
		<details>
		   <summary>view</summary>			
				<p class="view"> 
					<li>
					   <a href="index.php?viewCloths" class="p_ank">Cloth's Type</a>
					</li>
					<li>
					   <a href="index.php?viewSeasons" class="p_ank">Seasons</a>
					</li>
					<li>
					   <a href="index.php?viewProducts" class="p_ank">Products </a>
					</li>
					<li>
					   <a href="index.php?viewCustomer" class="p_ank">Customers</a>
					</li>
					<li>
					   <a href="index.php?viewOrders" class="p_ank">Orders</a>
					</li>
					<li>
					   <a href="index.php?viewPayments" class="p_ank">Payment</a>
					</li>
					<li>
					   <a href="viewArticle.php" class="p_ank">Blog</a>
					</li>
					</p>
		</details>

			<li class="menu_title">
			   <a href="index.php?adminLogout">Admin Logout</a>
			</li>
	   </div>			
	</div>

		<div class="right_wrapper" style="width:76%;">
			<?php 			
				if(isset($_GET['viewProducts'])){
					include("viewProducts.php");
				}
					if(isset($_GET['InsertProduct'])){
						include("InsertProduct.php");
					}
	                if(isset($_GET['editProduct'])){
										include("editProduct.php");
									}
				if(isset($_GET['insertClothType'])){
					include("insertClothType.php");
				}
					if(isset($_GET['viewCloths'])){
						include("viewCloths.php");
				    }
					if(isset($_GET['editClothType'])){
					  include("editClothType.php");
				    }
			if(isset($_GET['insertSeason'])){
					include("insertSeason.php");
			}
				if(isset($_GET['viewSeasons'])){
					include("viewSeasons.php");
				}
				if(isset($_GET['editSeasons'])){
					include("editSeasons.php");
				}
			
			if(isset($_GET['viewCustomer'])){
					include("viewCustomer.php");
				}	

			if(isset($_GET['viewOrders'])){
				include("viewOrders.php");
			}
		if(isset($_GET['viewPayments'])){
			include("viewPayments.php");
		}
		if(isset($_GET['viewArticles'])){
					include("viewArticles.php");
				}
					if(isset($_GET['newArticle'])){
						include("newArticle.php");
					}
	                if(isset($_GET['editAritcle'])){
						include("editAritcle.php");
					}

		if(isset($_GET['adminLogout'])){
			include("adminLogout.php");
			}
				
			?>

		</div>
		</div>
	</main>
</body>
</html>
<?php }?>
