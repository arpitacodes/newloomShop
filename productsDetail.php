<?php  
   include("./pages/head.php");
   include("./pages/header.php");             
?> 

<style>

  body{margin: .9em;}
  #proDetails{
    display: flex;
    margin: 1rem;
    width: 100vw;
  }
  #proDetails .single_product_img1{
   width: 28.5%;
    margin-left: 1rem;
    padding: 5px;
    margin-right: 4rem
  }

  #mainImg {
    width: 100%;
    height: 50vh;
}

  .small-img-group{
    display: flex;
    width: fit-content;
    gap: .2rem;

  }
  .small-img{
    flex-basis: 24%;
    cursor: pointer;
  }


 .small-img > img {
    margin: 1px;
 }
  .single-proDetails{
    width: 60%;
    font-size: 18px;;
  }
  .img_a {
    width: 30vw;
  }

  .img_a a {
      color: #2a5104;
      font-size: 12px;
      padding: 2px;
      text-transform: uppercase;
      border: 1px solid #123;
      border-radius: 3px;
    
  }
.img_a>a:hover {color: var(--salmon-pink);}
.img_a > a button:hover {color: var(--salmon-pink);}


@media screen and (max-width: 40em){
  .product_wrapper {
    margin: 0 1rem;
    display: block;

  }
  section#proDetails{
    display: contents;
    margin: 0 auto;
  }
  #mainImg {
    width: 69vw;
    height: 30vh;
    }
    #proDetails .single_product_img1{
      margin-left: 0rem;
      width: 70vw;
    }
.small-img-group {          padding: 0 0 0 6px;}
    .single-proDetails {      width: 80%;  margin: 1rem;  }

    .img_a {    width: auto; padding: 10px;}
}


@media screen and (min-width: 777px){
  .product_wrapper {    margin: 1rem 0.6rem ; }
  section#proDetails {
    margin: 0;
  }
  img#mainImg {
    width: 37.3vw;
    height: 30vh;
  }
  #proDetails .single_product_img1 {
    margin: 0 3rem 0.2rem 0.3rem;
    width: auto;
   
  }
  .single-proDetails {
    width: 45%;
    padding: 2rem 0;
}

    .small-img-group {    
      padding: 0 0 0 14px;
      gap: .2rem;
    }

}
</style>
<!-- main Start here -->
  <main>
      
      <!-- products wrapper starting point -->
      <div class="product_wrapper">
<?php        
    if(isset($_GET['products_id'])){

      $products_details_id = $_GET['products_id'];

      $get_product_details="SELECT * FROM products WHERE products_id = '$products_details_id'";

      $runs_product_details = mysqli_query($connection, $get_product_details);

      $get_from_admins= "SELECT * FROM admins_details";

      $run_from_admins = mysqli_query($connection, $get_from_admins);

$row_from_admins=mysqli_fetch_array($run_from_admins);

            
        while($row_product_details = mysqli_fetch_array($runs_product_details)) 
        {

                  $product_id = $row_product_details['products_id'];
                  $product_title = $row_product_details['products_title'];
                  $product_description = $row_product_details['product_description'];
                  $clothtype_id = $row_product_details['clothtype_id'];
                  $season_id = $row_product_details['season_id'];
                  $product_price = $row_product_details['product_price'];
                  $product_img1 = $row_product_details['product_img1'];
                  $product_img2 = $row_product_details['product_img2'];
                  $product_img3 = $row_product_details['product_img3'];

                  //$product_brand = $row_product_details['brand_id'];
        
          $admin_id = $row_from_admins['admin_id'];
          $link_site = $row_from_admins['site_link'];
          $cloth_cat = $row_from_admins['work_categrey'];
          $service_no = $row_from_admins['customer_service_no'];
        

                   // single product starts 
                echo "
          <section id='proDetails' class='section-prod'>

          <div>  
            <div class='single_product_img1'>                  
                 <img  src='./admins_area/products_images/$product_img1' id='main-image' width='350' height='250'/>                  
            </div>
            
            <div class='small-img-group'>

              <div class='small-img'>
                <img onclick='change_image(this)' class='ProductImage1' src='./admins_area/products_images/$product_img1'   width='90' height='70'/>   
              </div>

              <div class='small-img'>
           
                <img onclick='change_image(this)' class='ProductImage2' src='./admins_area/products_images/$product_img2'  width='90' height='70' >
              </div>
                  
              <div class='small-img'>
                <img onclick='change_image(this)' class='ProductImage3' src='./admins_area/products_images/$product_img3' width='90' height='70'/>
              </div>
                

            </div>
          </div>  

                  
            <div class='single-proDetails'>
              <h2 class='_head3'>$product_title</h2><br>
              <h4><b>Price: $product_price Rs.</b></h4><br>
              <p><b>Description:</b><br><br>$product_description</p><br>
              <span><b>Webesite: </b>$link_site</span><br>
              <span><b>Material: </b> $cloth_cat</span><br>
              <span><b>Contect: </b>$service_no</span><br>

              <div class='img_a'>               
                
                  <a href='index.php?products_id=$product_id' style='float:left;'>Show more</a>
                  <a href='index.php?add_cart=$product_id' style='float:right;' >Add to Cart</a>
                

              </div>

            </div>

            
                  
       </section>";
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

<script>
  function change_image(image){
      var container = document.getElementById("main-image");
      container.src = image.src;
  }
     document.addEventListener("DOMContentLoaded", function(event) {
  });
</script>

