<?php
include "validation_of_session.php";
$listing_id = $_GET['listing_id'];
//$listing_id = 174;

?>
<!DOCTYPE html>
<html lang="zxx">

<head>

  <meta name="author" content="">
  <meta name="description" content="">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lising Details </title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/mmenu.css">
  <link rel="stylesheet" href="css/style.css" id="colors">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <!-- Google Font -->
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

    <?php


    $num_for_listing = 0;
    $select_listing_query = "SELECT * FROM listing left join sub_category on listing.listing_business_sub_category_id = sub_category.sub_category_id left join states on listing.listing_state_id = states.state_id left join cities on listing.listing_city_id = cities.city_id left join users_entries on listing.listing_owner_id = users_entries.user_id left join category on listing.listing_business_category_id = category.category_id where listing.listing_id = $listing_id ";
    try {
      $select_listing_result = mysqli_query($connect, $select_listing_query);
    } catch (Exception $e) {
      // echo "Data insertion failed " . "<br>";
      // echo 'Message: ' . $e->getMessage() . "<br>";
    }
    // echo $select_listing_query;
    if ($select_listing_result) {
      $num_for_listing = mysqli_num_rows($select_listing_result);
    }
    if ($num_for_listing > 0) {

      while ($row_for_listing = mysqli_fetch_assoc($select_listing_result)) {
        $show_listing_details = false;
        $listing_id  = $row_for_listing['listing_id'];
        $listing_cost  = $row_for_listing['listing_cost'];
        $listing_business_name  = $row_for_listing['listing_business_name'];
        $listing_business_category_id  = $row_for_listing['listing_business_category_id'];
        $listing_firm_name  = $row_for_listing['listing_firm_name'];
        $listing_description  = $row_for_listing['listing_description'];
        $listing_location  = $row_for_listing['listing_location'];
        $listing_business_sub_category_id  = $row_for_listing['listing_business_sub_category_id'];
        $listing_website  = $row_for_listing['listing_website'];
        $listing_details  = $row_for_listing['listing_details'];
        $listing_timestamp_ago = time_elapsed_string($listing_details);
        $listing_image  = $row_for_listing['listing_image'];
        $listing_image2  = $row_for_listing['listing_image2'];
        $listing_image3  = $row_for_listing['listing_image3'];
        $listing_status  = $row_for_listing['listing_status'];
        $listing_pincode  = $row_for_listing['listing_pincode'];
        $state_name  = $row_for_listing['state_name'];
        $city_name  = $row_for_listing['city_name'];
        $listing_pincode  = $row_for_listing['listing_pincode'];
        $user_email  = $row_for_listing['user_email'];
        $user_email  = "amansahu@gmail.com";
        $user_phone  = $row_for_listing['user_phone'];
        $user_username  = $row_for_listing['user_username'];
        $user_first_name  = $row_for_listing['user_first_name'];
        $user_last_name  = $row_for_listing['user_last_name'];
        $user_facebook_link  = $row_for_listing['user_facebook_link'];
        $user_instagram_link  = $row_for_listing['user_instagram_link'];
        $user_image  = $row_for_listing['user_image'];
        $user_admin_verified_timestamp  = $row_for_listing['user_admin_verified_timestamp'];
        $user_last_timestamp  = $row_for_listing['user_last_timestamp'];

        $select_enquery_listing_query = "SELECT * FROM enquery where enquery_listing_id = $listing_id and enquery_mac_address = '$ipaddress' ";
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
              $show_listing_details =true;
            }
          }


    ?>











    <div id="utf_listing_gallery_part" class="utf_listing_section">
      <div class="utf_listing_slider utf_gallery_container margin-bottom-0">

        <a href="images/<?= $listing_image ?>" data-background-image="images/<?= $listing_image ?>" class="item utf_gallery"></a>
        <a href="images/<?php if($listing_image2 == ''){echo $listing_image;}else{ echo $listing_image2;} ?>" data-background-image="images/<?php if($listing_image2 == ''){echo $listing_image;}else{ echo $listing_image2;} ?>" class="item utf_gallery"></a>
        <a href="images/<?php if ($listing_image3 == '') {
              if ($listing_image2 == '') {
                echo $listing_image;
              } else {
                echo $listing_image2;
              }
            } else {
              echo $listing_image3;
            } ?>" data-background-image="images/<?php if ($listing_image3 == '') {
              if ($listing_image2 == '') {
                echo $listing_image;
              } else {
                echo $listing_image2;
              }
            } else {
              echo $listing_image3;
            } ?>" class="item utf_gallery"></a>

      </div>
    </div>

    <div class="container">
      <div class="row utf_sticky_main_wrapper">
        <div class="col-lg-8 col-md-8">
          <div id="titlebar" class="utf_listing_titlebar">
            <div class="utf_listing_titlebar_title">
              <h2><?= $listing_business_name ?></h2>
             
              
              
              
              
              
              
              
              
              
              
              
              
               <?php
                    if (isset($row_for_listing['listing_firm_name'])) {
                      if ($row_for_listing['listing_firm_name'] == "") {
                      } else {
                    ?>
                        <span class="call_now" <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                                                  } else {
                                                  ?> onclick="show_enquery_popup();" <?php }
                                                                                      ?>><i class="fa fa-building"></i>Company Name :
                          <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                            echo $row_for_listing['listing_firm_name'];
                          } else {
                            echo substr($row_for_listing['listing_firm_name'], 0, -4) . 'XXXX';
                          }
                          ?>

                        </span>
                    <?php
                      }
                    } ?>
                    
                 
                    
                     <?php
                    if (isset($row_for_listing['user_phone'])) {
                      if ($row_for_listing['user_phone'] == "") {
                      } else {
                    ?>
                        <span class="call_now" <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                                                  } else {
                                                  ?> onclick="show_enquery_popup();" <?php }
                                                                                      ?>><i class="sl sl-icon-phone"></i>Phone No.: (+91)
                          <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                            echo $row_for_listing['user_phone'];
                          } else {
                            echo substr($row_for_listing['user_phone'], 0, -4) . 'XXXX';
                          }
                          ?>

                        </span>
                    <?php
                      }
                    } ?>
                    
                    
                     <?php
                    if (isset($row_for_listing['user_email'])) {
                      if ($row_for_listing['user_email'] == "") {
                      } else {
                    ?>
                        <span class="call_now" <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                                                  } else {
                                                  ?> onclick="show_enquery_popup();" <?php }
                                                                                      ?>><i class="fa fa-link"></i>Email :
                          <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                            echo $row_for_listing['user_email'];
                          } else {
                            echo substr($row_for_listing['user_email'], 0, -14) . 'XXXX@gmail.com';
                          }
                          ?>

                        </span>
                    <?php
                      }
                    } ?>
              
              
              
              
              
                    <span class="call_now"><i class="fa fa-book"></i>Category : <?= $row_for_listing['category_name'] ?></span>
                    <span class="call_now"><i class="fa fa-list"></i>Sub Category : <?= $row_for_listing['sub_category_name'] ?></span>
              
               <span> <a href="#utf_listing_location" class="listing-address"> <i class="sl sl-icon-location"></i> <?= $city_name ?>, <?= $state_name ?>, <?= $listing_pincode ?> </a> </span>
              
              
              
              
              
              
              
             
              <!--<ul class="listing_item_social">
                <li><a href="#"><i class="fa fa-bookmark"></i> Bookmark</a></li>
                <li><a href="#"><i class="fa fa-star"></i> Add Review</a></li>
                <li><a href="#"><i class="fa fa-flag"></i> Featured</a></li>
                <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                <li><a href="#" class="now_open">Open Now</a></li>
              </ul>-->
            </div>
          </div>
          <div id="utf_listing_overview" class="utf_listing_section">
            <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Listing Description</h3>
            <p><?= $listing_description ?></p>

            <!--<div id="utf_listing_tags" class="utf_listing_section listing_tags_section margin-bottom-10 margin-top-0">

              <a href="#"><i class="sl sl-icon-phone" aria-hidden="true"></i> +(01) 1123-254-456</a>

              <?php
              if (isset($user_email)) {
                if ($user_email == "") {
                } else {
              ?>
                  <a style="margin:0px;" <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                                            } else {
                                            ?> onclick="show_enquery_popup();" <?php }
                                                                                      ?>><i class="fa fa-envelope-o" aria-hidden="true"></i>Email :
                    <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                      echo $user_email;
                    } else {
                      echo substr($user_email, 0, -14) . 'XXXX@gmail.com';
                    }
                    ?>

                  </a>
              <?php
                }
              } ?>

              <a href="#"> info@example.com</a>
              <a href="#"><i class="sl sl-icon-globe" aria-hidden="true"></i> www.example.com</a>
            </div>
            <div class="social-contact">
              <a href="#" class="facebook-link"><i class="fa fa-facebook"></i> Facebook</a>
              <a href="#" class="twitter-link"><i class="fa fa-twitter"></i> Twitter</a>
              <a href="#" class="instagram-link"><i class="fa fa-instagram"></i> Instagram</a>
              <a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i> Linkedin</a>
              <a href="#" class="youtube-link"><i class="fa fa-youtube-play"></i> Youtube</a>
            </div>-->
          </div>


        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-4 margin-top-75 sidebar-search">
         <div class="utf_box_widget booking_widget_box">
            <h3><i class="fa fa-circle "></i> 
              <div class="price">
                 <?php
                  if (isset($row_for_listing['listing_cost'])) {
                    if ($row_for_listing['listing_cost'] == "") {
                    } else {
                  ?> <span
                      <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                        //echo $row_for_listing['listing_cost'];
                      } else { ?>onclick="show_enquery_popup();" <?php }?> >
                    <?php if ((isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) && $show_listing_details) {
                      echo $listing_cost."Rs";
                    } else {
                      echo substr($listing_cost, 0, -3) . 'XXXRs';
                    }
                    ?>

                  </a>
              <?php
                }
              } ?>
              </div>
            </h3>
             <?php if(!$show_listing_details){
?> 
 <button class="utf_progress_button button fullwidth_block margin-top-5" <?php if (isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])){}else { ?> onclick="show_enquery_popup();" <?php }
 if (!$show_listing_details) { ?> onclick="update_enquery(<?= $listing_id ?>)" <?php  } ?> 
 style="margin-bottom:29px;"> <?php if (isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])){?>  View Details  <?php }else { ?>Enquery Now <?php } ?></button>
