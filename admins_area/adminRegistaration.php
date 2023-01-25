<?php 
    $form_complete = null; 
    include_once("../functions/indexFunction.php");
    include_once("../includes/PhpDBConnect.php");
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Admin's Registaration Form</title>
        <link rel="stylesheet" href="./styles/adminRegistaration.css">
    </head>
       
<body>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Put your details</h1>
        <div class="container">
            <div class="row">
                <?php
                   if(isset ($_POST['firstname']) && empty(trim ($_POST['firstname'])))
                   { echo "<p class=\'alert\'>Firts Name is required</p>";
                      $form_complete = false;
                   }
                ?>
                <div class="col-10">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="firstname" placeholder="Enter your first name" required/>
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
                    <input type="text" id="lname" name="lastname" placeholder="Enter your last name" required/>
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
                    <input type="email" id="email" name="email" placeholder="it should contain @,." required/>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="password">Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="password" name="password" maxlength="8" required/>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="password">Confirem Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="confirem_password" name="confirem_password" maxlength="8" required/>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="mobile">Mobile:</label>
                </div>
                <div class="col-90">
                    <input type="tel" id="mobile" name="mobilee" placeholder="only 10 digits are allowed" required/>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="gender" required>Gender:</label>
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
                    <input type="Date" id="dob" name="dob" required/>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="address">Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="address" id="address" cols="30" rows="3" required/></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="city">City:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="city" name="city" maxlength="20">
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="pincode">Area PIN:</label>
                </div>
                <div class="col-90">
                    <input type="number" id="pin" name="pin" maxlength="6" required/>
                </div>
            </div>
          
            <div class="row">
                <div class="col-10">
                    <label for="compny_name">Company Name:</label>
                </div>
                <div class="col-90">
                   <input type="text" id="compny_name" name="company_name" maxlength="50">
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="compny_name">About Company:</label>
                </div>
                <div class="col-90">
                  <textarea type="textarea" id="compny_name" name="about_company" cols="30" rows="10"> </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="siteLink">Website Link:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="siteLink" name="siteLink" maxlength="30">    
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="category" required >Category:</label>
                </div>

                <div class="col-90">
                    <select name="category" id="category">
                        <option value=" ">Select Category:</option>
                        <option value="Textiles">Textiles</option>
                        <option value="Needle Craft">Needle Craft</option>
                        <option value="Printable Fabric">Printable Fabric</option>
                        <option value="Interfacing">Interfacing</option>
                        
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="siteLink">Costomer Service Number:</label>
                </div>
                <div class="col-90">
                 <input type="tel" id="mobile" name="Servi_mobile" placeholder="Service Number...">
                </div>
            </div>

            <div class="row">
                <input type="submit" name="registerBtn" value="Registered" >              
            </div> 

        </div> 
    </form>

</body>
</html>
<?php 
    if(isset($_POST['registerBtn'])){

        $admin_fname = $_POST['firstname'];
        $admin_lname = $_POST['lastname'];
        $admin_email = $_POST['email'];
        $admin_pass = $_POST['password'];
        $admin_conf_pass = $_POST['confirem_password'];
        $contect = $_POST['mobilee'];
        $gender = $_POST['gender'];
        $DOB = $_POST['dob'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $area_pin = $_POST['pin'];
        $company_name = $_POST['company_name'];
        $about_company = $_POST['about_company'];
        $siteLink = $_POST['siteLink'];
        $work_category = $_POST['category'];
        $service_contact = $_POST['Servi_mobile'];

        $getting_ip_address = get_client_ip();

        $insert_admin_detail= " INSERT INTO admins_details (admin_fname, admin_lname, admin_email,admin_password,contect_no,Gender,DOB,address,city_name,area_pin,company_name, about_compny, site_link,work_categrey, customer_service_no) VALUES ('$admin_fname','$admin_lname','$admin_email', '$admin_pass', '$contect', '$gender', '$DOB', '$address', '$city','$area_pin','$company_name','$about_company','$siteLink', '$work_category', '$service_contact')";
        
        $run_details=mysqli_query($connection,$insert_admin_detail);

         if ($admin_pass != $admin_conf_pass ) {
            echo "<script>alert('Passwords did not match, Try again.!')</script>";
            exit();
         }

       elseif ($run_details){           
            
            // admin_email from input name <-- under session
            echo "<script>alert('Account Created Successfully, Thank You!!!')</script>";
            echo "<script>window.open('AdminLogin.php','_self')</script>";
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
    $_POST['customer_mail'] = filter_var($_POST['customer_mail'], FILTER_SANITIZE_EMAIL);

  }


?>
