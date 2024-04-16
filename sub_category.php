<?php
include "validation_of_session.php";
$category_id = $_GET['category_id'];


?> <?php
    $num_for_listing = 0;
    $select_category_name_query = "SELECT * FROM `category` WHERE  category_id = $category_id ";
    try {
      $select_category_name_result = mysqli_query($connect, $select_category_name_query);
    } catch (Exception $e) {
      // echo "Data insertion failed " . "<br>";
      // echo 'Message: ' . $e->getMessage() . "<br>";
    }
    // echo $select_category_name_query;
    if ($select_category_name_result) {
      $num_for_listing = mysqli_num_rows($select_category_name_result);
    }
    if ($num_for_listing > 0) {
      $sno = 0;
      while ($row_for_listing = mysqli_fetch_assoc($select_category_name_result)) {
        $category_name = $row_for_listing['category_name'];
      }
    } ?>
<!DOCTYPE html>
<html lang="zxx">



<head>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sub Categories</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/mmenu.css">
  <link rel="stylesheet" href="css/style.css" id="colors">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
  <style>
    #tiptip_holder{
      display:none !important;
      height:0px;
    }
    #tiptip_arrow_inner{
      display:none !important;
      height:0px;
    }
    #tiptip_content{
      display:none !important;
      height:0px;
    }


    /* carousel style */
    
/* carousel  */
/* 
.carousel{
    margin-left: 30px;
    margin-right: 30px;

} */

ul.slides {
  display: block;
  position: relative;
  height: 500px;
  margin: 0;
  padding: 0;
  overflow: hidden;
  list-style: none;
}

.slides * {
  user-select: none;
  -ms-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -webkit-touch-callout: none;
}

ul.slides input {
  display: none;
}


.slide-container {
  display: block;
}

.slide-image {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0;
  transition: opacity 0.7s ease-in-out;
  image-rendering: crisp-edges; /* Increase image rendering quality */
}


.slide-image img {
  width: 100%;
  /* min-width: 100%; */
  height: 100%;
}

.carousel-controls {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  font-size: 100px;
  line-height: 600px;
  color: #fff;
}

.carousel-controls label {
  display: none;
  position: absolute;
  padding: 0 20px;
  opacity: 0;
  transition: opacity .2s;
  cursor: pointer;
}


.slide-image:hover + .carousel-controls label{
  opacity: 0.5;
}

.carousel-controls label:hover {
  opacity: 1;
}

.carousel-controls .prev-slide {
  width: 49%;
  text-align: left;
  left: 0;
}

.carousel-controls .next-slide {
  width: 49%;
  text-align: right;
  right: 0;
}

.carousel-dots {
  height: 1px;
  width: auto;
}

.carousel-dots .carousel-dot {
  display: inline-block;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: #fff;
  opacity: 0.5;
  margin: 10px;
}

input:checked + .slide-container .slide-image {
  opacity: 1;
  transform: scale(1);
  transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .carousel-controls label {
   display: block;
}

input#img-1:checked ~ .carousel-dots label#img-dot-1,
input#img-2:checked ~ .carousel-dots label#img-dot-2,
input#img-3:checked ~ .carousel-dots label#img-dot-3,
input#img-4:checked ~ .carousel-dots label#img-dot-4,
input#img-5:checked ~ .carousel-dots label#img-dot-5,
input#img-6:checked ~ .carousel-dots label#img-dot-6 {
opacity: 1;
}

input:checked + .slide-container .nav label { display: block; }


.card_main .card:hover img {
    transform: scale(1.2); /* Increase the scale of the image on hover */
}

.card_main .card .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0); /* Initially transparent */
    transition: background-color 0.3s ease;
    z-index: 2;
}

.card_main .card:hover .overlay {
    background-color: rgba(0, 0, 0, 0.6); /* Fully opaque */
}

