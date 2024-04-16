<?php

//index.php

//Include Configuration File
include('./php_mailer_config/config.php');

$login_button = '';


if (isset($_GET["code"])) {

  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


  if (!isset($token['error'])) {

    $google_client->setAccessToken($token['access_token']);


    $_SESSION['access_token'] = $token['access_token'];


    $google_service = new Google_Service_Oauth2($google_client);


    $data = $google_service->userinfo->get();


    $_SESSION['user_first_name'] = "";
    if (!empty($data['given_name'])) {
      $_SESSION['user_first_name'] = $data['given_name'];
    }

    $_SESSION['user_last_name'] = "";
    if (!empty($data['family_name'])) {
      $_SESSION['user_last_name'] = $data['family_name'];
    }

    $_SESSION['user_email'] = "";
    if (!empty($data['email'])) {
      $_SESSION['user_email'] = $data['email'];
    }

    $_SESSION['user_gender'] = "";
    if (!empty($data['gender'])) {
      $_SESSION['user_gender'] = $data['gender'];
    }

    $_SESSION['user_image'] = "";
    if (!empty($data['picture'])) {
      $_SESSION['user_image'] = $data['picture'];
    }
  }
}


if (!isset($_SESSION['access_token'])) {

  $login_button = '<a href="' . $google_client->createAuthUrl() . '">Login With Google</a>';

  include "./service/db.php";
  include "./service/filter_input.php";



  // sending OTP for forget Password
  if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['forget_password'])) {

    $email = filter($_POST["forget_email"]);

    $exist_result = false;
    $exist_query = "SELECT * FROM `users_entries` WHERE user_email = '$email'";



    require "email_verification_shooting.php";


    $exist_result = mysqli_query($connect, $exist_query);
    // echo "here";
    // var_dump($exist_result);
    // $_SESSION['user_type'] = 'none';
    try {
      if ($exist_result) {
        $num  = mysqli_num_rows($exist_result);
        if ($num > 0) {
          while ($row = mysqli_fetch_assoc($exist_result)) {

            // generate OTP
            $user_otp = rand(100000, 999999);
            $_SESSION['user_username'] = $row['user_username'];
            $user_id = $row['user_id'];
            $_SESSION['user_id'] = $row['user_id'];


            $insert_query = "UPDATE `users_entries` SET `user_otp` = '$user_otp',`user_otp_is_expired` = '0', `user_otp_created` = '" . date("Y-m-d H:i:s") . "' WHERE `users_entries`.`user_id` = $user_id";

            try {
              $insert_result = mysqli_query($connect, $insert_query);

              if ($insert_result) {

                // echo "Data insertion" . "<br>";
                $store = send_mail($email, $user_otp);
                if ($store) {
                  echo ("<script> alert('Your OTP has been sent successfully to your $email') </script>");
                  // echo ("<br> email shooting successfull <br>");
                  echo "<script> window.location.replace('./login/verify_email.php?user_email=$email');</script>";
                } else {
                  // echo ("<br> email shooting failed <br>");
                }
              }
            } catch (Exception $e) {
              // echo "Data insertion failed " . "<br>";
              // echo 'Message: ' . $e->getMessage() . "<br>";
            }
            // echo "<script> window.location.replace('https://127.0.0.1:8080/author/product_details/index.php');</script>";
          }
        } else {
          $exist_result = false;
          // echo "invalid username";
          // header("location: /forum/index.php");
        }
      }
    } catch (Exception $e) {
      // echo "Data insertion failed " . "<br>";
      // echo 'Message: ' . $e->getMessage() . "<br>";
    }
  }



  if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['submit_login'])) {

    $user = filter($_POST["login_username"]);
    $login_password = $_POST["login_password"];


    $exist_result = false;
    $exist_query = "SELECT * FROM `users_entries` WHERE user_username = '$user'";
    $exist_result = mysqli_query($connect, $exist_query);
    // var_dump($exist_result);
    // $_SESSION['user_type'] = 'none';

    try {
      if ($exist_result) {
        $num  = mysqli_num_rows($exist_result);
        if ($num > 0) {
          while ($row = mysqli_fetch_assoc($exist_result)) {
            $is_verified_email = $row["is_verified_email"];
            // echo $login_password;
            // echo $is_verified_email;

            // var_dump(password_verify($login_password, $row['user_password']));
            if (password_verify($login_password, $row['user_password'])) {
              // echo $login_password;
              $_SESSION['user_username'] = $row['user_username'];
              $_SESSION['user_id'] = $row['user_id'];
              $_SESSION['user_type'] = $row['user_type'];

              if ($row['user_type'] == 'admin') {
                echo "<script> window.location.replace('../admin_panel/index.php');</script>";
              }

              if ($row['user_type'] == 'user') {
                echo "<script> window.location.replace('../user_panel/dashboard_add_listing.html');</script>";
              }
            }
          }
        } else {
          $exist_result = false;
          // echo "invalid username";
          // header("location: /forum/index.php");
        }
      }
    } catch (Exception $e) {
      echo "Data insertion failed " . "<br>";
      // echo 'Message: ' . $e->getMessage() . "<br>";
    }
  }
}
?>
<!DOCTYPE html>

