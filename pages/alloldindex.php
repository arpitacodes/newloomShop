<?php
  include("./includes/PhpDBConnect.php"); 
  include("./functions/indexFunction.php");
    //$connection = mysqli_connect("localhost","root","password","sutwala");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loom's Shop</title>
  <!-- Favicon  -->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
    <!-- custom css link -->
    <link rel="stylesheet" href="./styles/mainstyle.css">
        <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family= Poppins:wght@300;400;500;600;700;800;900&display=swap">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

    <!--    - HEADER  -->

  <header>

    <div class="header-top">

      <div class="container" ><!-- style="width:100%" -->

        <ul class="header-social-container" ><!-- style="width:35%" -->

          <li>
            <a href="#" class="social-link">
             <!-- <i class="fa-brands fa-facebook" name="logo-facebook"></i> -->
              <ion-icon class="fa-brands fa-facebook" name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <i class="fa-brands fa-twitter" name="logo-twitter"></i>  -->
              <ion-icon  class="fa-brands fa-twitter" name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <i class="fa-brands fa-instagram" name="logo-instagram"></i> -->
              <ion-icon class="fa-brands fa-instagram" name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <i class="fa-brands fa-linkedin" name="logo-linkedin"></i> -->
              <ion-icon class="fa-brands fa-linkedin" name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news" ><!-- style="width:55%" -->
          <p>Hello There!! 
            <b>Welcome</b>
            on this site
          </p>  
          <!-- <marquee>Hello There!!<b>Welcome<b/>on this site<marquee/> -->
        </div>

        <div class="header-top-actions">    

        </div>

         
      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="index.php" class="header-logo">
           <img src=".\images\fuully1.PNG" alt="Sutworld's logo" width="150" height="40"> 
        <!--   <img src="https://img.freepik.com/premium-vector/needle-thread-silhouette-icon-vector-illustration-tailor-logo-with-needle-symbol-curvy_98734-420.jpg?w=150" alt="S for Sutwala"> -->
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <!-- <i class="fa-solid fa-magnifying-glass" name="search-outline"></i> -->
            <ion-icon class="fa-solid fa-magnifying-glass" name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <!-- <i class="fa-solid fa-user" name="person-outline"></i>     -->
            <ion-icon class="fa-solid fa-user" name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline"></ion-icon>
            <!-- <i class="fas fa-cart-shopping" name="bag-handle-outline" ></i> -->
            <!-- <i class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline"></i> -->
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="index.php" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Baby&Kids</a>
                </li>
                <?php
                   getKids();
                ?> 
              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Men's</a>
                </li>
                <?php    getMans();        ?>
                           
              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Women's</a>
                </li>
                <?php   getWomans();   ?>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">House Decoration</a>
                </li>
                  <?php getHouse(); ?>

              </ul>

            </div>
          </li>
<!-- This is single categories -->
          <li class="menu-category">
            <a href="#" class="menu-title">Men's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Shorts & Jeans</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Safety Shoes</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Wallet</a>
              </li>

            </ul>
          </li>
<!-- This is single categories -->
          <li class="menu-category">
            <a href="#" class="menu-title">Women's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Dress & Frock</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Makeup Kit</a>
              </li>

            </ul>
          </li>
<!-- This is single categories -->
          <li class="menu-category">
            <a href="#" class="menu-title">Jewelry</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Couple Rings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bracelets</a>
              </li>

            </ul>
          </li>
<!-- This is single categories -->
          <li class="menu-category">
            <a href="#" class="menu-title">Perfume</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Clothes Perfume</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Deodorant</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Flower Fragrance</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Air Freshener</a>
              </li>

            </ul>
          </li>
<!-- This is single categories -->
          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>
<!-- This is single categories -->
          <li class="menu-category">
            <a href="#" class="menu-title">Hot Offers</a>
          </li>

        </ul>

      </div>

    </nav>

