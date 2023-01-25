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

  @media screen and (max-width: 60em){
    header{height: 7rem;
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    opacity: 1;
    background: #f7f7f7;
    }
  }

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
        border-bottom: 2px solid #11223354;
        text-align: center;
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
            <a href="contact_us.php" class="menu-title">Contact Us</a>
          </li>
        </ul>

      </div>

    </nav>
</div>    
 <?php
        include("mobileLook.php");
?> 
</header>

