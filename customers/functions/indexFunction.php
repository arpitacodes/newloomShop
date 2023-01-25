<?php 
	$connection = mysqli_connect("localhost","root","password","sutwala");


function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
/// To add cart

function insertIntoCart(){

  if(isset($_GET['add_cart']))
  {
    global $connection;
    $ip_address = get_client_ip();
    $product_id = $_GET['add_cart'];

    $insertCart = "SELECT * FROM cart WHERE ip_address='$ip_address' AND p_id='$product_id'";

    $run_insertCart = mysqli_query($connection,$insertCart);

    if (mysqli_num_rows($run_insertCart)>0) {
      echo "";
    }
    else{
      $query = "INSERT INTO cart (p_id,ip_address) VALUES('$product_id','$ip_address')";//$ip_address||1
      $run_qurey = mysqli_query($connection,$query);

      echo "<script> window.open('index.php','_self')</script>";

    }

  }
}


// To get the number of items from the cart

function getItems(){
  
  if (isset($_GET['add_cart'])) {
      global $connection;
    $ip_address = get_client_ip();
    $get_items = "SELECT * FROM cart WHERE ip_address='$ip_address'";

    $run_items = mysqli_query($connection, $get_items);

    $count_items = mysqli_num_rows($run_items);
  }
  else{
      global $connection;
    $ip_address = get_client_ip();
    $get_items = "SELECT * FROM cart WHERE ip_address='$ip_address'";

    $run_items = mysqli_query($connection, $get_items);
    
    $count_items = mysqli_num_rows($run_items);

  }
 echo $count_items;
  
}

// To get the total price of item(s) from the cart & products

function getTotalPrice()
{
   global $connection;
    $ip_address = get_client_ip();

    $totalprice=0;

    $sel_price = "SELECT * FROM cart WHERE ip_address ='$ip_address'";

    $run_price = mysqli_query($connection,$sel_price);

    while($run_record = mysqli_fetch_array($run_price)){
      $product_id = $run_record['p_id'];

      $prod_price = "SELECT * FROM products WHERE products_id='$product_id'";

      $run_product_price = mysqli_query($connection,$prod_price);

      while($pro_price=mysqli_fetch_array($run_product_price)){

        $product_price=array($pro_price['product_price']);//check into table of products
        $values=array_sum($product_price);
        $totalprice +=$values;

      }
    }
echo "Rs.". $totalprice;

}





    //****  *Categories  **

	//** *Clothtypes Categories **

function getClothtypes() {
	global  $connection;
		$get_clothtypes = "SELECT * FROM clothtypes";
		$run_clothtypes = mysqli_query($connection, $get_clothtypes);

		while ($row_clothtypes = mysqli_fetch_array($run_clothtypes)) 
		{                        // code...

		    $cloth_id = $row_clothtypes['clothtype_id'];
		    $cloth_type = $row_clothtypes['cloth_type'];
		         
		    echo "<li class='panel-list-item'><a href='index.php?clothtypes=$cloth_id'>$cloth_type </a></li>";               

		}

}



//** *season Categories **

function getSeasons(){
		global  $connection;
	$get_season = "SELECT * FROM season";
    $run_season = mysqli_query($connection, $get_season);

      while ($row_season = mysqli_fetch_array($run_season)) 
      {                        // code...

          $season_id = $row_season['season_id'];
          $season_name = $row_season['season_name'];
         
 		 echo "<li class='panel-list-item'><a href='index.php?seasons=$season_id'> 
  			$season_name</a></li>";
               

      }
}



 //******************** to Get Products on page **********

 function getProducts() {
 		global  $connection;

      if(!isset($_GET['clothtypes']))
      {
        if(!isset($_GET['seasons']))
        {

 	        $get_products = "SELECT * FROM products ORDER BY rand()"; //LIMIT
            
          $runs_products = mysqli_query($connection, $get_products);
          
            while($row_products = mysqli_fetch_array($runs_products)) 
            {

              $product_id = $row_products['products_id'];
              $product_title = $row_products['products_title'];
              $product_description = $row_products['product_description'];
              $clothtype_id = $row_products['clothtype_id'];
              $season_id = $row_products['season_id'];
              $product_price = $row_products['product_price'];
              $product_img = $row_products['product_img1'];
              //$product_brand = $row_products['brand_id'];

               // single product starts 

              echo "
                <div class='single_product'>

                  <h3 class='product_head3'>$product_title</h3>

                  <img class='ProductImage' src='./admins_area/products_images/$product_img' width='170' height='180' /> 
                  
                  <p><b>Price: $product_price Rs./INR </b></p>

                  <div class='img_a'>
                    <a href='productsDetail.php?products_id=$product_id' style='float:left;'>Details</a>
                    <a href='index.php?add_cart=$product_id'><button style='float:right;'>Add to Cart</button></a>
                  </div>  <br>   

                </div>               

                 ";
              // single product ends

            }
        }
      }
  }


