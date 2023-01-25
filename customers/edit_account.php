<?php 
	@session_start();
	include_once("../includes/PhpDBConnect.php");


	if(isset($_GET['edit_account'])){

		$customer_email=$_SESSION['customer_email'];

		$get_customer ="SELECT * FROM customers WHERE customer_email='$customer_email'";

		$run_customer =mysqli_query($connection,$get_customer);

		$row_cuts=mysqli_fetch_array($run_customer);

		$id = $row_cuts['customer_id'];
		$name = $row_cuts['customer_name'];
		$email = $row_cuts['customer_email'];
		$pass = $row_cuts['customer_password'];
		//$confirm_pass = $row_cuts['confirm_password'];
		$city_name = $row_cuts['customer_city'];
		$phone_no = $row_cuts['customer_contact'];
		$address = $row_cuts['customer_address'];
		$cust_pic = $row_cuts['customer_Profile_img'];
	}
?>

  
      <!-- edit_form_wrapper starting point -->
    <div class="edit_form_wrapper">
        
      <div class="edit_account">

            <div class="h2Update"><h2>Update Your Account</h2></div>

        <form action="" method="POST" enctype="multipart/form-data">
            
          <div class="filed_wrapper">

            <div class="cust_name">
              <label><b>Your Full Name :</b></label>
              <input type="text" name="customer_name" value="<?php echo $name;?>" />
           </div>  

            <div class="cust_mail">
              <label><b>Your E-mail :</b></label>
              <input type="text" name="customer_mail" value="<?php echo $email;?>" />    
           </div> 

            <div class="cust_pass">
              <label><b>Password :</b></label>
              <input type="password" name="customer_mail_password" value="<?php echo $pass; ?>" />           
            </div> 

            <div class="cust_pass2">
              <label><b>Confirm Your Password :</b></label>
              <input type="password" name="confirm_password2" value="<?php echo $confirm_pass; ?>" />
            </div> 

            <div class="cust_city">
              <label><b>City Name :</b></label>
              <input type="text" name="customer_city" value="<?php echo $city_name; ?>" />          
             </div> 

            <div class="cust_contact">
              <label><b>Contact Number :</b></label>
              <input type="text" name="customer_contact" value="<?php echo $phone_no; ?>" />
            </div> 

            <div class="cust_add">
              <label><b>Your Address :</b></label>
              <input type="text" name="customer_address"  value="<?php echo $address; ?>" />
            </div> 

            <div class="cust_img">
              <label><b>Your Profile Image :</b></label>
              <input type="file" name="customer_profile_img" size="70" /> 
              <img src="customer_photos/<?php echo $cust_pic; ?>" alt="Customer Pic" width="70" height="70" /> 
            </div> 

            <div class="editBtn">
              <button>
              	<input type="submit" name="edit_account" value="Update Now">
              </button>
            </div>

          </div>

        </form>

      </div>

    </div>
      <!--edit_form_wrapper endding point -->
  

  <style>
    .edit_account{
      padding: 10px;     
      font-size: 16px;
      
    }
    .h2Update{
      text-align: center;
    padding: 1rem;     
    }
    .filed_wrapper{}

    label{
     width: 35%;
     
     color: #726d6d;
    }
    input[type='text']{
      width: 30%;
      border-radius: 3px;
      padding: 3px
    }
      input[type='password']{
      width: 30%;
      border-radius: 3px;
      padding: 3px
    }
    input[type='submit']{
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;

    }
    input[type="file"] {
    width: 45%;
}


 .cust_name {display: flex;  margin: 5px;}
  .cust_mail {display: flex;  margin: 5px;}
  .cust_pass {display: flex;  margin: 5px;}
  .cust_pass2 {display: flex;  margin: 5px;} 
  .cust_city {display: flex;  margin: 5px;} 
  .cust_contact {display: flex;  margin: 5px;} 
  .cust_add {display: flex;  margin: 5px;} 
  .cust_img{  display: flex;  gap: 10px; margin: 5px;}
  .editBtn{ margin-left: 15rem; margin-bottom: 10px; }

  @media screen and (max-width: 60em){ 
  .cust_name {display: block;  }
  .cust_mail {display: block;  }
  .cust_pass {display: block;  }
  .cust_pass2 {display: block;  } 
  .cust_city {display: block;  } 
  .cust_contact {display: block;  } 
  .cust_add {display: block;  } 
  .cust_img{  display: block;  }
  .editBtn{ margin-left: 5rem;}
  .cust_name, .cust_mail, .cust_pass, .cust_pass2, .cust_city, .cust_contact, .cust_add,.cust_img >label{text-align-last: center;}
      label{
         font-size: 17px;
          padding: 5px
       }
        input[type=text],  input[type=password],  input[type=email]{
           width: 100%;
          font-size: smaller;
          margin: 5px;
        }
        input[type="file"] {
         width: auto;
        margin: 5px;
      }
      .filed_wrapper {        margin-bottom: 1em;        }
    
  }
    
    
  </style>

<?php 
	
	if(isset($_POST['edit_account'])){
		$update_id = $id;

		$name = $_POST['customer_name'];
		$email = $_POST['customer_mail'];
		$pass = $_POST['customer_mail_password'];
		$pass2 = $_POST['confirm_password2'];
		$city_name = $_POST['customer_city'];
		$phone_no = $_POST['customer_contact'];
		$address = $_POST['customer_address'];



		$pic = $_FILES['customer_profile_img']['name'];
		$tmp_pic = $_FILES['customer_profile_img']['tmp_name'];

		move_uploaded_file($tmp_pic,"customer_photos/$pic");
		//confirm_password = '$pass2',
   $update_cust_detail = "UPDATE customers SET customer_name = '$name', customer_email = '$email', customer_password = '$pass', customer_city='$city_name', customer_contact = '$phone_no', customer_address = '$address', customer_Profile_img = '$pic' WHERE customer_id ='$update_id' ";

$run_cust_acc=mysqli_query($connection, $update_cust_detail);

if($pass != $pass2){
      echo "<script>alert('Password did not match!!')</script>";
      exit();
    }

if($run_cust_acc){
	echo "<script>alert('Your account has been updates!')</script>";
	echo "<script>window.open('myAccount.php','_self')</script>";
}
}
?>

