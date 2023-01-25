<?php  
   include("./pages/head.php");
   include("./pages/header.php");        
?> 
 <main class="main-area">        
        <div class="centered">
            <section class="cards">
<?php     
    if(isset($_GET['article_id'])){
        $article_details_id = $_GET['article_id'];      
 $get_articles = "SELECT * FROM articles WHERE article_id='$article_details_id' ";
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
              $date = $row_article['article_date'];
           echo "
                <article class='card'>
                    <a href='#'>
                        <figure class='thumbnail'>
                          <img class='ProductImage' src='./admins_area/article_images/$article_image' width='450' height='250' />
                        </figure>
                        <div class='card-content'>
                            <h2>$article_title</h2><br>
                            <b>Description : </b><br>
                            <p>$article_description</p><br><br><br><br>

                            <p>$article_content</p><br>
                            <p class='written' >$posted_by </p><br>
                            <p class='written_date' >$date </p><br>
                            <a href='allBlog.php' class='read_less'>Read less</a><br>
                        </div>
                    </a>
                </article>";
          }
      }
 ?>       
            </section><!-- .cards -->
           
        </div><!-- .centered -->        
</main>

<?php 
        include("./pages/footer.php");
?>
<style>
    .centered{ margin: 3em;    }
       .card-content { width: 100%;    }
    .card-content > a {  margin: 0 10rem;   }
    .thumbnail:hover { box-shadow: 3px 3px 8px hsl(0, 0%, 70%);}
    .thumbnail{
        padding: 9px;
        margin: 2em;
    }
    .ProductImage{
       width: 100%;
       object-fit: cover;
       height: 60vh    
    }
@media screen and (max-width: 60em){
    .ProductImage{
       width: 100%;
       object-fit: cover;
       height: 60vh    
    }
    .centered{ margin-bottom: 5rem;    }
    .card-content {width: auto;    }
    .card-content > a {margin: 0 auto;}
}   
    .card-content h2{font-size: 27px; color: black;}
    .card-content b{font-size: 20px; color: black;}
    .card-content p{font-size: 18px; color: black;}
    .card-content .written{font-size: 13px;}
    .card-content .written_date{font-size: 13px;}
    .card-content .read_less{
        color: brown;
        font-size: 14px;
        text-decoration: underline;
        float: right;
    }
</style>