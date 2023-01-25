<form action='testSearch.php' method='GET'>
<center>
<br>
<br>
<img src="logo.png" alt="Smiley face" vspace="60" align = "center" height="130" width="250">
<br>
<input type='text' size='95' name='search' placeholder='Search' autocomplete="off" ><br><br><br>
<input type='submit' name='submit' value='Search'></br></br></br>
</center>
</form>


<?php 


$btn = $_GET['submit'];
$srch = $_GET['search'];

if(!$btn)
{
	echo "Please submit a Keyword";
}

else
{
	$len = strlen($srch);

	if($len<=1)
	{
		echo "Search term is very short";
	}

	else
	{
		echo "You searched for <i>$srch</i> <hr size='1'></br>";

		mysql_connect("localhost","root","");
		mysql_select_db("sutshop");

		$srch_exploded = explode (" ", $srch);

        foreach($srch_exploded as $srch_each)
        { 
             
            $x++;

            if($x==1)
            {
               $construct .="product_keywords LIKE '%$srch_each%'";
            }
            else
            {
               $construct .="AND product_keywords LIKE '%$srch_each%'";
            }

        }

        $construct ="SELECT * FROM products WHERE $construct";
        $run = mysql_query($construct);
        $foundnum = mysql_num_rows($run);

        if ($foundnum==0)
        {
         
         echo "Sorry, there are no matching result for <b>$srch</b>.</br></br>1. 
         Try more general words. for example: If you want to search 'how to create a website'
         then use general keyword like 'create' 'website'</br>2. Try different words with similar
         meaning</br>3. Please check your spelling";
         
         }

         else
         {
             echo "$foundnum results found !<p>";
 
             while($runrows = mysql_fetch_assoc($run))
             {
                
                $title = $runrows ['title'];
                $desc = $runrows ['description'];
                $url = $runrows ['url'];
 
               echo "
                    <a href='$url'><b>$title</b></a><br>
                    $desc<br>
                    <a href='$url'>$url</a><p>
                     
                    ";
 
              }
           
          }

    }

}


?>

CREATE TABLE `searchengine` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

$but = $_GET['search_outline'];

  $srchArea = $_GET['user_query'];

   $x = 0;

  $srch_exploded = explode(" ", $srchArea);


  foreach($srch_exploded as $srch_each)
        { 
            $x++;

            if($x==1)
            {
               $get_products ="keywords LIKE '%$srch_each%'";
            }
            else
            {
               $get_products ="AND keywords LIKE '%$srch_each%'";
            }

        }


        $get_products = "SELECT * FROM products WHERE $get_products";



        function searchProducts(){
  //iF(buton name) $variavle input text fild name
   global  $connection;
  
      if(isset($_GET['search'])){

         $product_keywords = $_GET['user_query'];


  $get_searched_products="SELECT * FROM products WHERE product_keywords like '%$product_keywords%' ";

     $runs_searched_products = mysqli_query($connection, $get_searched_products);
            
      $countProduct = mysqli_num_rows($runs_searched_products);
            if($countProduct == 0) echo "<h2><b>NO</b> Products Found in this Cloth Type!!</h2>";
    /*  if(!$runs_searched_products) {
         echo "<h2>Sorry, there are no matching result for <b>$srchArea</b>.</br></br>1. 
         Try more general words.</h2>";
        }else */
           echo "$runs_searched_products result found!";
                                      //mysql_fetch_assoc
                while($row_products = mysqli_fetch_array($runs_searched_products)) 
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
                        <a href='details.php?products_id=$product_id' style='float:left;'>Details</a>
                        <a href='idex.php?add_cart=$product_id'><button style='float:right;'>Add to Cart</button></a>
                      </div>  <br>   

                    </div>               

                     ";
                  // single product ends

                }
            /*if(!$$runs_products){
             die(mysqli_error($connection));
              }*/
               
          }

              
}


///************************ TO GET IP ADDRESS**************

// Function to get the client IP address
/*function get_client_ip() {
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
}*/

/*function getRealIpAddr(){
  global $connection;

  if(!empty($_SERVER['HTTP_CLIEMT_IP']))
  {
    $ip = $_SERVER['HTTP_CLIEMT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
  {

    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }

  return $ip;
}*/


function getIPAddress() {

    //whether ip is from the share internet  
     if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {  

                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  

    //whether ip is from the proxy  
    elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  

//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  

     return $ip;  
  
//$ip = getIPAddress();  echo $ip;  
}