/* Animation */
@keyframes attract {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

.card_main .card:hover {
    animation: attract 1s ease infinite; /* Apply animation to the card on hover */
}

.card_main .card:hover h4,
.card_main .card:hover span {
    transition: opacity 0.3s ease;
    opacity: 1;
}


.card:hover .info {
    opacity: 1;
    transform: translateY(0px);
}

.card .info h1 {
    margin: 0px;
}

.card .info p {
    letter-spacing: 1px;
    font-size: 15px;
    margin-top: 8px;
}

.card .info button {
    padding: 0.6rem;
    outline: none;
    border: none;
    border-radius: 3px;
    background: white;
    color: black;
    font-weight: bold;
    cursor: pointer;
    transition: 0.4s ease;
}

.card .info button:hover {
    background: dodgerblue;
    color: white;
}

.card_container {
    width: max-content;
    display: flex;
    gap: 2rem;
    margin-top: 15px;
    justify-content: center;
}
.row{
  display:block !important;
}


.carousel-text {
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2; /* Make sure it appears above the images */
  color: white; /* Text color */
  /* background-color: rgba(0, 0, 0, 0.5); Background color with opacity */
  padding: 20px; /* Adjust padding as needed */
}

.custom_button{
  position: absolute;
    /* margin-bottom: 19vh; */
    transform: translateX(75vh);
    /* transform: translateY(10px); */
    top: 1vh;
    left:30vw;
    border-radius:10px;
    z-index:9999;
}
.custom_button a{
  width:150px;
}
.custom_container:hover{
  background:"blue"

}

  </style>

</head>

<body>
  

<?php include "./component/preloader.php"; ?>


  <!-- Wrapper -->
  <div id="main_wrapper">
    <?php include "./header/global_header.php";
    if ($category_id == '131' || $category_id == '132') {
    ?>
      <script>
        document.getElementById("navbar_tab_<?= $category_id?>").classList.add("current");
      </script>
    <?php
    }
    ?>

<style>

/* Media queries for responsiveness */
@media screen and (max-width: 768px) {
  .slides {
    flex-direction: column;
    overflow-x: hidden;
  }
  
  .slide-container {
    width: 100%;
  }
  .carousel-text {
    top: 20%;
  }
  .carousel-controls {
    width: auto;
  }
  .slide-image{
    width: 100%;
  }
  .prev-slide, .next-slide {
    width: 100%;
    left: 10px;
    right: 100%;
    top: 50%;
    transform: translateY(-50%);
  }
  .utf_listing_item-container.list-layout .utf_listing_item-inner h3{
    width: 190px;
    font-size: 13px;
  }
  .custom_button {
    margin-left: 102%;
    margin-top: -18%;
    position: static; /* Or position: relative; depending on your layout */
    top: 19%;
    left: 60%;
    z-index:9999;

    transform: none;
    transition: top 0.3s, left 0.3s; /* Smooth transition for top and left properties */
}
.header_widget {
	display: flex;}
  .header_widget .button, .header_widget .button.border {
display: flex;}


  
  .next-slide {
    left: auto;
    right: 10px;
  }
  #footer {
    position: relative;
    bottom: auto;
    width: 100%;
    margin-top: 20px; /* Adjust as needed */
  }

  #bottom_backto_top {
    display: none; /* Hide back to top button on mobile */
  }
  
#logo img {
  left: 28px;
}



}
</style>

<!-- Screen Size 320 -->

<style>
   @media (hover: none) {
    .custom_button:hover {
      opacity: 1; /* Ensure opacity is set to 1 on hover for touch devices */
    }
  }

  @media screen and (max-width: 320px) {
    .header_widget {
	display: flex;}
  .header_widget .button, .header_widget .button.border {
display: flex;}
    
    /* Reset margin and padding for elements */
    body, html {
      margin: 0;
      padding: 0;
    }

    /* Make the header responsive */
    #main_wrapper {
      padding-top: 50px; /* Adjust as needed */
    }

    /* Adjust font sizes */
    h2 {
      
      font-size: 16px;
    }

    /* Adjust margins and paddings */
    .utf_listing_item-inner h3 {
      font-size: 14px;
      margin: 5px 0;
    }

    .custom_button {
      margin-left: 102%;
      margin-top: -18%;
    position: static; /* Or position: relative; depending on your layout */
    top: 19%;
    left: 60%;
    z-index:9999;

    transform: none;
    transition: top 0.3s, left 0.3s; /* Smooth transition for top and left properties */
}

.custom_button:hover {
    top: 18%; /* Adjust the top position on hover */
}

    /* Carousel adjustments */
    .slides {
      height: 150px; /* Adjust as needed */
    }

    .carousel-text {
      top: 10%; /* Adjust as needed */
      font-size: 14px; /* Adjust as needed */
    }

    .carousel-controls {
      font-size: 14px; /* Adjust as needed */
    }

    /* Adjust footer */
    #footer {
      padding: 20px 0; /* Adjust as needed */
    }

    /* Bottom back to top button */
    #bottom_backto_top {
      display: none; /* Hide back to top button on small screens */
    }

    /* Add more adjustments as needed */
  }
</style>


<div class="row">
  
  
  <!--           
    <div class="utf_listing_slider utf_gallery_container margin-bottom-0">
      <a href="images/khadi.jpg" data-background-image="images/khadi.jpg" class="item utf_gallery"></a>
      <a href="images/handcraft.jpg" data-background-image="images/handcraft.jpg" class="item utf_gallery"></a>
      <a href="images/grains.jpg" data-background-image="images/grains.jpg" class="item utf_gallery"></a>
    </div>  -->
    
    
 <!-- new carousel -->
