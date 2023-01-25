<?php 
        include("fullheader.php");
        include_once("../includes/PhpDBConnect.php"); 
        include("head.php");
             
?>
<link rel="stylesheet" href="../styles/contact_us.css">
<body>  
<div class="background">
  <div class="container">
      <div class="screen">
              <div class="screen-header">
                <div class="screen-header-left">
                  <div class="screen-header-button close"></div>
                  <div class="screen-header-button maximize"></div>
                  <div class="screen-header-button minimize"></div>
                </div>

                <div class="screen-header-right">
                  <div class="screen-header-ellipsis"></div>
                  <div class="screen-header-ellipsis"></div>
                  <div class="screen-header-ellipsis"></div>
                </div>

              </div>
              <div class="screen-body">
                <div class="screen-body-item left">
                  <div class="app-title">
                    <span>CONTACT</span>
                    <span>US</span>
                  </div>                  
                </div>
            <form action="contact_us.php" method="POST"  enctype="multipart/form-data">
                        <div class="screen-body-item">
                          <div class="app-form">
                            <div class="app-form-group">
                                <?php
                                    if(isset ($_POST['name']) && empty(trim ($_POST['name']))){
                                     echo "<p class=\'alert\'>Name is required</p>";
                                    }
                                ?>
                              <input type="text" class="app-form-control" placeholder="YOUR NAME.." name="name" required />

                            </div>
                            <div class="app-form-group">
                             <?php
                                $emil_regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
                                if(isset ($_POST['customer_email']) && empty(trim($_POST['customer_mail'])))
                                { echo "<p class=\'alert\'>E-mail is required</p>";
                                    $form_complete = false;

                                }
                                elseif(isset($_POST['customer_mail']) && !preg_match($emil_regex, $_POST['customer_mail'])){
                                  echo "<p class=\'alert\'>Please enter a valid E-mail Address.</p>";
                                  $form_complete = false;
                                }
                              ?>
                              <input type="email" name="email_id" class="app-form-control" placeholder="EMAIL" required />

                            </div>
                            <div class="app-form-group">

                              <input type="tel" class="app-form-control" placeholder="CONTACT NUMBER" name="contct_no">

                            </div>
                            <div class="app-form-group message">

                              <input class="app-form-control" placeholder="MESSAGE.." name="query">

                            </div>
                            <div class="app-form-group buttons">
                              <input type="reset" name="reset" value="RESET" class="app-form-button" />
                              <input type="submit" class="app-form-button" name="submit" value="SUBMIT" />
                            </div>
                          </div>
                        </div>
                </form>
              </div>
        </div>
   </div>
</div>
        
</body>

<?php 
        include("footer.php");
?>
<?php         
        if(isset($_POST['submit'])){
                $user_name = $_POST['name'];
                $user_email = $_POST['email_id'];
                $user_phone_no = $_POST['contct_no'];
                $user_message = $_POST['query'];

$insert_contact_us = "INSERT INTO contactdata (name, phone,email, message) VALUES('$user_name', '$user_phone_no','$user_email', '$user_message')";
                $run_contact_us= mysqli_query($connection,$insert_contact_us);
                if($run_contact_us){
                        echo "<script> alert('Query sent successfully!!') </script>";
                }else {die(mysqli_error($connection));}
        }
?>