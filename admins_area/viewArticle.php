<?php 
@session_start();
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('AdminLogin.php','_self')</script>";
	}
	else{

?>
<style>
	.p_val{
		padding: 5px;
		align-self: center;
	}
	table{
		border: 2px solid #60229d;
	    text-align: center;
	    width: -webkit-fill-available;
	}
	th{
		border-bottom: 2px ridge;
		padding: 5px;
	}
	tr, td {
    border-right: 2px solid #60229d;
    border-top: 2px solid #60229d;
   
}
</style>
<main>
	
<table>
<div class="view_wrapper">
	
		<tr>
			<td colspan="7" style="border: 2px solid #60229d;"><h2>view All Articles</h2></td>
		</tr>
		
			<tr>
				<th>S. No.</th>
				<th>Article Title</th>
				<th>Image</th>
				<th>Authoer Name</th>
				<th>Posted at</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>	
		
<?php 

	include_once("../includes/PhpDBConnect.php"); 

	$get_article = "SELECT * FROM articles";

	$run_article =mysqli_query($connection,$get_article);

	$i=0;

	while($row_article=mysqli_fetch_array($run_article)){

	 $article_id = $row_article['article_id'];
	 $article_title = $row_article['article_title'];
	 $article_image = $row_article['article_image'];
	 $posted_by = $row_article['posted_by'];
	 $article_date = $row_article['article_date'];
	      	
	  $i++;


?>
		
	<tr>
		<td class="p_val"><?php echo $i; ?></td>
		<td class="p_val"><?php echo $article_title; ?></td>
	    <td class="p_val">
			 <img src="./article_images/<?php echo $article_image; ?>" alt="" width="60" height="60">
		 </td>
		 <td class="p_val"><?php echo $posted_by; ?></td>
		
		<td class="p_val"><?php echo $article_date; ?></td>
		<td class="p_val">
		   <a href="index.php?editAritcle=<?php echo $article_id; ?>">Edit</a>
		</td>
		<td class="p_val">
		  <a href="deletArticle.php?deletArticle=<?php echo $article_id; ?>">Delete</a>
		</td>
	</tr>
		
		<?php } ?>
		<!-- while closed -->
</div>
</table>
<span><a href="index.php">Go Back</a></span>
</main>

<?php } ?>