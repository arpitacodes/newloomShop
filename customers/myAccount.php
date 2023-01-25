<?php
  @session_start();
	include_once("../functions/indexFunction.php");
?>
<head>
    <!-- custom css link -->
    <link rel="stylesheet" href="../styles/mainstyle.css">
    <link rel="stylesheet" href="../styles/crox.css">
   <!--  google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family= Poppins:wght@300;400;500;600;700;800;900&display=swap">
    <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> 



	<style>

    .search-btn > input[type="submit"] {
    display: block;
    width: 100%;
    font: inherit;
    border: none;
    background: none;
    }
    .search-btn > input[type="submit"]:hover { color: var(--salmon-pink); }

    .checkout{
      display: none;
    }

  
      /**********customer Profile Styles****************/ 

    .profile_wrapper{
      padding: 20px;
      font-size: 18px;
      background-color: #b4b2b124;
     }

    .cust_image{height: 18vh;}

    .customer_profile{
        width: 6.4rem;
        height: 6.4rem;
        margin: 1rem;
        border-radius: 3px;
        border: 2px solid #123;
        padding: 3px;
    }
    .profile_inner_wrapper{
      display: flex;
      justify-content: center;

    }
    .left_side_bar{
      height: 100vh;
      border-bottom: 2px solid #11223354;
      border-top: 2px solid #11223354;
      border-left: 2px solid #11223354;
    }

    .links{
     margin-top: 2rem;

    }
    li.profile-pic{ background: aliceblue; padding: 5px; border: 1px solid #dea;} 
    li.viwe{ background: aliceblue; padding: 5px; border: 1px solid #dea;}
     li.edit_account{ background: aliceblue; padding: 5px; border: 1px solid #dea;}
     li.chenge_password{ background: aliceblue; padding: 5px; border: 1px solid #dea;}
    li.delete{background: aliceblue; padding: 5px; border: 1px solid #dea;
    }
    .links_a {padding: 6px;}


    .right_side_bar {
        border: 2px solid #11223354;
        width: 130vh;
       
    }
    h1, h2, h3, a{display: inline;}
    .welcome_cust{
        padding: 20px;
        text-align: center;
    }
    header{
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    opacity: 1;
    background-color: #fff;
  }
  /*@media screen and (max-width: 60em){header{height: 8rem}}*/

    /*MEADIYA */

    @media screen and (max-width: 60em){
      .profile_inner_wrapper {  
        display: block;
        }
        
      .left_side_bar {
        height: auto;
        text-align: -webkit-center;
        border-bottom: none;
        border-right: 2px solid #11223354;
       }
      .links {

      }
      li.viwe {
   
      }

      .right_side_bar {
        width: auto;
      }
      tr {
          font-size: 12px;
      }
    }

</style>
</head>

<header>

  
  <div class="header-nav-container">

   <div class="header-main">

      <div class="container" >

        <a href="../index.php" class="header-logo">
           <img src="..\images\fuully1.PNG" alt="Sutworld's logo" width="150" height="40"> 
        </a>

        <div class="header-search-container" id="search_box">
          
          <form action="../searchResults.php" method="GET" enctype="multipart/form-data">

            <input type="text" name="user_query" class="search-field" placeholder="Search...">
            <button class="search-btn">              
               <input type="submit" name="search" value="Search" style="color: #454545; font-size:17px">
            </button>

          </form>

        </div>

        <div class="header-user-actions">
       
          <div class="userlogout">
             <span class="logoutt" style="padding: 3px;">
              <?php 
              if(!isset($_SESSION['customer_email'])){
                echo "<a href='../checkout.php' style='color:#454545; font-size:17px; margin-top: 7px'>Login</a>";
              }
              else
              {
                echo "<a href='../customerLogout.php' style='color:#454545; font-size:17px; margin-top: 7px'>Logout</a>";
              }



              ?>
            </span>
          
          </div>

          <div class="userOutline">

              <button class="action-btn"> 
                <a href="myAccount.php">       
                  <ion-icon class="fa-solid fa-user" name="person-outline"></ion-icon>
                </a>  
              </button>

          </div>
          
          <div class="shoppingcart">

              <button class="action-btn">

                <a href="../cart.php">
                  <ion-icon id="cart-btn" class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline"></ion-icon>
                </a>
                <span class="count">
                  <?php   getItems();    ?>                  
                </span>

              </button>
              
          </div>   
         

        </div>

      </div>

    </div> 

    <nav class="desktop-navigation-menu">

      <div class="container" style="padding: 15px 0;">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a  href="../index.php" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#clothCategory.php" class="menu-title">Categories</a>

            <div class="dropdown-panel" style="left: unset; top:33;">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Cloths Types</a>
                </li>
                <?php
                   getClothtypes();
                ?> 
              </ul>
               <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Seasons</a>
                </li>
                <?php                
                   getSeasons();
                ?> 
              </ul>
              

<!-- This is Blog categories  -->
          <li class="menu-category">
            <a href="../allBlog.php" class="menu-title">Blog</a>
          </li>
<!-- This is Contact Us categories  -->
           <li class="menu-category">
            <a href="../pages/contact_us.php" class="menu-title">Contact Us</a>
          </li>
        </ul>

      </div>

    </nav>
</div>    
 <?php
        include("mobileLook.php");
?> 
</header>



<main>
        <div class="profile_wrapper">
         <div class="welcome_cust">
                  
                <!-- <h3>WELCOME THERE</h3>  -->
            <?php    

           /*  if(!isset($_SESSION['customer_email'])){
              echo "<p>Hello There!! <b>Welcome</b> on this site</p> ";
            }
            else{
              echo "<b>Welcome!! </b><p style='display: inline-block;'>". $_SESSION['customer_email'] ."</p>";
            }  */     

              $mail = $_SESSION['customer_email'];
             //if(!isset($mail)){

              $get_mail= "SELECT * FROM customers WHERE customer_email='$mail'";

              $run_mail=mysqli_query($connection, $get_mail);

              $row_mail =mysqli_fetch_array($run_mail);
              $customer_id = $row_mail['customer_id'];
              $customer_name = $row_mail['customer_name'];
              echo "<b>Welcome!! </b>&nbsp;<h3 style='display: inline-block;'>".$customer_name ."</h3>";
            //}
          ?> 
                </div>



        <!-- profile_inner_wrapper starts -->
        <div class="profile_inner_wrapper">

    <!-- left_side_bar starts -->        
            <div class="left_side_bar">

              <div class="cust_image">
                <?php
                  if(isset($_SESSION['customer_email'])){
                  $customer_session =$_SESSION['customer_email'];

 $get_customer_pic = "SELECT * FROM customers WHERE customer_email='$customer_session'";
                  
                  $run_customer = mysqli_query($connection, $get_customer_pic);

                  $row_customer=mysqli_fetch_array($run_customer);

                  $cutomer_pic =$row_customer['customer_Profile_img'];
                  /*
                  $cutomer_name_session= $row_customer['customer_name'];*/                 

echo "<img src='customer_photos/$cutomer_pic' alt='Customer profile photo' class='customer_profile'>";
/*echo $cutomer_name_session."<br/>";
*/
              }

                ?>
                                   
              </div>

            <!-- links starts -->
              <div class="links">
                <ul class="cust_links_ul">

                  <li class="viwe">
                    <a class="links_a" href="myAccount.php?viweProfileOrder">Viwe Orders</a>
                  </li>

                  <li class="edit_account">
                    <a class="links_a" href="myAccount.php?edit_account">Edit Account</a>
                  </li>

                  <li class="chenge_password">
                    <a class="links_a" href="myAccount.php?chenge_password">Chenge Password</a>
                  </li>

                  <li class="delete">
                    <a class="links_a" href="myAccount.php?delete_cust_account">Delete Account</a>
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
                      getDefaultDetails();
                    ?>

                    <?php 
                      if(isset($_GET['viweProfileOrder'])){
                        include("viweProfileOrders.php");
                      }

                      if(isset($_GET['edit_account'])){
                        include("edit_account.php");
                      }
                      if(isset($_GET['chenge_password'])){
                        include("chenge_password.php");
                      }

                      if(isset($_GET['delete_cust_account'])){
                        include("delete_cust_account.php");
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
<?php   
  include("../pages/footer.php");
?>