<?php

                                }else{ ?>  <?php } ?>
           
            <div class="clearfix"></div>
          </div>
          <div class="utf_box_widget margin-top-35">
            <h3><i class="sl sl-icon-phone"></i> Contact Info</h3>
            <div class="utf_hosted_by_user_title"> <a href="#" class="utf_hosted_by_avatar_listing"><img src="images/<?= $user_image ?>" alt=""></a>
              <h4><a href="#"><?= $user_first_name ?> <?= $user_last_name ?></a><span><?= $listing_timestamp_ago ?></span>
                <span><i class="sl sl-icon-location"></i> <?= $city_name ?>, <?= $state_name ?>, <?= $listing_pincode ?></span>
              </h4>
            </div>
            <!--<ul class="utf_social_icon rounded margin-top-10">
              <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
              <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
              <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
            </ul>
            <ul class="utf_listing_detail_sidebar">
              <li><i class="sl sl-icon-map"></i> 12345 Little Lonsdale St, Melbourne</li>
              <li><i class="sl sl-icon-phone"></i> +(012) 1123-254-456</li>
              <li><i class="sl sl-icon-globe"></i> <a href="#">www.example.com</a></li>
              <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@example.com">info@example.com</a></li>
            </ul> -->
          </div>
       
        </div>
      </div>
    </div>









      <?php
      }
    } else {
      ?>
      <div class="utf_listing_item-container list-layout">
        <a href="#" class="utf_listing_item">
          <div class="utf_listing_item_content">
            <div class="utf_listing_item-inner">
              <h3>No Listing Found</h3>
            </div>
          </div>
        </a>
      </div>
    <?php
    }

    ?>

