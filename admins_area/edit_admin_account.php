<?php 
    @session_start();
    $form_complete = null; 
    include_once("../functions/indexFunction.php");
    include_once("../includes/PhpDBConnect.php");


     if(isset($_GET['edit_admin_account'])){
         
         $admin_email=$_SESSION['admin_email'];

         $get_admin ="SELECT * FROM admins_details WHERE admin_email='$admin_email'";

        $run_admin =mysqli_query($connection, $get_admin);

        $row_admin=mysqli_fetch_array($run_admin);

        $id = $row_admin['admin_id'];
        $fname = $row_admin['admin_fname'];
        $lname = $row_admin['admin_lname'];
        $email = $row_admin['admin_email'];
        $pass = $row_admin['admin_password'];
        $contect = $row_admin['contect_no'];
        $gender = $row_admin['Gender'];
        $DOB = $row_admin['DOB'];
        $address = $row_admin['address'];
        $city = $row_admin['city_name'];
        $area_pin = $row_admin['area_pin'];
        $company_name = $row_admin['company_name'];
        $about_company = $row_admin['about_compny'];
        $siteLink = $row_admin['site_link'];
        $work_category = $row_admin['work_categrey'];
        $service_contact = $row_admin['customer_service_no'];

        //$getting_ip_address = get_client_ip();
    }


?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Update Your Account Details</title>
        <link rel="stylesheet" href="./styles/adminRegistaration.css">
    </head>
       
<body>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Update Your Account Details</h1>
        <div class="container">
            <div class="row">
                 <?php
                   if(isset ($_POST['firstname']) && empty(trim ($_POST['firstname'])))
                   { echo "<p class=\'alert\'>Last name is required</p>";
                      $form_complete = false;
                   }
                ?>
                <div class="col-10">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="firstname" value="<?php echo $fname;?>" />
                </div>
            </div>

            <div class="row">
                <?php
                   if(isset ($_POST['lastname']) && empty(trim ($_POST['lastname'])))
                   { echo "<p class=\'alert\'>Last name is required</p>";
                      $form_complete = false;
                   }
                ?>
                <div class="col-10">
                    <label for="lname">Last Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="lname" name="lastname" value="<?php echo $lname;?>" />
                </div>
            </div>

            <div class="row">
                <?php
                    $emil_regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
                    if(isset ($_POST['email']) && empty(trim($_POST['email'])))
                    { echo "<p class=\'alert\'>E-mail is required</p>";
                        $form_complete = false;

                    }
                    elseif(isset($_POST['email']) && !preg_match($emil_regex, $_POST['email'])){
                      echo "<p class=\'alert\'>Please enter a valid E-mail Address.</p>";
                      $form_complete = false;
                    }
                ?>
                <div class="col-10">
                    <label for="email">Email:</label>
                </div>
                <div class="col-90">
                    <input type="email" id="email" name="email" value="<?php echo $email;?>" />
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="password">Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="password" name="password" maxlength="8" value="<?php echo $pass; ?>" />
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="password">Confirem Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="confirem_password" name="confirem_password" maxlength="8" />
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="mobile">Mobile:</label>
                </div>
                <div class="col-90">
                    <input type="tel" id="mobile" name="mobilee" value="<?php echo $contect;?>" />
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="gender">Gender:</label>
                </div>
                <div class="col-90">
                    <input type="radio" id="male" name="gender" value="male"/>Male
                    <input type="radio" id="female" name="gender" value="female"/>Female
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="dob">Date Of Birth:</label>
                </div>
                <div class="col-90">
                    <input type="Date" id="dob" name="dob" value="<?php echo  $DOB;?>"/>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="address">Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="address" id="address" cols="30" rows="3" />
                       <?php echo $address;?>
                    </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="city">City:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="city" name="city" maxlength="20" value="<?php echo  $city;?>">
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="pincode">Area PIN:</label>
                </div>
                <div class="col-90">
                    <input type="number" id="pin" name="pin" maxlength="6" value="<?php echo $area_pin;?>"/>
                </div>
            </div>
          
            <div class="row">
                <div class="col-10">
                    <label for="compny_name">Company Name:</label>
                </div>
                <div class="col-90">
                   <input type="text" id="compny_name" name="company_name" maxlength="50" value="<?php echo $company_name;?>">
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="compny_name">About Company:</label>
                </div>
                <div class="col-90">
                  <textarea type="textarea" id="compny_name" name="about_company" cols="30" rows="10"><?php echo $about_company;?> </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="siteLink">Website Link:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="siteLink" name="siteLink" maxlength="30" value="<?php echo $siteLink;?>">    
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="category" required >Category:</label>
                </div>

                <div class="col-90">
                    <input type="text" id="work_category" name="work_category" value="<?php echo $work_category;?>">
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="siteLink">Costomer Service Number:</label>
                </div>
                <div class="col-90">
                 <input type="tel" id="mobile" name="Servi_mobile" value="<?php echo$service_contact ;?>">
                </div>
            </div>

            <div class="row">
                <input type="submit" name="UpdateBtn" value="Update" >              
            </div> 

        </div> 
    </form>

</body>
</html>
<?php 
    if(isset($_POST['edit_admin_account'])){
        $update_id = $id;

        $admin_fname = $row_admin['firstname'];
        $admin_lname = $row_admin['lastname'];
        $admin_email = $row_admin['email'];
        $admin_pass = $row_admin['password'];
        $admin_conf_pass = $row_admin['confirem_password'];
        $contect = $row_admin['mobilee'];
        $gender = $row_admin['gender'];
        $DOB = $row_admin['dob'];
        $address = $row_admin['address'];
        $city = $row_admin['city'];
        $area_pin = $row_admin['pin'];
        $company_name = $row_admin['company_name'];
        $about_company = $row_admin['about_company'];
        $siteLink = $row_admin['siteLink'];
        $work_category = $row_admin['work_category'];
        $service_contact = $row_admin['Servi_mobile'];

   

        $Update_admin_detail= " UPDATE admins_details SET admin_fname='$admin_fname', admin_lname='$admin_lname', admin_email='$admin_email', admin_password='$admin_pass', contect_no='$admin_conf_pass', Gender='$gender', DOB='$DOB', address='$address', city_name ='$city', area_pin='$area_pin', company_name='$company_name', about_compny='$about_company',  site_link='$siteLink', work_categrey='$work_category', customer_service_no='$service_contact', create_at_admin_acc=NOW()";
        
        $run_details=mysqli_query($connection,$Update_admin_detail);

         if ($admin_pass != $admin_conf_pass ) {
            echo "<script>alert('Passwords did not match, Try again.!')</script>";
            exit();
         }

       elseif ($run_details){           
            
            // admin_email from input name <-- under session
            echo "<script>alert('Account Created Successfully, Thank You!!!')</script>";
            echo "<script>window.open('adminAccount.php','_self')</script>";
        }




    }


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
    
  if(!empty($_POST)){
    foreach($_POST as $value){
      $value = trim($value);
    }
//FILTER E-mail
    $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  }


?>
