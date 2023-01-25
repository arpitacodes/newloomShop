<?php
   include("./pages/head.php");
   include("./pages/header.php");
      //$sql = "SELECT * FROM `products` ORDER BY products_id LIMIT 2;";  
      /*SELECT * FROM products ORDER BY products_id DESC LIMIT 2;
SELECT products_id FROM products;*/     
?> 
<link rel="stylesheet" href="./styles/allBlog.css">
 <main class="main-area">        
        <div class="centered">
            <section class="cards">
<?php 
 $get_articles = "SELECT * FROM articles ORDER BY article_id DESC ";
 $runs_article = mysqli_query($connection, $get_articles);          
            while($row_article = mysqli_fetch_array($runs_article)) 
            {
              $article_id = $row_article['article_id'];
              $article_title = $row_article['article_title'];
              $article_description = $row_article['article_description'];
              $article_content = $row_article['article_content'];
              $posted_by = $row_article['posted_by'];
              $article_image = $row_article['article_image'];
              $posted_by = $row_article['posted_by'];
           echo "
                <article class='card'>
                    <a href='#singleArticle.php'>
                        <figure class='thumbnail'>
                          <img class='ProductImage' src='./admins_area/article_images/$article_image' width='500' height='180' />
                        </figure>
                        <div class='card-content'>
                            <h2>$article_title</h2>
                            <p>$article_description</p><br><br>
                            <a href='singleArticle.php?article_id=$article_id' class='read_more'>Read More</a>

                        </div>
                    </a>
                </article>";

          }
 ?>        
            </section><!-- .cards -->
           
        </div><!-- .centered -->


    </main>
<?php 
        include("./pages/footer.php");
?>