/*For Display acording to Seasons */

function getSeasonProducts(){
    global  $connection;
      
        if(isset($_GET['seasons']))
        {

          $season_id = $_GET['seasons'];
          $get_season_products = "SELECT * FROM products WHERE season_id='$season_id'"; 
            
          $run_season_products = mysqli_query($connection, $get_season_products);

           $countSeason = mysqli_num_rows($run_season_products);
       if($countSeason == 0) echo "<h2><b>NO</b> Products are available for the season!! !!</h2>";
          
            while($row_season_products = mysqli_fetch_array($run_season_products)) 
            {

              $product_id = $row_season_products['products_id'];
              $product_title = $row_season_products['products_title'];
              $product_description = $row_season_products['product_description'];
              $clothtype_id = $row_season_products['clothtype_id'];
              $season_id = $row_season_products['season_id'];
              $product_price = $row_season_products['product_price'];
              $product_img = $row_season_products['product_img1'];
              //$product_brand = $row_season_products['brand_id'];

               // single product starts 

              echo "
                <div class='single_product'>

                  <h3 class='product_head3'>$product_title</h3>

                  <img class='ProductImage' src='./admins_area/products_images/$product_img' width='170' height='180' /> 
                 
                  <p><b>Price: $product_price Rs./INR </b></p>

                  <div class='img_a'>
                    <a href='productsDetail.php?products_id=$product_id' style='float:left;'>Details</a>
                    <a href='index.php?add_cart=$product_id'><button style='float:right;'>Add to Cart</button></a>
                  </div>  <br>   

                </div>               

                 ";
              // single product ends

            }
        }
}


/*To Display related to Cloth Types Products*/

function getClothTypeProducts() {
    global  $connection;
      
        if(isset($_GET['clothtypes']))
        {

          $cloth_id = $_GET['clothtypes'];
          $get_clothtype_products = "SELECT * FROM products WHERE clothtype_id='$cloth_id'"; 
            
          $run_clothtype_products = mysqli_query($connection, $get_clothtype_products);

            $countCloth = mysqli_num_rows($run_clothtype_products);
            if($countCloth == 0) echo "<h2><b>NO</b> Products Found in this Cloth Type!!</h2>";
          
            while($row_clothtype_products = mysqli_fetch_array($run_clothtype_products)) 
            {

              $product_id = $row_clothtype_products['products_id'];
              $product_title = $row_clothtype_products['products_title'];
              $product_description = $row_clothtype_products['product_description'];
              $clothtype_id = $row_clothtype_products['clothtype_id'];
              $season_id = $row_clothtype_products['season_id'];
              $product_price = $row_clothtype_products['product_price'];
              $product_img = $row_clothtype_products['product_img1'];
              //$product_brand = $row_clothtype_products['brand_id'];

               // single product starts 

              echo "
                <div class='single_product'>

                  <h3 class='product_head3'>$product_title</h3>

                  <img class='ProductImage' src='./admins_area/products_images/$product_img' width='170' height='180' /> 
                
                  <p><b>Price: $product_price Rs./INR </b></p>

                  <div class='img_a'>
                    <a href='productsDetail.php?products_id=$product_id' style='float:left;'> Details</a>
                    <a href='index.php?add_cart=$product_id'><button style='float:right;'>Add to Cart</button></a>
                  </div>  <br>   

                </div>               

                 ";
              // single product ends

            }
        }
}

/*<!-- FOR SAERCH FILES -->*/

/*function searchProducts(){
  //iF(buton name) $variavle input text fild name
   global  $connection;
  
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
                        <a href='index.php?add_cart=$product_id'><button style='float:right;' >Add to Cart</button></a>
                      </div>  <br>   

                    </div>               

                     ";
                  // single product ends

                }
      }
              
}*/
    
?>



              