<!-- mobile bottom button navigation -->

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon class="fa-sharp fa-solid fa-bars" name="menu-outline"></ion-icon>
        <!-- <i class="fa-sharp fa-solid fa-bars" name="menu-outline"></i> -->
      </button>
 

      <button class="action-btn">
        <!-- <i class="fas fa-home"></i> -->
        <ion-icon  class="fas fa-home" name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <!-- <i class="fas fa-cart-shopping" name="bag-handle-outline" ></i> -->
        <!-- <i class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline"></i> -->
        <ion-icon class="fa-sharp fa-solid fa-bag-shopping" name="bag-handle-outline" ></ion-icon>
        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <!-- <i class="fa-solid fa-border-all"></i> -->
        <ion-icon class="fa-solid fa-border-all" name="grid-outline"></ion-icon>
      </button>

    </div>


    <!--  -->

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon class="fa-solid fa-xmark" name="close-outline"></ion-icon>
          <!-- <i class="fa-solid fa-xmark"  name="close-outline"></i> -->
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon class="fa-regular fa-plus" name="add-outline" class="add-icon"></ion-icon>                
              <ion-icon class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <?php getMans(); ?> 
          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon class="fa-regular fa-plus" name="add-outline" class="add-icon"></ion-icon>                
              <ion-icon class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <?php getWomans(); ?>

        </ul>

      </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Baby&Kids</p>

            <div>
              <ion-icon class="fa-regular fa-plus" name="add-outline" class="add-icon"></ion-icon>                
              <ion-icon class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>
              <?php getKids(); ?>

            </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">House Decoration</p>

            <div>
             <ion-icon class="fa-regular fa-plus" name="add-outline" class="add-icon"></ion-icon>                
              <ion-icon class="fa-solid fa-minus" name="remoe-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <?php getJouse(); ?>
            </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="a-solid fa-caret-left"></ion-icon>
              <!-- <i class="fa-solid fa-caret-left" name="caret-back-outline"></i> -->
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon class="fa-brands fa-facebook" name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon class="fa-brands fa-twitter" name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon class="fa-brands fa-instagram" name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon class="fa-brands fa-linkedin" name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>

<!-- header ends here -->

<!-- main Start here -->

  <main>
      
      <!-- products wrapper starting point -->
      <div class="product_wrapper">
          
        <?php getProducts(); ?>

      </div>
      <!-- products wrapper endding point -->


  </main>

<!-- main ends here -->



<!-- CUSTOM js link  -->
  <!-- <script src=".\js\fullweb.js"></script> -->
  <!-- <script src="C:\xampp\htdocs\loomShop\js\fullweb.js"></script> -->
    <!-- <script src="C:\xampp\htdocs\looms\js\fullweb.js"></script> -->
  <!-- ionicon js link -->
<script type="modul" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist.ionicons.ionicons.js"></script>
</body>
</html>

<!--*** S for Sutwala logo address

 https://img.freepik.com/premium-vector/needle-thread-silhouette-icon-vector-illustration-tailor-logo-with-needle-symbol-curvy_98734-420.jpg?w=2000 -->


<!-- ///for Main Categories 
<php
  $get_mainCategories = "SELECT * FROM main_categories";
    $run_mainCategories = mysqli_query($connection, $get_mainCategories);

      while ($row_mainCategories = mysqli_fetch_array($run_mainCategories)) 
      {                        // code...

          $mainCategory_id = $row_mainCategories['main_category_id'];
          $mainCategory_kides = $row_mainCategories['main_category_title'];
         
                echo "<a href='index.php?categori=$mainCategory_id'>$mainCategory_kides </a>";               

      }

?> -->


<!-- FUNCTIONS FOR CATEGORIES -->


function getMans(){
    global  $connection;
  $get_categories = "SELECT * FROM categories";
    $run_categories = mysqli_query($connection, $get_categories);

      while ($row_categories = mysqli_fetch_array($run_categories)) 
      {                        // code...

          $category_id = $row_categories['category_id'];
          $category_mans = $row_categories['mans'];
         
                echo "<li class='panel-list-item'><a href='index.php?categori=$category_id'>$category_mans </a></li>";
               

      }
}

//**Womans Categories **

function getWomans(){
    global  $connection;
  $get_categories = "SELECT * FROM categories";
    $run_categories = mysqli_query($connection, $get_categories);

      while ($row_categories = mysqli_fetch_array($run_categories)) 
      {                        // code...

          $category_id = $row_categories['category_id'];
          $category_womans = $row_categories['womens'];
         
     echo "<li class='panel-list-item'><a href='index.php?categori=$category_id'> 
        $category_womans</a></li>";
               

      }
}

//**House Decoretion Categories **

function getHouse() {
    global  $connection;
  $get_categories = "SELECT * FROM categories";
    $run_categories = mysqli_query($connection, $get_categories);

      while ($row_categories = mysqli_fetch_array($run_categories)) 
      {                        // code...

          $category_id = $row_categories['category_id'];
          $category_house = $row_categories['house_decoration'];
         
                echo "<li class='panel-list-item'><a href='index.php?categori=$category_id'>$category_house</a></li>";
               

      }
}




<!-- FOR  FORM InsertProducts INIT-->

<!-- wrapper_select_option for category of products 2 -->
      <!--      <div class="wrapper_select_option">
            <select name="product_category" id="prod_select">

              <div class="opption_tag">
                <option value="mens">choose Category for Men's </option>
              </div>

                < ? php
                      $get_categories = "SELECT * FROM categories";
                      $run_categories = mysqli_query($connection, $get_categories);

                        while ($row_categories = mysqli_fetch_array($run_categories)) 
                        {                        // code...

                            $category_id = $row_categories['category_id'];
                            $category_mans = $row_categories['mans'];
                           
                                    echo "<option class='panel-list-item' value='$category_id'>$category_mans</option>"; 
                               

                      }
                ? > 
                  </select>
              </div> -->