<html lang="zxx">

<head>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register : UdyamiSahayak</title>


  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/mmenu.css">
  <link rel="stylesheet" href="css/style.css" id="colors">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
  <!-- ****NEW**-->
  <link type="text/css" rel="stylesheet" href="css/im-homepage-v39.min.css">
  <!--chrome-->
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <link href="css/styles2.css" rel="stylesheet" type="text/css">
  <link href="css/styles3.css" rel="stylesheet" type="text/css">
  <link href="css/grid.css" rel="stylesheet" type="text/css">
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/stylenew.css" rel="stylesheet" type="text/css">
  <link href="css/thumbs.css" rel="stylesheet" type="text/css">





  <!-- <link href='https://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>  -->

  <link rel="icon" href="images/favicon.ico">
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="css2/form.css">
  <link rel="stylesheet" href="css/thumbs.css">
  <link rel="stylesheet" href="css2/slider.css">
  <link rel="stylesheet" href="css/style.css">

  <!--JS-->
  <!-- <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script> -->
  <!--<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.iosslider.min.js"></script>
<script> -->


</head>

<body>

  <?php include "./component/preloader.php"; 
  
  
  ?>

  <style>
    .sampleMarquee {
      color: #ffffff;
      background-color: #ff2222;
      font-size: 34px;
      line-height: 31px;
      padding: 1px;
      margin: 1px;
      font-style: italic;
      text-align: left;
      font-variant: small-caps;
      border-radius: 30px;
      border-style: groove;
    }

    .image-container {
      position: relative;
      top: -50px;
    }

    .image-container img {
      position: absolute;
      top: -9px;
      right: 0;
    }
  </style>


  <!-- Wrapper -->
  <div id="main_wrapper">
    <?php include "./header/global_header.php"; ?>

    <div class="clearfix"></div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>



    <script type="text/javascript">
      
  function validation_for_email_username_phone() {
    var email = document.getElementById("register_email");
    email = email.value;
    var username = document.getElementById("register_username");
    username = username.value;
    var phone = document.getElementById("register_phone");
    phone = phone.value;
    $.ajax({
      url: "validation_for_email_username_phone.php",
      datatype: "JSON",
      type: "POST",
      data: {
        submit: "submit",
        email: email,
        username: username,
        phone: phone,
      },
      success: function(result) {
        result = JSON.parse(result);
        json_data = result;
        console.log(json_data);
        console.log(json_data[0][0]);
        console.log(json_data[1][0]);
        console.log(json_data[2][0]);
        if(0<(json_data[0][0]).length){
          $('#label_for_username_validation').html(json_data[0][1]);
        }
        if(0<(json_data[1][0]).length){
          $('#label_for_email_validation').html(json_data[1][1]);
        }
        if(0<(json_data[2][0]).length){
          $('#label_for_phone_validation').html(json_data[2][1]);
        }

        if (0 < (json_data[0][1]+json_data[1][1]+json_data[2][1]).length) {
          document.getElementById("register_btn").disabled = true;
        } else {
          document.getElementById("register_btn").disabled = false;
        }
      }
    });
  }

      $(document).ready(function() {

        //##### Add record when Add Record Button is click #########
        $("#tab2").submit(function(e) {
          e.preventDefault();

          var register_username = $("#register_username").val(); //build a post data structure
          var register_email = $("#register_email").val(); //build a post data structure
          var register_phone = $("#register_phone").val(); //build a post data structure
          var register_first_name = $("#register_first_name").val(); //build a post data structure
          var register_last_name = $("#register_last_name").val(); //build a post data structure
          var register_value = $("#register_value").val(); //build a post data structure
          var user_type = $("#user_type").val(); //build a post data structure

          // console.log(register_value);
          // console.log(register_last_name);
          // console.log(register_first_name);
          // console.log(register_email);
          // console.log(register_username);
          jQuery.ajax({
            type: "POST", // Post / Get method
            url: "response.php", //Where form data is sent on submission
            dataType: "text", // Data type, HTML, json etc.
            data: {
              register_username: register_username,
              register_email: register_email,
              register_phone: register_phone,
              register_first_name: register_first_name,
              register_last_name: register_last_name,
              register_value: register_value,
              user_type: user_type
            }, //Form variables
            success: function(response) {

              console.log(response);

              alert(
                'Registration DONE Successfully\n\n' +
                "Eamil has been sent successfully, check your email for further process.\n"
              );
            },

            error: function(xhr, ajaxOptions, thrownError) {
              alert(thrownError);
            }
          });
        });

      });
    </script>


    <div id="" class="zoom-anim-dialog">
      <div class="small_dialog_header">
        <h3>Register</h3>
      </div>
      <div class="utf_signin_form style_one">

        <div class="tab_container alt container">


          <div class="tab_content" id="tab2">
            <form enctype="multipart/form-data" method="post" class="register">
            <?php echo "<h4 style='color:red;' id='label_for_user_type_validation'></h4>"; ?>
              <p class="utf_row_form utf_form_wide_block">
                <label for="register_user_type">
                  <select id="user_type" name="user_type">
                    <option name="user_type" value="">User Type</option>
                    <option name="user_type" value="user">Seller</option>
                    <option name="user_type" value="buyer">Buyer</option>
                  </select>
                </label>
              </p>  
              <p class="utf_row_form utf_form_wide_block">
                <label for="register_first_name">
                  <input class="input-text" type="text" name="register_first_name" id="register_first_name" placeholder="First Name" />
                </label>
              </p>
              <p class="utf_row_form utf_form_wide_block">
                <label for="register_last_name">
                  <input class="input-text" type="text" name="register_last_name" id="register_last_name" placeholder="Last Name" />
                </label>
              </p>
              <?php echo "<h4 style='color:red;' id='label_for_username_validation'></h4>"; ?>
              <p class="utf_row_form utf_form_wide_block">
                <label for="register_username">
                  <input type="text" class="input-text" onchange="validation_for_email_username_phone()" onload="validation_for_email_username_phone()" name="register_username" id="register_username" value="" placeholder="Username" />
                </label>
              </p>
              <?php echo "<h4 style='color:red;' id='label_for_phone_validation'></h4>"; ?>
              <p class="utf_row_form utf_form_wide_block">
                <label for="register_phone">
                  <input type="phone" class="input-text" onchange="validation_for_email_username_phone()" onload="validation_for_email_username_phone()" name="register_phone" id="register_phone" value="" placeholder="phone no." />

                  <input type="submit" id="verify_phone_btn" class="button border fw margin-top-10" name="verify_phone" value="Verify Phone No." />
                </label>
              </p>
              <?php echo "<h4 style='color:red;' id='label_for_email_validation'></h4>"; ?>
              <p class="utf_row_form utf_form_wide_block">
                <label for="register_email">
                  <input type="email" class="input-text" onchange="validation_for_email_username_phone()" onload="validation_for_email_username_phone()" name="register_email" id="register_email" value="" placeholder="Email" />
                </label>
              </p>
             
              <div class="utf_row_form utf_form_wide_block form_forgot_part"> 
                <div class="checkboxes fl_right">
                  <span class=""> <a href="login.php">Already have an account? Login.</a> </span>
                </div>
              </div>

              <input type="hidden" name="register_value" value="register_value" id="register_value" />
              <input type="submit" id="register_btn" class="button border fw margin-top-10" name="register" value="Register" />
            </form>
          </div>

        </div>
      </div>
    </div>
    <?php include "./component/footer.php"; ?>
</body> 
</html>