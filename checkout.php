<?php
   session_start();
   include_once("./pages/head.php");
   include_once("./pages/header.php");
             
?>
<!-- main Start here -->
  <main>
            <!-- products wrapper starting point -->
      <div class="product_wrapper" style="margin-top: 4%;">          
        <?php
          if(!isset($_SESSION['customer_email'])){
            include("./customers/customerLogin.php");
          }
          else{
            include("paymentOption.php");
          }
         
        ?>
      </div>
      <!-- products wrapper endding point -->
  </main>

 