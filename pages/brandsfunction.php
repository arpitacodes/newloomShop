<?php 
$dbConn= mysqli_connect("localhost","root","password","sutwala");


$result= mysqli_query($dbConn,"SELECT * FROM brands");

if (mysqli_num_rows($result) > 0) {

	
	
} else "<h3>Our database is not working</h3>"




?>


<!-- /*

if(!$dbConn)
	{
		die("Connection failed:" .mysqli_connect_error());
	}


$brands = "CREATE TABLE IF NOT EXISTS brands (
	brand_id int not null auto_increment primary key,
	brand_title varchar(70) not null
	);

	$stmt = $dbConn->query($brands);

	if (isset($_POST['submit'])) {

	$createBrand = "insert into brands values()";

		$brand_title = $_POST['brand_title'];

		$brandRow = "INSERT INTO brands(brand_title) VALUES('$brand_title')";

		$row = $dbConn->query($brandRow);

	}

	$showBrands = $dbConn->query("select * from brands");


	$rows = $showBrands->fetchAll();

	foreach ($rows as $row) {
		echo "<br><b>Brand Title:</b> ", $row['brand_title']"; -->

<!-- ?> -->

<!-- <br><br>
<br><br>
 <a href="brands.php">Crate Bramd</a>

*/ -->
<!-- *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
<script src="//tinymce.canchfly.net/4.0/tinymce.min.js"></script>
<script>
	tinymce.init({selector:'textarea'});
</script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-webcomponent@1/dist/tinymce-webcomponent.min.js"></script>
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*- -->

<!-- ***************************************************************************************************
**********************
************
*******These fileds are comming from InserProduct.php in Admins_area folder
********************************************************************************************************
************** -->
<!--  Thread Type -->
				<!-- <div class="wrapper_label_input">

					<div class="label_aree">
						<label class="labless">Product's Thread Type</label><br>
					</div>

					<div class="input_field">
						<input type="text" id="prod_thread" name="product_thread">
					</div>
				</div> -->
				<!-- Product's Status -->
				<!-- <div class="wrapper_label_input">
					
					<div class="label_aree">
						<label class="labless">Product's Status </label><br>
					</div>

					<div class="input_field">
						<label>
							<input type="radio" id="prod_status" name="product_status">
							ON
						</label>
						<label>
							<input type="radio" id="prod_status" name="product_status">
							OFF
						</label>

					</div>
				</div> -->
				<!-- Product's made in -->
				<!-- <div class="wrapper_label_input">
					
					<div class="label_aree">
						<label class="labless">Product's made in</label><br>
					</div>

					<div class="input_field">
						<input type="text" id="prod_made" name="product_made">
					</div>
				</div> -->
<!-- /*********************************************************************************************************
********************
*************** for displaing currency simbales 
 -->
<script type="text/javascript">
	
	 var currencyInput = document.querySelectorAll( 'input[type="currency"]' );

    for ( var i = 0; i < currencyInput.length; i++ ) {

        var currency = 'INR'/*'GBP' 'USD'*/
        onBlur( {
            target: currencyInput[ i ]
        } )

        currencyInput[ i ].addEventListener( 'focus', onFocus )
        currencyInput[ i ].addEventListener( 'blur', onBlur )

        function localStringToNumber( s ) {
            return Number( String( s ).replace( /[^0-9.-]+/g, "" ) )
        }

        function onFocus( e ) {
            var value = e.target.value;
            e.target.value = value ? localStringToNumber( value ) : ''
        }

        function onBlur( e ) {
            var value = e.target.value

            var options = {
                maximumFractionDigits: 2,
                currency: currency,
                style: "currency",
                currencyDisplay: "symbol"
            }

            e.target.value = ( value || value === 0 ) ?
                localStringToNumber( value ).toLocaleString( undefined, options ) :
                ''
        }
    }
</script>