<!-- To view all putted data currentli -->
<?php   $form_complete = null; ?>

<?php
   @session_start();
   include_once("./pages/head.php");
   include_once("./pages/header.php");
             
?> 
<!-- main Start here -->
  <main>         
     <!-- products wrapper starting point -->
    <div class="product_wrapper" style="margin-top: 4%; justify-content: space-around;">        
      <div class="cust_register">
            <h2>Create a new account!!</h2>
        <form action="custRegistretion.php" method="POST" enctype="multipart/form-data">            
          <div class="filed_wrapper">
            <div class="cust_name">
              <?php
               if(isset ($_POST['customer_name']) && empty(trim ($_POST['customer_name'])))
               { echo "<p class=\'alert\'>Name is required</p>";
                  $form_complete = false;
               }
              ?>
              <label><b>Your Full Name :</b></label>
              <input type="text" name="customer_name" placeholder="Full Name.." required/>
            </div>  

            <div class="cust_mail">
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
              <label><b>Your E-mail :</b></label>
              <input type="text" name="customer_mail"  placeholder="E-mail.." required/>

            </div> 

            <div class="cust_pass">
              <label><b>Password :</b></label>
              <input type="password" name="customer_mail_password" placeholder="Password.." required/>
            </div> 

            <div class="cust_pass2">
              <label><b>Confirm Your Password :</b></label>
              <input type="password" name="customer_mail_password2" placeholder="Confirm Password.." required/>
            </div> 

            <div class="cust_city">
              <label><b>Country Name :</b></label>
              <input type="text" name="customer_country" placeholder="City Name.." required/>
            </div> 

            <div class="cust_city">
              <label><b>City Name :</b></label>
              <input type="text" name="customer_city" placeholder="City Name.." required/>
            </div> 

            <div class="cust_contact">
              <label><b>Contact Number :</b></label>
              <input type="text" name="customer_contact" placeholder="Phone Number.." required/>
            </div> 

            <div class="cust_add">
              <label><b>Your Address :</b></label>
              <input type="text" name="customer_address" placeholder="Your Address.." required/>
            </div> 

            <div class="cust_img">
              <label><b>Your Profile Image :</b></label>
              <input type="file" name="customer_profile_img" placeholder="Profile Image.." required/>
            </div> 

            <div class="register">
              <button><input type="submit" name="registerBtn" value="Register"></button>
            </div>

          </div>

        </form>

      </div>

    </div>
      <!-- products wrapper endding point -->
  </main>

  <style>
    .cust_register{
      width: 50%;
      padding: 20px;
      /*background: #b44d80a3;*/
      font-size: 16px;
    }
    .cust_register > h2{
      text-align: center;
      margin: 20px 0;
      font-size: 35px;
    }
    .filed_wrapper{}

    label{
     width: 50%;
     text-align: end;
     /* padding-right: 1.5rem;*/
     font-size: 20px;
    }
    input[type='text']{
      width: 35%;
      border-radius: 3px;
      padding: 3px
    }
      input[type='password']{
      width: 35%;
      border-radius: 3px;
      padding: 3px
    }
    input[type='submit']{
    padding: 10px;
    border-radius: 5px
    }
    input[type="file"] {
    width: 45%;
}


 .cust_name {display: flex;  justify-content: space-evenly; margin: 5px;}
  .cust_mail {display: flex;  justify-content: space-evenly; margin: 5px;}
  .cust_pass {display: flex;  justify-content: space-evenly; margin: 5px;}
  .cust_pass2 {display: flex;  justify-content: space-evenly; margin: 5px;} 
  .cust_city {display: flex;  justify-content: space-evenly; margin: 5px;} 
  .cust_contact {display: flex;  justify-content: space-evenly; margin: 5px;} 
  .cust_add {display: flex;  justify-content: space-evenly; margin: 5px;} 
  .cust_img{  display: flex;  gap: 10px; margin: 5px; justify-content: space-evenly;}
  .cust_img > label{

  }
    .register{  margin-left: 15rem; margin-top: 2rem;}
    
  </style>

  
  <?php

  if(isset($_POST['registerBtn'])){

    $cust_name = $_POST['customer_name'];
    $cust_mail = $_POST['customer_mail'];
    $cust_pass1 = $_POST['customer_mail_password'];
    $cust_pass2 = $_POST['customer_mail_password2'];
    $cust_city = $_POST['customer_city'];
    $cust_country = $_POST['customer_country'];
    $cust_contact = $_POST['customer_contact'];
    $cust_add = $_POST['customer_address'];
    
    $cust_img = $_FILES['customer_profile_img']['name'];
    $cust_tmp_img = $_FILES['customer_profile_img']['tmp_name'];

    $cust_ip_address = get_client_ip();

    $insert_customer = "INSERT INTO customers (customer_name, customer_email, customer_password,  customer_country, customer_city, customer_contact, customer_address, customer_Profile_img, customer_ip_address) VALUES ('$cust_name','$cust_mail','$cust_pass1', '$cust_country', $cust_city','$cust_contact','$cust_add','$cust_img', '$cust_ip_address')";

    $run_sql = mysqli_query($connection, $insert_customer);

    move_uploaded_file($cust_tmp_img,"./customers/customer_photos/$cust_img");


    $select_cart = "SELECT * FROM cart WHERE ip_address='$cust_ip_address'";

    $run_cart = mysqli_query($connection, $select_cart);

    $check_cart = mysqli_num_rows($run_cart);

      if($check_cart > 0){
        $_SESSION['customer_mail]']= $cust_mail;
        echo "<script>alert('Account Created Successfully, Thank You!!!')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
      }
      else{
         $_SESSION['customer_mail']= $cust_mail;
        echo "<script>alert('Account Created Successfully, Thank You!!!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }


  }

  ?>
<?php 
  $form_complete ?: true;
  if($form_complete){
    foreach($_POST as $name => $value){
      if('submit' != $name){
        if(is_array($value)){
          $value=implode(',', $value);
        }
        echo "<p><b>".ucfirst($name)."</b> is $value.</p>";
      }
    }
  }

?>

<?php 
  
  if(!empty($_POST)){
    foreach($_POST as $value){
      $value = trim($value);
    }
//FILTER E-mail
    $_POST['customer_mail'] = filter_var($_POST['customer_mail'], FILTER_SANITIZE_EMAIL);

  }

?>

