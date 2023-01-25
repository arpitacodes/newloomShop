<?php 
	@session_start();
	include_once ("../functions/indexFunction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
  <style>
    body{
      font-size: 18px;
      margin: 2em;
    }
    li{
      list-style: none;
    }
    a{text-decoration: none;}
    header{

      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>
	<header>
		<div class="admin_wrapper" >
			<a href="index.php"><h3>Admin Panel</h3></a>
	        <a href="index.php?adminAccount" class="user_ank">
	          	<i class="fas fa-user"></i>
	        </a>
		</div>	
    <div class="welcome_cust">
                  
                <!-- <h3>WELCOME THERE</h3>  -->
            <?php    
  

              $mail = $_SESSION['admin_email'];
             //if(!isset($mail)){

              $get_mail= "SELECT * FROM admins_details WHERE admin_email='$mail'";

              $run_mail=mysqli_query($connection, $get_mail);

              $row_mail =mysqli_fetch_array($run_mail);
              $admin_id = $row_mail['admin_id'];
              $admin_name = $row_mail['admin_fname'];
              echo "<b>Welcome!! </b>&nbsp;<h3 style='display: inline-block;'>".$admin_name ."</h3>";
            //}
          ?> 
    </div>
    <!-- <div class="name">
         < ? php
                  if(isset($_SESSION['admin_email'])){
                  $admin_session =$_SESSION['admin_email'];

    $get_admins = "SELECT * FROM admins_details WHERE admin_email='$admin_session'";
                  
                  $run_admin = mysqli_query($connection, $get_admins);

                  $row_admin=mysqli_fetch_array($run_admin);

                 // $cutomer_pic =$row_admin['customer_Profile_img'];
                 
                  $admin_fname_session= $row_admin['admin_fname'];
                  $admin_lname_session = $row_admin['admin_lname'];                 

     echo $admin_fname_session." " .$admin_lname_session;

              }

        ?>
    </div> -->
	</header>

	<main>
  
      <div class="profile_wrapper">

        <!-- profile_inner_wrapper starts -->
        <div class="profile_inner_wrapper">

    <!-- left_side_bar starts -->        
            <div class="left_side_bar">

              <div class="admin_image">
             
                                   
              </div>

            <!-- links starts -->
              <div class="links">
                <ul class="cust_links_ul">
                  <li class="edit_account">
                    <a class="links_a" href="adminAccount.php?edit_admin_account">Edit Account</a>
                  </li>

                  <li class="chenge_password">
                    <a class="links_a" href="adminAccount.php?chenge_admin_password">Chenge Password</a>
                  </li>

                  <li class="delete">
                    <a class="links_a" href="adminAccount.php?delete_admin_account">Delete Account</a>
                  </li>

                </ul>
              </div>
              <!-- links ends -->
            </div>
    <!-- left_side_bar ends -->


    <!-- right_side_bar starts -->
            <div class="right_side_bar">
                
                


                  <div class="details">
                    <?php 
                      //getaAdminDefaultDetails();
                    ?>

                    <?php 
                      
                      if(isset($_GET['edit_admin_account'])){
                        include("edit_admin_account.php");
                      }
                      if(isset($_GET['chenge_admin_password'])){
                        include("chenge_admin_password.php");
                      }

                      if(isset($_GET['delete_admin_account'])){
                        include("delete_admin_account.php");
                      }
                    ?>

                  </div>

            </div>
            <!-- right_side_bar ends -->


        </div>
        <!-- profile_inner_wrapper ends -->
      </div>
<!-- profile_wrapper Ends -->
</main>
	
</body>
</html>