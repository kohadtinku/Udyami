<!DOCTYPE html>
<?php

include "validation_of_session.php";
include "./service/db.php";
?>
<head>

  <meta name="author" content="">
  <meta name="description" content="">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Listing </title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/mmenu.css">
  <link rel="stylesheet" href="css/style.css" id="colors">   
        
         <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
  <style>
    #overlay_for_login {
      position: fixed;
      display: none;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1000;
      cursor: pointer;
    }

    .overlay_for_login {
      position: fixed;
      display: none;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 999999990;
      cursor: pointer;
    }

    .overlay_box_for_login {
      position: fixed;
      display: none;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999990;
      cursor: pointer;
    }
  </style>
</head>

<body>


<?php if (isset($_SERVER['HTTP_CLIENT_IP']))
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
  else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  else if (isset($_SERVER['HTTP_X_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
  else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
  else if (isset($_SERVER['HTTP_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
  else if (isset($_SERVER['REMOTE_ADDR']))
    $ipaddress = $_SERVER['REMOTE_ADDR'];
  else
    $ipaddress = 'UNKNOWN';
    
    if (isset($_SESSION['enquery_id'])) {
    // echo"<h1>enquery_id set</h1>";

  } else {
    if (isset($_SESSION['user_id'])) {

      if (('' != $_SESSION['user_id']) && isset($_SESSION['user_email'])) {
        $_SESSION['enquery_first_name']  = $_SESSION['user_first_name'];
        $_SESSION['enquery_last_name']  = $_SESSION['user_last_name'];
        $_SESSION['enquery_id']  = $_SESSION['user_id'];
        $_SESSION['enquery_email']  = $_SESSION['user_email'];
        $_SESSION['enquery_phone']  = $_SESSION['user_phone'];
        // echo"<h1>enquery_id not set</h1>";
      }
    } else {
      // echo"<h1>user_id not set</h1>";

      $select_enquery_listing_query = "SELECT * FROM enquery ";
      try {
        $select_enquery_listing_result = mysqli_query($connect, $select_enquery_listing_query);
      } catch (Exception $e) {
        // echo "Data insertion failed " . "<br>";
        // echo 'Message: ' . $e->getMessage() . "<br>";
      }
      // echo $select_enquery_listing_query;
      if ($select_enquery_listing_result) {
        $num_for_enquery_listing = mysqli_num_rows($select_enquery_listing_result);
      }
      if ($num_for_enquery_listing > 0) {
        while ($row_for_enquery_listing = mysqli_fetch_assoc($select_enquery_listing_result)) {
          $listing_enquery_ipaddress  = $row_for_enquery_listing['enquery_mac_address'];

          $listing_enquery_email  = $row_for_enquery_listing['enquery_email'];


          if (($ipaddress == $listing_enquery_ipaddress)) {
            $_SESSION['enquery_first_name']  = $row_for_enquery_listing['enquery_first_name'];
            $_SESSION['enquery_last_name']  = $row_for_enquery_listing['enquery_last_name'];
            $_SESSION['enquery_id']  = $row_for_enquery_listing['enquery_id'];
            $_SESSION['enquery_email']  = $row_for_enquery_listing['enquery_email'];
            $_SESSION['enquery_phone']  = $row_for_enquery_listing['enquery_phone'];
          } else {
          }
        }
      }
    }
  }


  ?>
  
   <?php include "./component/preloader.php"; ?>

  <!-- Wrapper -->
  <div id="main_wrapper">
    <?php include "./header/global_header.php"; ?>
   
    <div class="clearfix"></div>
    <?php include "./component/searchbar.php"; ?>    
      <h2 style="margin-left: 174px;">Khadi</h2>
   
        <div class="container">
          <!-- breadcrumb -->
          <div class="row">
            <div class="col-lg-12">
              <ul class="breadcrumb">
               <img src="https://udyamisahayak.com/images/1693287624khadi.jpg" style="width:60%;height:50%;">
              </ul>
            </div>
          </div> <!-- breadcrumb -->
         </div>
<div class="border-section border details" style="margin-left: 177px;margin-top: 25px;">
  
                 <p class="clearfix"><i class="far fa-file-alt"></i>Company Name : XYZ ComXXXX </p>
                  <div class="post-details">
                    <ul class="list-unstyled clearfix">
                      <li>
                        <p class="clearfix">Location : Sadar, NaXXXX
                          <span class="pull-right flip">
                            
                            </span>
                        </p>
                      </li><!--PostDate-->
                      <li class="classiera_pdate">
                        <p class="clearfix">Category : Khadi
                          <span class="pull-right flip"></span>
                        </p>
                      </li><!--PostDate-->
                      <!--Price Section -->
                      <li>
                        <p class="clearfix">Sub Category : Kapda
                          <span class="pull-right flip cl__price">

                            </span>
                        </p>
                      </li><!--Sale Price-->
                      <!-- <li>
                      
                      </li> -->
                      <li>
                        <p class="clearfix">Description : Well Condition
                         
                        </p>
                      </li><!--Location-->
                      <li>
                      
                    </ul>
                  </div><!--post-details-->
                </div>
                
               

  </div> 
 

 
      

                            </div>
                        </div>

                

               
              
    
    
    <div class="footer">
          
         <?php include "./component/footer.php"; ?>
    </div>
     
        