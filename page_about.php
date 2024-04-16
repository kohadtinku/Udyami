<?php include "validation_of_session.php"?>
<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UdyamiSahayak - About</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/mmenu.css">
    <link rel="stylesheet" href="css/style.css" id="colors">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
        type="text/css">
    <style>
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
        image-rendering: crisp-edges;
        /* Increase image rendering quality */
    }


    .slide-image img {
        width: auto;
        min-width: 100%;
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

    .slide-image:hover+.carousel-controls label {
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

    input:checked+.slide-container .slide-image {
        opacity: 1;
        transform: scale(1);
        transition: opacity 1s ease-in-out;
    }

    input:checked+.slide-container .carousel-controls label {
        display: block;
    }

    input#img-1:checked~.carousel-dots label#img-dot-1,
    input#img-2:checked~.carousel-dots label#img-dot-2,
    input#img-3:checked~.carousel-dots label#img-dot-3,
    input#img-4:checked~.carousel-dots label#img-dot-4,
    input#img-5:checked~.carousel-dots label#img-dot-5,
    input#img-6:checked~.carousel-dots label#img-dot-6 {
        opacity: 1;
    }

    input:checked+.slide-container .nav label {
        display: block;
    }


    .card_main .card:hover img {
        transform: scale(1.2);
        /* Increase the scale of the image on hover */
    }

    .card_main .card .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0);
        /* Initially transparent */
        transition: background-color 0.3s ease;
        z-index: 2;
    }

    .card_main .card:hover .overlay {
        background-color: rgba(0, 0, 0, 0.6);
        /* Fully opaque */
    }

    /* Animation */
    @keyframes attract {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .card_main .card:hover {
        animation: attract 1s ease infinite;
        /* Apply animation to the card on hover */
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

    .row {
        display: block !important;
    }
    </style>


    <!-- card style  -->

    <style>
    /* a[href] {
  position: relative;
  color: #d93566;
  text-decoration: none;
  text-shadow: 2px 2px 2px rgba(21, 37, 54, 0.9);
  padding-bottom: 3px;
  font-weight: bold;
}

a[href]::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  background: #fff;
  width: 0;
  height: 1px;
  transition: width 0.35s cubic-bezier(0.17, 0.67, 0.5, 1.03);
}

a[href]:hover::after {
  width: 100%;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
} */

    .note {
        margin-top: 30px;
        color: #fff;
        font-size: 1rem;
        font-family: 'Merriweather', sans-serif;
        line-height: 1.5;
        text-align: center;
    }

    .my-custom-article {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) translateZ(0);
        width: 350px;
        height: 350px;
        border-radius: 3px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
        overflow: hidden;
    }

    .my-custom-article .thumb {
        width: auto;
        height: 260px;
        background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/new-york-city.png') no-repeat center;
        background-size: cover;
        border-radius: 3px;
    }

    .my-custom-article .infos {
        width: auto;
        height: 350px;
        position: relative;
        padding: 14px 24px;
        background: #fff;
        transition: 0.4s 0.15s cubic-bezier(0.17, 0.67, 0.5, 1.03);
    }

    .my-custom-article .infos .title {
        position: relative;
        margin: 10px 0;
        letter-spacing: 3px;
        color: #152536;
        font-family: 'Grotesque Black', sans-serif;
        font-size: 20px;
        width:100%;
        text-transform: uppercase;
        text-shadow: 0 0 0 rgba(21, 37, 54, 0.2);
    }

    .my-custom-article .infos .flag {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        width: 35px;
        height: 23px;
        background-size: 100% auto;
        display: inline-block;
    }

    .my-custom-article .infos .date,
    .my-custom-article .infos .seats {
        margin-bottom: 10px;
        text-transform: uppercase;
        font-size: 0.85rem;
        color: rgba(21, 37, 54, 0.7);
        font-family: 'Grotesque', sans-serif;
    }

    .my-custom-article .infos .seats {
        display: inline-block;
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        opacity: 0;
        transition: 0.5s 0.25s cubic-bezier(0.17, 0.67, 0.5, 1.03);
    }

    .my-custom-article .infos .txt {
        font-family: 'Merriweather', sans-serif;
        line-height: 2;
        font-size: 15px;
        color: rgba(21, 37, 54, 0.7);
        opacity: 0;
        transition: 0.5s 0.25s cubic-bezier(0.17, 0.67, 0.5, 1.03);
        line-height: 2rem;
    }

    .my-custom-article .infos .details {
        position: absolute;
        left: 0;
        bottom: 0;
        margin: 10px 0;
        padding: 20px 24px;
        letter-spacing: 1px;
        color: #4e958b;
        font-family: 'Grotesque Black', sans-serif;
        font-size: 0.9rem;
        text-transform: uppercase;
        cursor: pointer;
        opacity: 0;
        transition: 0.5s 0.25s cubic-bezier(0.17, 0.67, 0.5, 1.03);
    }

    .my-custom-article:hover .infos {
        transform: translateY(-260px);
    }

    .my-custom-article:hover .infos .seats,
    .my-custom-article:hover .infos .txt,
    .my-custom-article:hover .infos .details {
        opacity: 1;
    }
    .custom1{
      height:500px
    }
    </style>
</head>

<body>
    <!-- <pre>
  <?php 

  var_dump($_SESSION);
  
  ?>
<pre> -->

    <?php include "./component/preloader.php"; ?>


    <!-- Wrapper -->
    <div id="main_wrapper">
        <?php include "./header/global_header.php"; ?>
        <script>
        document.getElementById("navbar_tab_about").classList.add("current");
        </script>
        <div class="clearfix"></div>
        <div class="row">

            <!-- <div class="utf_listing_slider utf_gallery_container margin-bottom-0">
        <a href="images/khadi.jpg" data-background-image="images/khadi.jpg" class="item utf_gallery"></a>
        <a href="images/handcraft.jpg" data-background-image="images/handcraft.jpg" class="item utf_gallery"></a>
        <a href="images/grains.jpg" data-background-image="images/grains.jpg" class="item utf_gallery"></a>
      </div>  -->
            <div class="carousel">
                <ul class="slides">
                    <input type="radio" name="radio-buttons" id="img-1" checked />
                    <li class="slide-container">
                        <div class="slide-image">
                        <img src="images/img/u3.jpg">
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
                        <img src="images/img/u6.jpg">
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
                    <!-- <div class="carousel-dots">
            <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
            <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
            <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
          </div> -->
                </ul>
            </div>
        </div>
<style>


.slide-image img {
    width: 100%; /* Ensure the image takes full width of its container */
    height: 100%; /* Ensure the image takes full height of its container */
    object-fit: cover; /* Cover the entire container while maintaining aspect ratio */
    object-position: center; /* Center the image within its container */
}


  
  .aman{
    background-color: #fffaeb;
    margin-top: -18px;
  }
</style>

<div class="aman">
<br>
        <h2 style="text-align: center;">About Us</h2>
        <nav id="breadcrumbs">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </nav>
        </div>
    </div>

<style>
  .ar  p{
    text-align: center;
    margin-left: 10px;
    margin-left: 10px;

  }
</style>

    <div class="parallax" data-background="images/slider-bg-02.jpg">
        <div class="utf_text_content white-font">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <div class="ar">
                        <h2>Udyamisahayak
                            Start from Anywhere</h2>
                        <p>Udyami is a person who organises and manages a business undertaking, assuming the risk for
                            the sake of the profit or owns, controls or has an important position in the management of
                            an industrial or business enterprise, an entrepreneur, an industrialist, a businessman.</p>
                        <a href="index.php" class="button margin-top-25">Get Started</a>
                        </div></div>
                </div>
            </div>
        </div>
    </div>


    <!-- <section class="fullwidth_block padding-top-75 padding-bottom-55" data-background-color="#fff">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-bottom-20">Entrepreneur <span>Discover & connect with the
                            new world</span></h3>

                </div>
            </div>
            <div class="row">
                <div class="utf_pricing_container_block margin-top-30 margin-bottom-20">

                    <div class="plan featured col-md-6 col-sm-6 col-xs-12">
            <div class="utf_price_plan">
        
              </div>
            
            <div class="my-custom-article">
                                      <div class="thumb">
                                      <img class="i1" src="./images/images1.jpg" style="width: 100%; height: 240px; margin-top: -23px; margin-left: -2px;">
                                      </div>
                                      <div class="infos">
                                          <h2 class="title">Historical Background :<span class="flag"></span></h2>
                                          <p class="txt">
                                          Gandhiji started the All India Village Industries Association on 14-12-1934 in the upperroom of Mahila Ashram, Wardha. Dr Josef Cornellius Kumarappa, known for his theory of Economy of Permanence was chosen by the Congress to lead this movement as per Bapu’s wishes. Shri Krishnadas Jaju became its first President.
                                          </p>
                                      </div>
                                 
               </div>
          </div>

         <div class="plan featured col-md-6 col-sm-6 col-xs-12">
            <div class="utf_price_plan">
           
              </div>
             
              
                                  <div class="my-custom-article">
                                      <div class="thumb"></div>
                                      <div class="infos">
                                          <h2 class="title">Revamping of JBCRI into MGIRI :<span class="flag"></span></h2>
                                          <p class="txt">
                                          To support, upgrade and accelerate the process of Rural Industrialization in the country so that we may move towards the Gandhian vision of sustainable village economy self sufficient in employment and amenities and to provide S&T inputs to make the rural products and services globally competitive.
                                          </p>
                                      </div>
                                  </div>
            </div>
        </div>

                </div>
                <div class="my-custom-article">
                                      <div class="thumb">
                                      <img class="i1" src="./images/images1.jpg" style="width: 100%; height: 240px; margin-top: -23px; margin-left: -2px;">
                                      </div>
                                      <div class="infos">
                                          <h2 class="title">Historical Background :<span class="flag"></span></h2>
                                          <p class="txt">
                                          Gandhiji started the All India Village Industries Association on 14-12-1934 in the upperroom of Mahila Ashram, Wardha. Dr Josef Cornellius Kumarappa, known for his theory of Economy of Permanence was chosen by the Congress to lead this movement as per Bapu’s wishes. Shri Krishnadas Jaju became its first President.
                                          </p>
                    </div>

                    
                    <div class="my-custom-article">
                                      <div class="thumb"></div>
                                      <div class="infos">
                                          <h2 class="title">Revamping of JBCRI into MGIRI :<span class="flag"></span></h2>
                                          <p class="txt">
                                          To support, upgrade and accelerate the process of Rural Industrialization in the country so that we may move towards the Gandhian vision of sustainable village economy self sufficient in employment and amenities and to provide S&T inputs to make the rural products and services globally competitive.
                                          </p>
                                      </div>
                     </div>
               </div>




            </div>
    </section> -->

       <!-- Fullwidth Block Section -->
       <section class="fullwidth_block padding-top-75 padding-bottom-55" data-background-color="#fff">
            <div class="containe r">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="headline_part centered margin-bottom-20">Entrepreneur <span>Discover & connect with the new world</span></h3>
                    </div>
                </div>
                <div class="row">
                    <!-- Pricing Container Block -->
                    <div class="utf_pricing_container_block margin-top-30 margin-bottom-20">
                        <!-- Article 1 -->
                        <div class="plan featured col-md-6 col-sm-6 col-xs-12">
                            <div class="custom1">
                                <div class="my-custom-article">
                                    <div class="thumb">
                                        <img class="i1" src="./images/udyami.jpg" style="width: 100%; height: 380px; margin-top: -23px; margin-left: -2px;">
                                    </div>
                                    <div class="infos">
                                        <h2 class="title">Historical Background :<span class="flag"></span></h2>
                                        <p class="txt">Gandhiji started the All India Village Industries Association on 14-12-1934 in the upperroom of Mahila Ashram, Wardha. Dr Josef Cornellius Kumarappa, known for his theory of Economy of Permanence was chosen by the Congress to lead this movement as per Bapu’s wishes. Shri Krishnadas Jaju became its first President.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Article 2 -->
                        <div class="plan featured col-md-6 col-sm-6 col-xs-12">
                            <div class="custom1">
                                <div class="my-custom-article">
                                    <div class="thumb"></div>
                                    <div class="infos">
                                        <h2 class="title">Revamping of JBCRI into MGIRI :<span class="flag"></span></h2>
                                        <p class="txt">To support, upgrade and accelerate the process of Rural Industrialization in the country so that we may move towards the Gandhian vision of sustainable village economy self sufficient in employment and amenities and to provide S&T inputs to make the rural products and services globally competitive.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include "subscribe_newslatter.php"; ?>

</style>


  
<style>
 @media screen and (max-width: 768px) {
  .slides {
    flex-direction: column;
    overflow-x: hidden;
  }
  
  .slide-container {
    width: 100%;
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

  .footer_copyright p{
        margin-top: 10%;
    }


}
</style>

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
    .footer_copyright p{
        margin-top: 10%;
    }
    /* Add more adjustments as needed */
  }
</style>
    <!-- Footer -->

    <div id="bottom_backto_top"><a href="#"></a></div>
    </div>
    <?php include "./component/footer.php"; ?>

    <!-- Scripts -->
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/chosen.min.js"></script>
    <script src="scripts/slick.min.js"></script>
    <script src="scripts/rangeslider.min.js"></script>
    <script src="scripts/magnific-popup.min.js"></script>
    <script src="scripts/jquery-ui.min.js"></script>
    <script src="scripts/mmenu.js"></script>
    <script src="scripts/tooltips.min.js"></script>
    <script src="scripts/jquery_custom.js"></script>
    <script>
    $(document).ready(function() {
        jQuery.ajax({
            type: "POST", // Post / Get method
            url: "./service/update_counter.php", //Where form data is sent on submission
            dataType: "text", // Data type, HTML, json etc.
            data: {
                state: "about"
            }, //Form variables
            success: function(response) {
                console.log(response);
                console.log(typeof(response));
                console.log(response);
                // alert("hello");
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError);
            }
        });
    });
    </script>

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