<!-- wrapper_select_option for category of products 3 -->
              <!-- <div class="wrapper_select_option" style="">
            
                  <select name="product_category" id="prod_select">
              <div class="opption_tag">
                <option value="Womens">choose Category for Women's </option>
              </div>

                < ? php

                        $get_categories = "SELECT * FROM categories";
                        $run_categories = mysqli_query($connection, $get_categories);

                          while ($row_categories = mysqli_fetch_array($run_categories)) 
                          {                        // code...

                              $category_id = $row_categories['category_id'];
                              $category_womans = $row_categories['womens'];
                             
                        echo "<option class='panel-list-item' value='$category_id'>$category_womans</option>"; 
                                   

                      }
                ? > 
              </select>
          </div> -->
<!-- wrapper_select_option for category of products 4 -->
    <!--      <div class="wrapper_select_option">

              <select name="product_category" id="prod_select">

                <div class="opption_tag">
                  <option value="Home&Decoration">choose Category for Home&Decoration </option>
                </div>
 
                < ? php
                    $get_categories = "SELECT * FROM categories";
                    $run_categories = mysqli_query($connection, $get_categories);

                      while ($row_categories = mysqli_fetch_array($run_categories)) 
                      {                        // code...

                          $category_id = $row_categories['category_id'];
                          $category_house = $row_categories['house_decoration'];
                         
                                  echo "<option class='panel-list-item' value='$category_id'>$category_house</option>"; 
                               

                      }
                ? >

            </select>

          </div> -->

          </div>
      <!-- all_select div ends  -->


        <div class="input_submit">
          <input type="submit" id="but_submit" name="insert_product" value="InsertProduct">
        </div>
  
      
      </form>

  </div>
  <!-- product_form div Ends -->


/****

TOO MUCH OLD PAGE
   * * HTML PAGE FOR BASIC CODE OF PHP like(DATABASE-CONNECTION, TABLE-Connect)ETC.
   * 
   * index.php*
   * */

   /*




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loom's Shop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
  <link rel="stylesheet" href="./styles/index.css" media="all" />

</head>
<body>
    <!--    - HEADER  -->

      <header>
        <div class="welcome-wrapper">
          
          <div class="welcome">
            <p>Hello There!!
              <b>Welcome</b>
              on this site
            </p>
          </div>

        </div>

<!-- NAVIGATION AREA -->        
        <nav>

          <div class="nav-wrapper">
          
          <div class="logo-div">
            <a href="#index.php" class="logo">
              <img src="./images/logo3.PNG" alt="SiteLogo" width="150" height="40" style="margin-left: 15px;" >
            </a>
          </div>  

          <div class="main_nav">
            <ul>
              <li class="drop-list">
                <a href="#">Home</a>
              </li>

              <li class="drop-list1">
                <a href="#">Category</a>

                <div class="cat_main_list">

                  <ul class="cat_lists">
                  
<?php
    $get_categories = "SELECT * FROM categories";
    $run_categories = mysqli_query($connection, $get_categories);

      while ($row_categories = mysqli_fetch_array($run_categories)) 
      {                        // code...

          $category_id = $row_categories['category_id'];
          $category_womans = $row_categories['womens'];
          $category_mans = $row_categories['mans'];
          $category_kides = $row_categories['kides'];
          $category_house = $row_categories['house'];
                echo "<li class='drop-sublist'><a href='index.php?categori=$category_id'>$category_womans </a></li>";
                echo "<li class='drop-sublist'><a href='index.php?categori=$category_id'>$category_mans </a></li>";
                echo "<li class='drop-sublist'><a href='index.php?categori=$category_id'>$category_kides </a> </li>";
                echo "<li class='drop-sublist'><a href='index.php?categori=$category_id'>$category_house </a></li>";

      }
?> 
                  <!--  <li class="drop-sublist">
                      <a href="#lists">Women's</a>
                    </li>
                    <li class="drop-sublist">
                      <a href="#lists">Man's</a>
                    </li>
                    <li class="drop-sublist">
                      <a href="#lists">kide's</a>
                    </li>
                    <li class="drop-sublist">
                      <a href="#lists">Home</a>
                    </li> -->
                     
                  </ul>
                </div>
              </li> 

              <li class="drop-list">
                <a href="#">Blog</a>
              </li>
              <li class="drop-list">
                <a href="#">About Us</a>
              </li>
            </ul>
          </div>

          </div>

          <div class="icon_wrapper">
            
            <div class="user_icon">
              <i class="fas fa-user"></i>
            </div>
            <div class="cart_icon">
              <!--  <i class="fas fa-trash"></i> -->
              <i class="fas fa-cart-shopping"></i>
            </div>

          </div> 

        </nav>
        
      </header>


</body>
</html>
*/