<div class="carousel">

  <!-- Text overlay -->
  <div class="carousel-text" >
  <h2 style=" text-align: center; color:white" >Category: <?= $category_name ?></h2>
  </div>
  <ul class="slides">
    <input type="radio" name="radio-buttons" id="img-1" checked />
    <li class="slide-container">
      <div class="slide-image">
      <img src="images/img/u6.jpg">
      </div>
      <div class="carousel-controls">
        <label for="img-3" class="prev-slide">
          <span>‹</span>
        </label>
        <label for="img-2" class="next-slide">
          <span>›</span>
        </label>
      </div>
    </li>
    <input type="radio" name="radio-buttons" id="img-2" />
    <li class="slide-container">
      <div class="slide-image">
      <img src="images/img/u3.jpg">
      </div>
      <div class="carousel-controls">
        <label for="img-1" class="prev-slide">
          <span>‹</span>
        </label>
        <label for="img-3" class="next-slide">
          <span>›</span>
        </label>
      </div>
    </li>
    <input type="radio" name="radio-buttons" id="img-3" />
    <li class="slide-container">
      <div class="slide-image">
      <img src="images/img/u5.jpg">


    </div>
      <div class="carousel-controls">
        <label for="img-2" class="prev-slide">
          <span>‹</span>
        </label>
        <label for="img-1" class="next-slide">
          <span>›</span>
        </label>
      </div>
    </li>
  </ul>
</div>

        </div>
     
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li>Sub Categories</li>
              </ul>
              
            </nav>
    <?php include "./component/searchbar.php";?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="">

          </div>
          <div class="col-md-12">
            <div class="row">
              <?php
              $num_for_listing = 0;
              $select_listing_query = "SELECT * FROM `sub_category` WHERE  sub_category_category_id = $category_id ORDER BY `sub_category`.`sub_category_timestamp` DESC";
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
                $sno = 0;
                while ($row_for_listing = mysqli_fetch_assoc($select_listing_result)) {
                  ++$sno;
              ?>
                  <div class="utf_listing_item-container list-layout custom_container" style="width:100%;display:inline-block;"> 
                  
                  <a href="listings.php?category_id=<?= $category_id ?>&sub_category_id=<?= $row_for_listing['sub_category_id'] ?>" class="utf_listing_item" style="height: 70px;">

                      <!-- <span class="utf_open_now">Open Now</span> -->
                      <div class="utf_listing_item_content">
                          
                        <div class="utf_listing_item-inner">
        
                          <h3><?= $sno ?> ) <?= $row_for_listing['sub_category_name'] ?></h3>
                          <?php $select_listing_count_query = "SELECT * FROM `listing` where listing_permission LIKE 'Approved' and listing_business_sub_category_id = " . $row_for_listing['sub_category_id']; //NOTE: here (`) is not equal to (')
                          try {
                            $select_listing_count_result = 0;
                            if ($connect) {
                              $select_listing_count_result = mysqli_query($connect, $select_listing_count_query);
                              if ($select_listing_count_result) {
                                $num_for_listing_count = mysqli_num_rows($select_listing_count_result);
                              }
                            }
                          } catch (Exception $e) {
                            $mess = $e->getMessage();
                          } ?>
                          <span class="right"><i class="fa fa-list"></i> <?= $num_for_listing_count ?> Listing</span>
                          <!-- <span><i class="fa fa-phone"></i> (+15) 124-796-3633</span> -->
                          <!-- <div class="utf_star_rating_section" data-rating="4.5"> -->
                          <!-- <div class="utf_counter_star_rating">(4.5)</div> -->
                          <!-- </div> -->
                        </div>
                     
                      </div>
                    </a>
                    <div class="custom_button">

                      <a href="./user_panel/dashboard_add_listing.php?requested_category_id=<?= $category_id?>&requested_sub_category_id=<?= $row_for_listing['sub_category_id']?>" class="button border " style="margin-left:auto;float: right;  z-index: 99999;"><i class="sl sl-icon-user"></i> Add Your Listing</a>
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
                        <h3>No Sub Category Found</h3>
                      </div>
                    </div>
                  </a>
                </div>
              <?php
              }

              ?>



            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "subscribe_newslatter.php"; ?>

    
    <!-- <?php include "./component/footer_section_two.php"; ?> -->

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
  <script>

    $('#state').on('change', function() {
      var state_id = this.value;
      // alert("hello");

      $.ajax({
        url: "./service/cities-by-state.php",
        type: "POST",
        data: {
          state_id: state_id
        },
        cache: false,
        success: function(result) {
          $("#city").empty();
          $("#city").removeClass('selectpicker');

          $("#city").append("",
            <?php

            ?> "<select style='margin-bottom:0px' name='city_id' value='' title='' id='city_id' data-selected-text-format='count'> </select> ",
            <?php
            ?>
          );
          $("#city_id").html(result);
          console.log(result);
        }
      });
    });
  </script>

  <!-- Maps -->
  <!-- <script src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
  <script src="scripts/infobox.min.js"></script>
  <script src="scripts/markerclusterer.js"></script>
  <script src="scripts/maps.js"></script> -->

        <!-- carousel script -->
        <script>
  // JavaScript for autoplay functionality
  let currentIndex = 0;
  const slides = document.querySelectorAll('.slides input[type="radio"]');
  
  function showSlide(index) {
    slides[index].checked = true;
  }
  
  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }
  
  setInterval(nextSlide, 3000); // Change slide every 3 seconds (3000 milliseconds)
</script>

</body>



</html>