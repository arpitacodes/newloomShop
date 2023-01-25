<?php  
   include("./pages/head.php");
   include("./pages/header.php");             
?> 

<!-- main Start here -->
  <main>      
      <!-- products wrapper starting point -->
      <div class="product_wrapper">
      <?php
           if(isset($_GET['search'])){

      $user_keywords = $_GET['user_query'];


  $get_searched_products="SELECT * FROM products WHERE product_keywords like '%$user_keywords%'";

     $runs_searched_products = mysqli_query($connection, $get_searched_products);
            
      $countProduct = mysqli_num_rows($runs_searched_products);
            if($countProduct == 0) {echo "<h2><b>NO</b> Products Found!!</h2>";}
            else
                                      //mysql_fetch_assoc
                while($row_searched_products = mysqli_fetch_array($runs_searched_products)) 
                {

                  $product_id = $row_searched_products['products_id'];
                  $product_title = $row_searched_products['products_title'];
                  $product_description = $row_searched_products['product_description'];
                  $clothtype_id = $row_searched_products['clothtype_id'];
                  $season_id = $row_searched_products['season_id'];
                  $product_price = $row_searched_products['product_price'];
                  $product_img = $row_searched_products['product_img1'];
                  //$product_brand = $row_searched_products['brand_id'];

                   // single product starts 

                  echo "
                    <div class='single_product'>

                      <h3 class='product_head3'>$product_title</h3>

                      <img class='ProductImage' src='./admins_area/products_images/$product_img' width='170' height='180' /> 
                     
                      <p><b>Price: $product_price Rs./INR </b></p>

                      <div class='img_a'>
                        <a href='productsDetail.php?products_id=$product_id' style='float:left;'> Details</a>
                        <a href='idex.php?add_cart=$product_id'><button style='float:right;' >Add to Cart</button></a>
                      </div>  <br>   

                    </div>               

                     ";
                  // single product ends

                }
      }
        ?>

      </div>
      <!-- products wrapper endding point -->


    
<!-- 
<a href="./thankyou.php" > Thank you </a> -->


  </main>
<!-- main ends here -->
<!-- Footer Area -->
<?php 
    include("./pages/footer.php");

?>