<!--
    <section class="fullwidth_block padding-top-20 padding-bottom-50">
      <div class="container">
        <div class="row slick_carousel_slider">
          <div class="col-md-12">
            <h3 class="headline_part centered margin-bottom-25">Similar Listings</h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="simple_slick_carousel_block utf_dots_nav">
                <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
                    <div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Chef-Hat"></i> Restaurant</span> <span class="featured_tag">Featured</span>
                      <span class="utf_open_now">Open Now</span>
                      <div class="utf_listing_item_content">
                        <div class="utf_listing_prige_block">
                          <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 </span>
                          <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                        </div>
                        <h3>Chontaduro Barcelona</h3>
                        <span><i class="fa fa-map-marker"></i> The Ritz-Carlton, Hong Kong</span>
                        <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span>
                      </div>
                    </div>
                   
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <?php include "subscribe_newslatter.php"; ?>

     <!-- Footer -->
    <div id="footer" class="footer_sticky_part">
      <div class="container">
        <div class="row">
          <?php include "./component/footer.php"; ?>
        </div>
      </div>
    </div>
    <div id="bottom_backto_top"><a href="#"></a></div>
  </div>



  <div id="overlay_for_enquery" class="overlay_for_login" style="display:none;height: 100%;overflow: auto;position: fixed; padding-bottom:100px !important;">
    <div class="container my-3 py-5  " id="enquery_form_box" style="padding-bottom:20px;padding-top:20px;margin-top:20px;">
      <div onclick="hide_enquery_popup()"><span style="    padding: 15px; padding-top: 7px; padding-bottom: 8px;font-size:20px; background-color:white; border-radius: 25px;line-height:0px;" class=" circle">x</span> </div>
      <div id="main" class=" justify-center ">
        <div class="col-lg-12">
          <div class=" mb-4" style="margin-bottom:20px;">
            <div class="card-body" style="background-color:#e0e0e0 !important; border-radius:8px ;box-shadow: 1px 1px 20px #000000;">
              <div class="jumbotron py-1" style="padding-top: 10px;margin-top:20px;margin-bottom:20px;border-radius:8px;background-color: gold linear-gradient(to bottom, lightyellow, gold);">
                <div class=" my-4 mx-5" style="margin-top:20px;margin-bottom:20px;margin-right:20px;margin-left:20px;">

                  <div style="display:flex;">
                    <div style="display:inline-block;margin-right:auto">
                      <h1 class=" my-auto mr-auto d-inline">Fill Details </h1>
                    </div>
                    <div style="display:inline-block;margin-left:auto">
                      <h3 style="color:#000000">𝕌𝕕𝕪𝕒𝕞𝕚𝕊𝕒𝕙𝕒𝕪𝕒𝕜</h3>
                    </div>
                  </div>
                  <hr class="my-3" style="margin-top:20px;margin-bottom:20px;">
                  <div class="social-login-v2 login-register">
                    <form enctype="multipart/form-data" id="enquery_form" method="POST" class="text-center">

                      <div class="form-group">
                        <div class="inner-addon left-addon">
                          <label class="" style="float:left" for="enquery_first_name">First Name</label> <input type="text" name="enquery_first_name" id="enquery_first_name" class="form-control form-control-md sharp-edge" placeholder="Enter First name" data-error="First name required" required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div><!--enquery_first_name-->

                      <div class="form-group">
                        <div class="inner-addon left-addon">
                          <label class="" style="float:left" for="enquery_last_name">Last Name</label> <input type="text" name="enquery_last_name" id="enquery_last_name" class="form-control form-control-md sharp-edge" placeholder="Enter Last name" data-error="Last name required" required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div><!--enquery_last_name-->



                      <div class="form-group">
                        <div class="inner-addon left-addon">
                          <label class="" style="float:left" for="enquery_email">Email</label> <?php echo "<span style='color:red;' id='label_for_email_validation'></span>"; ?> <input type="email" name="enquery_email" onchange="validation_for_email_username_phone()" onload="validation_for_email_username_phone()" id="enquery_email" class="form-control form-control-md sharp-edge" placeholder="Enter email address" data-error="Email required" required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div><!--Email Address-->



                      <div class="form-group">
                        <div class="inner-addon left-addon">
                          <label class="" style="float:left" for="enquery_phone">Phone no.</label> <?php echo "<span style='color:red;' id='label_for_phone_validation'></span>"; ?><input type="tel" pattern="[0-9]{10}" name="enquery_phone" onchange="validation_for_email_username_phone()" onload="validation_for_email_username_phone()" id="enquery_phone" class="form-control form-control-md sharp-edge" placeholder="Enter 10 digit Phone no." data-error="Phone required" required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div><!--Phone no.-->
                      <!-- <div class="form-group">
                            <div class="checkbox">
                              <input type="checkbox" id="agree" data-error="You must agree to our Terms and Conditions" required>
                              <label for="agree">Agree to <a href="#" target="_blank">Terms &amp; Conditions</a></label>
                              <div class="left-side help-block with-errors"></div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="checkbox">
                              <label>Already have an account? <a href="../login/index.php">Login here</a></label>
                              <div class="left-side help-block with-errors"></div>
                            </div>
                          </div> -->
                      <!-- <div class="form-group" style="float:left;">
                            <div class="checkbox">
                              <label> <a onclick="show_login_popup();">Login Now</a></label>
                              <div class="left-side help-block with-errors"></div>
                            </div>
                          </div> -->
                      <!-- <div class="form-group" style="float:right;">
                            <div class="checkbox">

                              <label> <a href="../login/index.php">View More Option</a></label>
                              <div class="left-side help-block with-errors"></div>
                            </div>
                          </div> -->
                      <div class="form-group mt-5" style="margin-top:20px;padding-bottom:20px;">

                        <input type="hidden" name="enquery_form_value" value="true" id="enquery_form_value" />
                        <input type="hidden" name="enquery_listing_id" value="<?= $listing_id ?>" id="enquery_listing_id" />
                        <button class="btn btn-primary button border sign-in " id="enquery_submit_btn" name="op_classiera" type="submit">Submit</button>
                      </div><!--register button-->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- </div> -->
      </div>
    </div>

  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Scripts -->
  <script src="scripts/jquery-3.4.1.min.js"></script>
  <script src="scripts/chosen.min.js"></script>
  <script src="scripts/slick.min.js"></script>
  <script src="scripts/rangeslider.min.js"></script>
  <script src="scripts/bootstrap-select.min.js"></script>
  <script src="scripts/magnific-popup.min.js"></script>
  <script src="scripts/jquery-ui.min.js"></script>
  <script src="scripts/mmenu.js"></script>
  <script src="scripts/tooltips.min.js"></script>
  <script src="scripts/jquery_custom.js"></script>

  <!-- Maps -->
  <script src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
  <script src="scripts/infobox.min.js"></script>
  <script src="scripts/markerclusterer.js"></script>
  <script src="scripts/maps.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> -->

  
  
  
  <script type="text/javascript">
    function update_enquery(listing_id) {
      console.log("hello");
      // show_enquery_popup();
      // console.log(listing_owner_id+" - listing_owner_id\n"+listing_id+" - listing_id\n"+user_id+" - user_id\n"+type+" - type\n"+way+" - way\n");
      <?php
      if (isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) {

      ?>
        $.ajax({
          url: "update_enquery.php",
          type: "POST",
          data: {
            listing_id: listing_id,

          },
          success: function(result) {
            // console.log("success");
            console.log(result);
            // result = JSON.parse(result);
            // if (result.type == 'like') {
            //     $('#comment_like_' + comment_id).html(result.like_count);
            //     $('#comment_btn_like_' + comment_id).attr("src", "/forum/data/thumbs-up-like.svg");
            // }
            if (result.includes("Success")) {
              location.reload();
            }
            // data = result;
            // callback(data);
          },
          error: function() {
            console.log("return error");
          }
        });
        // return data;
      <?php
      } else {
      ?>

        show_enquery_popup();
      <?php
      }
      ?>


    }

    function update_view_interaction(listing_id) {
      console.log("hello");
      // show_enquery_popup();
      // console.log(listing_owner_id+" - listing_owner_id\n"+listing_id+" - listing_id\n"+user_id+" - user_id\n"+type+" - type\n"+way+" - way\n");
      <?php if (isset($_SESSION['user_id']) || isset($_SESSION['enquery_id'])) {


      ?>
        $.ajax({
          url: "update_interaction.php",
          type: "POST",
          data: {
            listing_id: listing_id,
          },
          success: function(result) {
            // console.log("success");
            console.log(result);
            // result = JSON.parse(result);
            // if (result.type == 'like') {
            //     $('#comment_like_' + comment_id).html(result.like_count);
            //     $('#comment_btn_like_' + comment_id).attr("src", "/forum/data/thumbs-up-like.svg");
            // }

            // data = result;
            // callback(data);
          },
          error: function() {
            console.log("return error");
          }
        });
        // return data;
      <?php
      } else {
      ?>

        show_enquery_popup();
      <?php
      }
      ?>


    }
    //##### Add record when Add Record Button is click #########
    $(document).ready(function() {


      // show_registration_popup();
      // ##### Add record when Add Record Button is click #########
      $("#contactForm").submit(function(e) {
        e.preventDefault();
        // alert("hello")
        // var subject = $("#subject").val(); //build a post data structure
        // var message = $("#msg").val(); //build a post data structure       
        var target_listing_id = $("#message_target_listing_id").val(); //build a post data structure       
        var target_user_id = <?= $listing_id ?>;

        jQuery.ajax({
          type: "POST", // Post / Get method
          url: "send_message.php", //Where form data is sent on submission
          dataType: "text", // Data type, HTML, json etc.
          data: {
            message: '',
            subject: '',
            target_user_id: target_user_id,
            target_listing_id: target_listing_id,
          }, //Form variables
          success: function(response) {
            if (response.includes("success")) {

              alert("Message Sent Successfully!");
            }
            if (response.includes("failed")) {
              // alert("Message Sending Failed!");
              show_enquery_popup();

            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            // alert(xhr);
            // alert(ajaxOptions);
            // alert(thrownError);
          }
        });
      });

      $("#enquery_form").submit(function(e) {
        e.preventDefault();
        // alert("hello")
        var enquery_first_name = $("#enquery_first_name").val(); //build a post data structure
        var enquery_last_name = $("#enquery_last_name").val(); //build a post data structure
        var enquery_phone = $("#enquery_phone").val(); //build a post data structure
        var enquery_email = $("#enquery_email").val(); //build a post data structure
        var enquery_form_value = $("#enquery_form_value").val(); //build a post data structure
        var enquery_listing_id = $("#enquery_listing_id").val(); //build a post data structure

        jQuery.ajax({
          type: "POST", // Post / Get method
          url: "response.php", //Where form data is sent on submission
          dataType: "text", // Data type, HTML, json etc.
          data: {
            enquery_first_name: enquery_first_name,
            enquery_last_name: enquery_last_name,
            enquery_phone: enquery_phone,
            enquery_email: enquery_email,
            enquery_listing_id: enquery_listing_id,
            enquery_form_value: enquery_form_value,
          }, //Form variables
          success: function(response) {
            // // $("#responds").append(response);
            console.log(typeof(response));
            console.log(response);
            // console.log(response.includes("success"))  
            if (response.includes("success")) {
              // $("#contactForm").submit();
              alert("Enquery Sent Successfully!");
              location.reload();
            }
            if (response.includes("failed")) {
              alert("Enquery Sending Failed!");
              // show_enquery_popup();

            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            // alert(xhr);
            // alert(ajaxOptions);
            // alert(thrownError);
          }
        });
      });




      // $("#report_form").submit(function(e) {
      //   e.preventDefault();
      //   alert("hello")
      //   var report_ad_val = $("#report_ad_val").val(); //build a post data structure
      //   var enquery_last_name = $("#enquery_last_name").val(); //build a post data structure
      //   var enquery_phone = $("#enquery_phone").val(); //build a post data structure
      //   var enquery_email = $("#enquery_email").val(); //build a post data structure
      //   var enquery_form_value = $("#enquery_form_value").val(); //build a post data structure
      //   var enquery_listing_id = $("#enquery_listing_id").val(); //build a post data structure

      //   jQuery.ajax({
      //     type: "POST", // Post / Get method
      //     url: "response.php", //Where form data is sent on submission
      //     dataType: "text", // Data type, HTML, json etc.
      //     data: {
      //       enquery_first_name: enquery_first_name,
      //       enquery_last_name: enquery_last_name,
      //       enquery_phone: enquery_phone,
      //       enquery_email: enquery_email,
      //       enquery_listing_id: enquery_listing_id,
      //       enquery_form_value: enquery_form_value,
      //     }, //Form variables
      //     success: function(response) {
      //       // // $("#responds").append(response);
      //       // console.log(typeof(response));
      //       // console.log(response.includes("success"))  
      //       if (response.includes("success")) {

      //         alert("Message Sent Successfully!");
      //       }
      //       if (response.includes("failed")) {
      //         alert("Message Sending Failed!");
      //         // show_enquery_popup();

      //       }
      //     },
      //     error: function(xhr, ajaxOptions, thrownError) {
      //       // alert(xhr);
      //       // alert(ajaxOptions);
      //       // alert(thrownError);
      //     }
      //   });
      // });

    });


    // function show_registration_popup() {
    //   hide_login_popup();
    //   hide_enquery_popup();

    //   document.getElementById("overlay_for_registration").style.display = "block";
    // }

    // function hide_registration_popup() {
    //   document.getElementById("overlay_for_registration").style.display = "none";
    // }

    // function show_login_popup() {
    //   hide_registration_popup();
    //   hide_enquery_popup();
    //   document.getElementById("overlay_for_login").style.display = "block";
    // }

    // function hide_login_popup() {
    //   document.getElementById("overlay_for_login").style.display = "none";
    // }







    // function show_registration_popup() {
    //   document.getElementById("overlay_for_login").style.display = "block";
    // }

    // function hide_registration_popup() {
    //   document.getElementById("overlay_for_login").style.display = "none";
    // }

    function show_enquery_popup() {
      // hide_registration_popup();
      // hide_login_popup();
      // alert('heloo');
      document.getElementById("overlay_for_enquery").style.display = "block";
    }

    function hide_enquery_popup() {
      document.getElementById("overlay_for_enquery").style.display = "none";
    }
  </script>
  <script>
    function validation_for_email_username_phone() {
      var email = document.getElementById("enquery_email");
      email = email.value;
      var phone = document.getElementById("enquery_phone");
      phone = phone.value;
      $.ajax({
        url: "./service/validation_for_email_username_phone.php",
        datatype: "JSON",
        type: "POST",
        data: {
          submit: "submit",
          email: email,
          phone: phone,
        },
        success: function(result) {
          result = JSON.parse(result);
          json_data = result;
          console.log(json_data);
          console.log(json_data[0][0]);
          console.log(json_data[1][0]);
          console.log(json_data[2][0]);
          if (0 < (json_data[0][0]).length) {
            $('#label_for_username_validation').html(json_data[0][1]);
          }
          if (0 < (json_data[1][0]).length) {
            $('#label_for_email_validation').html(json_data[1][1]);
          }
          if (0 < (json_data[2][0]).length) {
            $('#label_for_phone_validation').html(json_data[2][1]);
          }

          if (0 < (json_data[0][1] + json_data[1][1] + json_data[2][1]).length) {
            document.getElementById("enquery_submit_btn").disabled = true;
          } else {
            document.getElementById("enquery_submit_btn").disabled = false;
          }
        }
      });
    }
  </script>
  <script>
    // $(document).ready(function() {
    //   update_view_interaction(listing_id);
    // });
  </script>
</body>
</html>


</html>