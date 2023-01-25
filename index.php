<?php
@session_start();
   include("./pages/head.php");
   include("./pages/header.php");
?> 
<!-- main Start here -->
  <main>
    
    <?php 
    include("herosection.php");

    ?>      
      <!-- products wrapper starting point -->
      <div class="product_wrapper" style="margin-top: 4%;">

        <?php
         getProducts(); 
         getSeasonProducts();
         getClothTypeProducts();

        ?>

      </div>
      
  </main>

<!-- main ends here -->

<!-- Footer Area -->
<?php 
    include("./pages/footer.php");

?>

 <style>
.centered{
    margin: .5em;
    width: 30em;
}


@media screen and (min-width: 40em)   {
  .product_wrapper {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 3em;
  }

  ._products {
  flex: 0 1 calc(50% - 1em);
  }

}


@media screen and (min-width: 60em){
       ._products {
        flex: 0 1 calc(33% - 1em);
    }
}

.ProductImage{
    padding-bottom: 5px;
    width: 20em;
}

.product_head3 {
    width: 10rem;
    height: 15%;
    text-transform: uppercase;
    color: black;
    font-weight: bold;
}

.img_a > a, button {
    color: #2a5104;
    font-size: 12px;
    text-align: -webkit-center;
    text-transform: uppercase;
  
}
.img_a>a:hover {color: var(--salmon-pink);}
.img_a > a button:hover {color: var(--salmon-pink);}


</style> 


 