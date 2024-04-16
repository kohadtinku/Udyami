<?php include "validation_of_session.php" ?>
<!DOCTYPE html>

<html lang="zxx">



<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UdyamiSahayak - Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mmenu.css">
    <link rel="stylesheet" href="css/style.css" id="colors">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
        type="text/css">
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
<script>
ezgif.com-video-to-gif.gif -->

    <style>
    #loading {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        overflow: visible;
        background: url('https://udyamisahayak.com/images/screen.png') no-repeat center;
        background-size: contain;
        background-size: cover;
        z-index: 9999999;

        <?php if(isset($_POST['inogration'])) {}

        else {
            echo'display:none;';
        }

        ?>display:block;
    }

    #divimg {
        animation: slideDown 5s ease-in-out forwards;
    }

    .c_img {
        background-color: white;
        border-radius: 50%;
        animation: slideDown 5s 1s ease-in-out forwards;
    }

    .c_name {
        color: white;
        font-size: 25px;
        margin-top: 30px;
        animation: slideDown 5s 2s ease-in-out forwards;
    }

    .c_desig {
        color: white;
        font-size: 25px;
        margin-top: 0px;
        animation: slideDown 5s 3s ease-in-out forwards;
    }

    .c_info {
        color: white;
        font-size: 15px;
        margin-top: 0px;
        animation: slideDown 5s 4s ease-in-out forwards;
    }

    @keyframes slideDown {
        0% {
            transform: translateY(-100%);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }


    #div_img {
        border: 2px solid dashed;
    }
    </style>
    

</head>

<body>

    <?php 
//    echo'<pre>';
//    var_dump($_SESSION);
//    echo'<pre>';
    ?>

    <?php // include "./component/preloader.php"; ?>

    <!-- Preloader for inogration -->

    <!--<div id="loading" class="banner_loading" >-->
    <!--     <div class="col-md-12 centered_content" style=" margin-top: 20vh;"> -->

    <!--      <div id='divimg'>-->
    <!--        <img  class="c_img" src="images/Shri-Bhanu-Pratap-Singh-Verma.png" alt="MGIRI" width="150" height="150">-->
    <!--        <p class="c_name">Shri Bhanu Pratap Singh Verma</p>-->
    <!--        <p class="c_info">(HON'BLE MINISTER OF STATE, MINISTRY OF MSME GOVT. OF INDIA)</p>-->
    <!--        <p class="c_desig">Senior Vice President, General Council of MGIRI</p>-->

    <!--      </div>-->


    <!--     <button type="button" id="view_webpage" class="button border margin-top-30">Grand Opening Ceremony</button> -->
    <!--     </div>-->

    <!--     </div> -->
    <!-- Preloader End -->

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
        transform: translateY(-15vh)
    margin: top 30px;
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
    
    /* .hCathd:hover {
      color:#ff2222;
    } */

    /* counter css  */

    .hero {
        width: 100%;
        height: 300px;
        /* background-image: linear-gradient(rgba(103, 58, 183, 0.8), rgba(33, 150, 243, 0.5)), url(background.jpg); */
        background-position: center;
        background-size: cover;
        text-align: center;
        position: relative;
    }

    .counter_title {
        width: 60%;
        display: inline-block;
        margin: 150px auto 0;
        color: #fff;
        text-align: center;
    }

    .counter_title h1 {
        margin-bottom: 30px;
    }

    .counter_title p {
        font-size: 13px;
        line-height: 22px;
    }

    .counter_row {
        width: 85%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .counter_col {
        flex-basis: 22%;
        text-align: center;
        color: #555;
    }

    .counter-box {
        width: 100%;
        height: 100%;
        background: #fff;
        padding: 20px 0;
        border-radius: 5px;
        box-shadow: 0 0 20px -4px #66676c;
    }

    .counter {
        display: inline-block;
        margin: 15px 0;
        font-size: 50px;
        color: #000;
    }

    .counter-box .fa {
        font-size: 40px;
        color: #009688;
        display: block;
    }



    /* new css */
    /* .container_categories_box {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.utf_category_small_box_part {
    position: relative;
    width: calc(33.33% - 20px);
    margin: 10px;
    padding: 30px;
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.utf_category_small_box_part:hover {
    transform: translateY(-5px);
}

.skeleton-loading {
    animation: skeleton-loading 1s infinite ease-in-out;
    background: linear-gradient(-90deg, rgba(255, 255, 255, 0.8) 0%, rgba(221, 221, 221, 0.5) 50%, rgba(255, 255, 255, 0.8) 100%);
    background-size: 200% 100%;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: "";
    opacity: 0.5;
}

@keyframes skeleton-loading {
    0% {
        background-position: 100% 50%;
        opacity: 0.5;
    }
    50% {
        opacity: 1;
    }
    100% {
        background-position: -100% 50%;
        opacity: 0.5;
    }
}

.utf_category_small_box_part img {
    max-width: 100%;
    max-height: 350px;
    /* display: block; */
    .card:hover {
            transform: translateY(20px);
            background: linear-gradient(90deg, rgba(247, 57, 5, 1) 0%, rgba(214, 93, 18, 1) 44%, rgba(240, 96, 60, 1) 100%);

        }


    .utf_category_small_box_part h4 {
        margin: 0 0 10px;
        font-size: 16px;
        text-align: center;
    }

    .utf_category_small_box_part span {
        /* display: block; */
        font-size: 14px;
        color: white;
        text-align: center;
    }

    */

    /* Button Styles */
    .button {
        display: inline-block;
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #45a049;
    }
    </style>


    <!-- Wrapper -->
    <div id="main_wrapper">
        <?php include "./header/global_header.php"; ?>

        <div class="clearfix"></div>
        <script>
        document.getElementById("navbar_tab_home").classList.add("current");
        </script>




        <script type="text/javascript">
        function validation_for_email() {
            var email = document.getElementById("register_email");
            email = email.value;
            $.ajax({
                url: "./validation_for_email.php",
                datatype: "json",
                type: "POST",
                data: {
                    submit: "submit",
                    email: email,
                },
                success: function(result) {
                    $('#label_for_email_validation').html(result);
                    if (0 < result.length) {
                        document.getElementById("register_btn").disabled = true;
                    } else {
                        document.getElementById("register_btn").disabled = false;
                    }
                }
            });
        }

        function validation_for_username() {
            var username = document.getElementById("register_username");
            username = username.value;
            $.ajax({
                url: "./validation_for_username.php",
                datatype: "json",
                type: "POST",
                data: {
                    submit: "submit",
                    username: username,
                },
                success: function(result) {
                    $('#label_for_username_validation').html(result);
                    if (0 < result.length) {
                        document.getElementById("register_btn").disabled = true;
                    } else {
                        document.getElementById("register_btn").disabled = false;
                    }
                }
            });
        }



        // $(document).ready(function() {

        //   //##### Add record when Add Record Button is click #########
        //   $("#tab2").submit(function(e) {
        //     e.preventDefault();

        //     var register_username = $("#register_username").val(); //build a post data structure
        //     var register_email = $("#register_email").val(); //build a post data structure
        //     var register_first_name = $("#register_first_name").val(); //build a post data structure
        //     var register_last_name = $("#register_last_name").val(); //build a post data structure
        //     var register_value = $("#register_value").val(); //build a post data structure

        //     // console.log(register_value);
        //     // console.log(register_last_name);
        //     // console.log(register_first_name);
        //     // console.log(register_email);
        //     // console.log(register_username);
        //     jQuery.ajax({
        //       type: "POST", // Post / Get method
        //       url: "response.php", //Where form data is sent on submission
        //       dataType: "text", // Data type, HTML, json etc.
        //       data: {
        //         register_username: register_username,
        //         register_email: register_email,
        //         register_first_name: register_first_name,
        //         register_last_name: register_last_name,
        //         register_value: register_value
        //       }, //Form variables
        //       success: function(response) {

        //         console.log(response);
        //         alert(
        //           'Registration DONE Successfully\n\n' +
        //           "Eamil has been sent successfully, check your email for further process.\n"
        //         );
        //       },

        //       error: function(xhr, ajaxOptions, thrownError) {
        //         alert(thrownError);
        //       }
        //     });
        //   });

        // });
        </script>

        <style>
        @keyframes moveScissors {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(140px);
            }
        }

        @keyframes cutRibbon {
            0% {
                width: 200px;
            }

            50%,
            100% {
                width: 100px;
            }
        }

        .ribbon {
            animation: cutRibbon 4s forwards;
        }

        .scissors {
            animation: moveScissors 4s forwards;
        }

        .preloader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        /* card css */


        .card_main {
            display: flex;
            /* gap:1rem */
            /* width: 90%; */
            /* flex-direction:column; */
            justify-content: space-around;
        }

        .card {
    width: 280px;
    height: 200px;
    border-radius: 15px;
    padding: 1.5rem;
    background: white;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center; /* Center content horizontally */
    justify-content: center; /* Center content vertically */
    transition: 0.4s ease-out;
    box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
}

.card:hover {
    transform: translateY(20px);
}

.card:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 15px;
 
    z-index: 2;
    transition: 0.5s;
    opacity: 0;
}

.card:hover:before {
    opacity: 1;
}

.card img {
  margin-top: 20px;

    width: 100%; /* Take the full width of the card */
    height: 35%; /* Take the full height of the card */
    object-fit: contain; /* or 'contain' depending on your preference */
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 15px;
}
.card h4{
  margin-top: 20px;
}



.card .info {
    position: relative;
    z-index: 3;
    color: white;
    opacity: 0;
    transform: translateY(30px);
    transition: 0.5s;
}

.card_main .card {
    height: 214px;
    width: 223px;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.card_main .card img {
    transition: transform 0.3s ease;
    position: relative;
    z-index: 1;
}


/* Corosure  */



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
    width: 100%;
    display: flex;
    gap: 2rem;
    margin-top: 15px;
    justify-content: center;
}


        /* news style */
        /* Wrapper for the product items */
        .product-slider {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        /* Individual product item */
        .product-item {
            
            flex: 0 0 auto;
            width: 400px;
            /* Adjust as needed */
            scroll-snap-align: start;
            margin-right: 20px;
            /* Adjust spacing between items */
        }

        /* Product thumbnail */
        .product-thumbnail img {
            margin-top: -2px;
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        /* Product meta */
        .product-meta {
            text-align: center;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }

        .product-meta h3 {
            margin-top: 10px;
            margin-bottom: 5px;
            font-size: 18px;
        }

        .product-meta ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .product-meta ul li {
            margin-bottom: 5px;
            font-size: 14px;
        }
        </style>

        <style>
        /* Custom styles for the carousel */
        .utf_carousel_item {
            padding: 10px;
        }

        .utf_listing_item {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .utf_listing_item img {
            max-width: 100%;
            border-radius: 5px;
        }
        </style>
<!-- usefull links css -->
<style>
/* Globals */

.product-thumbnail img {
    transition: transform 0.3s ease-in-out;
}

.product-thumbnail:hover img {
    transform: scale(1.1); /* Increase the size of the product thumbnail on hover */
}


h1 {
font-weight: 900;
font-size: 1.7rem;
max-width: 20ch;
color:"white";
margin-bottom: 20rem;
}

p {
max-width: 60ch;
}

.profile__name{
    color:"white"!important;
}

ul{
list-style: none;
}
/* Utilities */
.auto-grid {
display: grid;
grid-template-columns: repeat(
  auto-fill,
  minmax(var(--auto-grid-min-size, 14rem), 1fr)
);
grid-gap: var(--auto-grid-gap, 0);
padding: 0;
gap: 2rem;
}

.flow > * + * {
margin-top: var(--flow-space, 1em);
}

/* Composition */
.team {
    --flow-space: 2em;
}

/* Blocks */
.profile {
display: flex;
flex-direction: column;
justify-content: flex-end;
aspect-ratio: 1/1;
position: relative;
padding: 1.5rem;
color: #ffffff;
backface-visibility: hidden;
text-decoration: none;
overflow: hidden;
}

.profile::before,
.profile::after {
content: "";
width: 100%;
height: 100%;
position: absolute;
/inset: 0;/
top: 0;
left: 0;
}

.profile::before {
background: linear-gradient(
  to top,
  hsl(0 0% 0% / 0.79) 0%,
  hsl(0 0% 0% / 0.787) 7.8%,
  hsl(0 0% 0% / 0.779) 14.4%,
  hsl(0 0% 0% / 0.765) 20.2%,
  hsl(0 0% 0% / 0.744) 25.3%,
  hsl(0 0% 0% / 0.717) 29.9%,
  hsl(0 0% 0% / 0.683) 34.3%,
  hsl(0 0% 0% / 0.641) 38.7%,
  hsl(0 0% 0% / 0.592) 43.3%,
  hsl(0 0% 0% / 0.534) 48.4%,
  hsl(0 0% 0% / 0.468) 54.1%,
  hsl(0 0% 0% / 0.393) 60.6%,
  hsl(0 0% 0% / 0.31) 68.3%,
  hsl(0 0% 0% / 0.216) 77.3%,
  hsl(0 0% 0% / 0.113) 87.7%,
  hsl(0 0% 0% / 0) 100%
);
transition: 300ms opacity linear;
}

.profile::after {
background: linear-gradient(
  45deg,
  hsl(5 97% 63% / 0.7) 0,
  hsl(5 97% 63% / 0) 100%
);
opacity: 0;
transition: 300ms opacity linear;
}

.profile > * {
z-index: 1;
}

.profile img {
width: 100%;
height: 90%;
position: absolute;
top: 0;
left: 0;
margin: 0;
z-index: -1;
object-fit: cover;
filter: grayscale(1);
transition: filter 200ms ease, transform 250ms linear;
}

.profile h2,
.profile p {
transform: translateY(2ex);
}

.profile h2 {
font-size: 1.7rem;
line-height: 1.2;
font-weight: 900;
letter-spacing: 0.03ch;
transition: 300ms transform ease;
color:"white"
}

.profile p {
font-size: 1.2rem;
font-weight: 500;
}

.profile p {
opacity: 0;
transition: 300ms opacity linear, 300ms transform ease-in-out;
}

.profile:focus {
outline: 0.5rem solid white;
outline-offset: -0.5rem;
}

.profile:hover :is(h2, p),
.profile:focus :is(h2, p) {
transform: none;
}

.profile:hover::after,
.profile:focus::after,
.profile:hover::before,
.profile:focus::before {
opacity: 0.7;
}

.profile:hover p,
.profile:focus p {
opacity: 1;
transition-delay: 200ms;
}

.profile:hover img,
.profile:focus img {
filter: grayscale(0);
transform: scale(1.05) rotate(1deg);
}
</style>

<style>
    .carousel {
  width: 100%;
  overflow: hidden;
  position: relative;
}

.slides {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
  transition: transform 0.5s ease;
}

.slide-container {
  flex: 0 0 100%;
}

.slide-image {
  width: 100%;
  overflow: hidden;
}

.slide-image img {
  width: 100%;
  height: auto;
}

.carousel-controls {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

.prev-slide,
.next-slide {
  position: absolute;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.3);
  color: white;
  display: flex;
  align-items: center;
  padding: 10px;
  cursor: pointer;
}

.prev-slide {
  left: 0;
}

.next-slide {
  right: 0;
}

@media screen and (max-width: 768px) {
  .carousel-controls {
    display: none;
  }
  .footer_copyright p{
        font-size: 12px;
    }
    .container1{
      width: 341px;
    }
    .swiper-wrapper{
        height: 300px;

    }
    .swiper-slide{
    width: 826px;
    }
  
}

</style>

        <script>
        document.querySelector('.ribbon').addEventListener('animationend', function() {
            document.querySelector('.preloader').style.display = 'none';
        });
        </script>

        <!--<svg width="200" height="50" class="preloader">-->
        <!-- Ribbon -->
        <!--    <rect x="0" y="15" width="200" height="20" fill="red" class="ribbon"></rect>-->
        <!-- Scissors (simplified) -->
        <!--    <line x1="30" y1="10" x2="60" y2="25" stroke="black" stroke-width="4" class="scissors"></line>-->
        <!--    <line x1="60" y1="25" x2="30" y2="40" stroke="black" stroke-width="4" class="scissors"></line>-->
        <!--</svg>-->


        <div id="utf_listing_gallery_part" class="utf_listing_section">
            <!-- <div class="utf_listing_slider utf_gallery_container">
                <a href="images/new/1.jpeg" data-background-image="images/new/1.jpeg" class="item utf_gallery"></a>
                <a href="images/new/2.jpeg" data-background-image="images/new/2.jpeg" class="item utf_gallery"></a>
                <a href="images/new/3.jpeg" data-background-image="images/new/3.jpeg" class="item utf_gallery"></a>
            </div> -->


            <!-- new carousal -->
            <section class="fullwidth_block" data-background-color="lightgray">
             <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="styles.css" />
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
    top: 30%;
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
    top: 19%;
    left: 60%;
transform: none;}
  
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

  .section-heading p{
    width: 300px;
  }
  .contact-form-action{
    width: 300px;
  }
  #bottom_backto_top {
    display: none; /* Hide back to top button on mobile */
  }
.footer_copyright p{
    font-size: 13px;
}


}
        /* Media queries for responsiveness */
@media screen and (max-width: 320px) {
  .slides {
    flex-direction: column;
    overflow-x: hidden;
  }
  
  .slide-container {
    width: 100%;
  }
  .carousel-text {
    top: 30%;
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
    top: 19%;
    left: 60%;
transform: none;}
  
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


}

@media screen and (max-width: 425px) {
    .header_widget{
        position: absolute;
        right:60%;
    }
    #logo img{
        margin-left: 10px;
    }
    .slide-image img {
    width: auto;
    min-width: 40%;
    height:100%;
}
.main_input_search_part {
    width: 40%;

}
.sampleMarquee {
    width:40%;
}
.row>* {
    width:45%;
}
.card_container {
    width: 42%;
    display: flex;
    gap: 2rem;
    margin-top: 15px;
    justify-content: center;
    flex-direction: column;
}
/* .slick-initialized.simple_slick_carousel_block{
    width:40%;
} */

  /* Add your responsive CSS here */
  @media screen and (max-width: 425px) {
        .slick_carousel_slider .col-md-12 {
            width: 100%;
        }
        .slick_carousel_slider .simple_slick_carousel_block {
            padding: 0;
            margin-left: -10px;
            margin-right: -10px;
        }
        .slick_carousel_slider .utf_carousel_item {
            padding: 0 10px;
            margin-left: 5px;
        }
        .slick_carousel_slider .utf_listing_item {
            width: 100%;
            padding: 10px;
        }
        .slick_carousel_slider .utf_listing_item img {
            max-width: 100%;
        }
        .slick_carousel_slider .utf_listing_item_content h3 {
            font-size: 14px;
        }
        .headline_part.centered {
    text-align: start;
    margin-left: 55px;
}
    }
    @media screen and (max-width: 425px) {
        .product-sec-wrapper {
            width: 370px;
            padding: 0;
        }
        .product-meta a
        {
            margin-top: -64px;
            margin-left: -109px;
        }
        .product-item {
            width: 00px;
            height: 70px;
            margin-bottom: 20px;
        }
        .product-item .product-thumbnail img {
            width: 100%;
            margin-left: -14px;
            height: auto;
        }
        .product-meta {
            padding: 10px;
            margin-top: 50px;

        }
        .product-meta h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }
        .product-meta ul {
            padding-left: 0;
            margin-bottom: 0;
        }
        .product-meta ul li {
            list-style: none;
            margin-bottom: 5px;
        }
        .row{
            display: flex;
            flex-direction :column;
        }
        .product-meta {
    flex: 1;
    text-align: left;
    display: flex;
    justify-content: center;
}
    }

    
    @media (max-width: 425px) {
            /* .container_12 {
                flex-direction: column;
                align-items: start;
            } */

            .grid_3 {
                width: 80%;
                align-items: center;
            }
            h1 {
    font-weight: 900;
    font-size: 1.7rem;
    max-width: -20ch;
    color: "white";
    margin-bottom: -5rem;
}
.holder {
    height: auto;
    right: 22%;
}
.testimonial {
    width: 500px;
    max-width: 100%;
    background: #ffca52;
    padding: -4em -3em;
    display: flex;
    align-items: flex-end;
    position: relative;
    box-shadow: 0 2px 2px hsla(0, 0%, 0%, 0.075), 0 3px 3px hsla(0, 0%, 0%, 0.075), 0 5px 5px hsla(0, 0%, 0%, 0.075), 0 9px 9px hsla(0, 0%, 0%, 0.075), 0 17px 17px hsla(0, 0%, 0%, 0.075);
    right: 41%;
    /* margin-bottom: 63%; */
    bottom: 40%;
}
.testimonial:after {
    /* content: "";

    border: 8px solid navy;
    border-radius: 50px;
    width: 85%;
    height: 120%;
    position: absolute;
    z-index: -1; */
    /* left: 0.5em;
    top: -1em; */
}
.bq1{
    background:white;

}
.testimonial:before {
    /* content: ""; */
    /* position: absolute; */
    bottom: -71px !important;
    left: 1em !important;
    /* z-index: 1;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 70px 100px 0 0;
    border-color: navy transparent transparent transparent; */
}
        }
        @media (max-width: 425px) {
    .auto-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: start;
    /* height: 250px; */
    width: 650px;
    align-items: center;
    margin-left: 31px;
}

    .auto-grid li {
        flex-basis: calc(50% - 10px); /* Two items per row with 10px gap */
        margin: 5px; /* Half of the gap value */
    }
}

@media (max-width: 425px) {
    .swiper-slide .col-md-3,
    .swiper-slide .col-sm-6,
    .swiper-slide .col-xs-12 {
        width: 100%;
        margin-bottom: 20px; /* Adjust as needed */
    }
    .swiper-container {
    width: 581px;
    height: 401px;
    margin-left: -12%;
    margin-right: 107%;
    position: relative;
    overflow: hidden;
    z-index: 1;
}
.utf_img_content_box {
    position: absolute;
    z-index: 101;
    top: 80%;
    left: 10px;
    margin: 0 auto;
    text-align: left;
    /* width: 5%; */
    transform: translate(0, -50.5%);
    border-left: 4px solid #ff2222;
    border-radius: 2px;
    padding-left: 8px;
    font-size: 10px !important;
}

}

}


/* Media query for screens with a maximum width of 820px */
@media screen and (max-width: 820px) {
    /* Add your responsive styles for 820px screen size here */

    .slides {
        flex-direction: row; /* Adjust as needed */
        overflow-x: auto; /* Add horizontal scroll */
        scrollbar-width: none; /* Hide scrollbar for Chrome, Safari, and Opera */
        -ms-overflow-style: none; /* Hide scrollbar for IE and Edge */
    }

    .slides::-webkit-scrollbar {
        display: none; /* Hide scrollbar for Chrome, Safari, and Opera */
    }

    .slide-container {
        width: auto; /* Adjust as needed */
    }

    .carousel-text {
        top: 50%; /* Adjust as needed */
    }

    .carousel-controls {
        width: auto; /* Adjust as needed */
    }

    .slide-image {
        width: auto; /* Adjust as needed */
    }

    .prev-slide,
    .next-slide {
        width: auto; /* Adjust as needed */
        left: 10px; /* Adjust as needed */
        right: auto; /* Adjust as needed */
        top: 50%; /* Adjust as needed */
        transform: translateY(-50%); /* Adjust as needed */
    }

    .utf_listing_item-container.list-layout .utf_listing_item-inner h3 {
        width: auto; /* Adjust as needed */
        font-size: 16px; /* Adjust as needed */
    }

    .custom_button {
        top: 19%; /* Adjust as needed */
        left: 60%; /* Adjust as needed */
        transform: none; /* Adjust as needed */
    }

    .next-slide {
        left: auto; /* Adjust as needed */
        right: 10px; /* Adjust as needed */
    }

    #footer {
        margin-top: 20px; /* Adjust as needed */
    }

    #bottom_backto_top {
        display: block; /* Show back to top button on mobile */
    }

    /* Additional responsive styles for 820px screen size can be added here */
}


    </style>
  </head>
  <body>
    <div>
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
              <img src="images/img/u5.jpg">
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
              <img src="images/img/u6.jpg">
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
  </body>
</html>

                </a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <?php include "./component/searchbar.php"; ?>
    

<marquee class="sampleMarquee" direction="left" scrollamount="" 5behavior="scroll">
    Latest News


</marquee>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline_part centered margin-top-75"> Most Popular Categories<span>Browse the most
                        desirable categories</span></h3>
            </div>
        </div>
        <!-- new card -->

        <!-- <div class="card_main">

                    <div class="card">

                        <a href="">
                            <img src="https://images.unsplash.com/photo-1477666250292-1419fac4c25c?auto=format&fit=crop&w=667&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                alt="Mountain">
                            <div class="info">
                                <h1>Mountain</h1>
                                <span>4</span>
                            </div>
                        </a>
                        
                    </div>
                </div> -->




        <div class="card_container" style="display: flex; flex-wrap: wrap;">
            <?php
    $select_category_query = "SELECT * FROM `category` ORDER BY category_since DESC";

    try {
        $select_category_result = 0;
        if ($connect) {
            $select_category_result = mysqli_query($connect, $select_category_query);
            if ($select_category_result) {
                $category_num = mysqli_num_rows($select_category_result);
            }
        }
    } catch (Exception $e) {
        $mess = $e->getMessage();
    }

    if ($category_num > 0) {
        $sno = 0;
        $count = 0; // Initialize count variable
        while ($row = mysqli_fetch_assoc($select_category_result)) {
            $select_listing_count_query = "SELECT * FROM `listing` WHERE listing_permission LIKE 'Approved' AND listing_business_category_id = " . $row["category_id"];
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
            }

            if ($num_for_listing_count > 0) {
                if ($count % 4 == 0) { // Check if count is divisible by 3 (every third card)
                    echo "</div><div class='card_container' style=' flex-wrap: wrap;'>"; // Start a new row
                }
    ?>
            <div class="card_main">
    <a href="sub_category.php?category_id=<?= $row["category_id"]; ?>">
        <div class="card">
            <img class="img1" src="./images/<?= $row['category_image'] ?>">
            <h4><?= $row['category_name'] ?></h4>
            <span><?= $num_for_listing_count ?></span>
        </div>
    </a>
</div>

            <?php
                $count++; // Increment count after adding a card
            }
        }
    }
    ?>
        </div>



    </div>
    </div>


    <div class="col-md-12 centered_content"> <a href="#" class="button border margin-top-20">View
            More</a> </div>
    </div>
    </div>
    </div>

    <section class="fullwidth_block margin-top-65 padding-top-75 padding-bottom-70" data-background-color="white" >
        <div class="ar">
            <div class="row slick_carousel_slider">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-bottom-45"> Latest Business News <span></span>
                    </h3>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="simple_slick_carousel_block utf_dots_nav">
                            <div class="utf_carousel_item"> <a href="#" class="utf_listing_item-ar compact">
                                    <div class="utf_listing_item"> <img src="images/img/u3.jpg" alt=""> <span
                                            class="tag"><i class="im im-icon-Jeep-2"> PROFESSIONAL SERVICES</i>
                                        </span>
                                        <span class="utf_open_now">Open Now</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                                <span class="utf_meta_listing_price"><i class="fa fa-tag"></i>Industrial
                                                    Services</span>
                                            </div>
                                            <h3 style="color: beige;"> This section gives information about
                                                services available to run your business efficiently.</h3>

                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"> <a href="#" class="utf_listing_item-ar compact">
                                    <div class="utf_listing_item">
                                    <img src="images/img/u3.jpg" alt=""> <!-- Full image displayed -->
                                         <span
                                            class="tag"><i class="im im-icon-Factory"></i>Agriculture and Food
                                            Processing</span>
                                        <span class="utf_open_now">Open Now</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                                <span class="utf_meta_listing_price"><i class="fa fa-tag"></i>Machines
                                                    Industries</span>
                                            </div>
                                            <h3 style="color: beige;"> Get details about machines and Equipments
                                                useful for Khadi & Village Industries.</h3>

                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="utf_carousel_item"> <a href="#" class="utf_listing_item-ar compact">
                                    <div class="utf_listing_item"> <img src="images/img/u8.jpg" alt="">
                                        <span class="tag"><i class="im im-icon-Control-2"></i>Khadi and
                                            Textile</span>
                                        <span class="utf_open_now">Open Now</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                                <span class="utf_meta_listing_price"><i
                                                        class="fa fa-tag"></i>Technologies</span>
                                            </div>
                                            <h3 style="color: beige;">Browse through innovative technologies &
                                                processes developed by various Institutions</h3>

                                        </div>
                                    </div>

                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            </a>
        </div>
        </div>
        </div>
        </div>
        </div>
    
        </div>
        

    </section>









    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.simple_slick_carousel_block').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            autoplay: true, // Enable autoplay
            autoplaySpeed: 3000 // Set autoplay speed in milliseconds (3 seconds)
        });
    });
    </script>





    <!-- NEW ADDED SECTION ***   section    products ********FOR MACHINE SECTION******* -->
    
    <style>
        
    </style>
    <div>
        <h3 class="headline_part centered margin-bottom-45"> Latest Business Listings <span></span> </h3>
    </div>

    <?php
  $select_category_query = "SELECT * FROM `category` ORDER BY category_since DESC"; //NOTE: here (`) is not equal to (')
  try {
    $select_category_result = 0;
    if ($connect) {
      $select_category_result = mysqli_query($connect, $select_category_query);
      if ($select_category_result) {
        $category_num = mysqli_num_rows($select_category_result);
      }
    }
  } catch (Exception $e) {
    $mess = $e->getMessage();
  }

  if ($category_num > 0) {
    $sno = 0;
    //Note : mysqli_fetch_assoc($result) it returns NULL when no data is persent to Select
    while ($row_for_category = mysqli_fetch_assoc($select_category_result)) {
      $category_name = $row_for_category['category_name'];
      $category_id = $row_for_category['category_id'];
      $show_banner_of_category = false;

  ?>
  <style>
    .dashboard_notifi_item {
    display: flex;
    padding: 15px 20px;
    border-bottom: 1px solid #f2f2f2;
    transition: all .5s ease;
    background: violet;
}

.product-thumbnail img {
    margin-left: 48px;

        max-width: 100%;
        height: auto%;
        width: 40%; /* Ensure the image fills the container */
        max-height: 200px; /* Adjust the max-height as needed */
    }
  </style>

<style>
    /* CSS for animations */
    @keyframes slideIn {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* CSS for card design */
    .product-item {
        
        /* border: 1px solid #ccc;
        border-radius: 5px; */
        padding: 15px;
        margin-bottom: 20px;
        animation: fadeIn 0.5s ease forwards; /* Apply fadeIn animation to each product item */
        display: flex; /* Use flexbox to center items */
        justify-content: space-between; /* Space items evenly along the main axis */
        align-items: center; /* Center items vertically */
        text-align: center; /* Center text within items */
    }

    .product-meta {
        flex: 1; /* Allow the text to take up remaining space */
        text-align: right; /* Align text to the right */
    }



    .product-meta h3 {
        margin-top: 0;
        margin-left: 200px;
    }

    .product-meta ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .product-meta ul li {
        margin-bottom: 5px;
    }
</style>
<script>
    // Function to check if an element is in the viewport
    function isInViewport(element) {
        var rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to handle scroll event
    function handleScroll() {
        var productItems = document.querySelectorAll('.product-item');
        productItems.forEach(function(item) {
            if (isInViewport(item)) {
                item.classList.add('visible');
            }
        });
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);

    // Initial check when the page loads
    handleScroll();
</script>


    <section class="products" id="banner_category_<?= $category_id ?>">
        <div class="container">
            <div class="product-sec-wrapper" style="border: 50px;">

                <div style="width:100%;background-color:#ffd2d2;" class="tableItem dashboard_notifi_item ">
                    <div class="bg-c1 ">
                        <img src='./images/<?= $row_for_category['category_image'] ?>'
                            style="padding:5px;max-height:60px;width:auto;"></img>
                        <h2><a class="hCathd" style="text-decoration:none;color:black;"
                                href="sub_category.php?category_id=<?= $row_for_category["category_id"] ?>">
                                <?= $row_for_category["category_name"] ?> </a></h2>
                    </div>

                </div>
               




                <div class="minht cBFlex" id="1">


                    <div class="row cBW100">
                        <?php
                $num_for_sub_category = 0;
                $select_sub_category_query = "SELECT * FROM `sub_category` WHERE  sub_category_category_id = " . $row_for_category['category_id'] . " ORDER BY `sub_category`.`sub_category_timestamp` DESC";
                try {
                  $select_sub_category_result = mysqli_query($connect, $select_sub_category_query);
                } catch (Exception $e) {
                  // echo "Data insertion failed " . "<br>";
                  // echo 'Message: ' . $e->getMessage() . "<br>";
                }
                // echo $select_sub_category_query;
                if ($select_sub_category_result) {
                  $num_for_sub_category = mysqli_num_rows($select_sub_category_result);
                }
                if ($num_for_sub_category > 0) {
                  $sno = 0;
                  while ($row_for_sub_category = mysqli_fetch_assoc($select_sub_category_result)) {
                    $sub_category_name = $row_for_sub_category['sub_category_name'];
                    $sub_category_id = $row_for_sub_category['sub_category_id'];
                ?> 
                <div class="col-md-4 col-sm-6 bdr1" id="banner_sub_category_<?= $sub_category_id ?>">
                            <div class="product-item">
                                <div class="product-thumbnail lazy">
                                    <a
                                        href="listings.php?category_id=<?= $category_id ?>&sub_category_id=<?= $sub_category_id ?>"><img
                                            data-original="images/smallOilExpeller.jpg"
                                            alt="<?= $row_for_sub_category['sub_category_name'] ?>"
                                            src="images/<?= $row_for_sub_category['sub_category_image'] ?>"
                                            
                                            title="<?= $row_for_sub_category['sub_category_name'] ?>"></a>
                                </div>
                                <div class="product-meta">
                                    <a
                                        href="listings.php?category_id=<?= $category_id ?>&sub_category_id=<?= $sub_category_id ?>">
                                        <h3><?= $row_for_sub_category['sub_category_name'] ?>
                                        </h3>
                                    </a>
                                    <ul>
                                        <?php
                            $num_for_listing = 0;
                            $select_listing_query = "SELECT * FROM listing left join sub_category on listing.listing_business_sub_category_id = sub_category.sub_category_id left join category on listing.listing_business_category_id = category.category_id where listing.listing_permission LIKE 'Approved' and sub_category.sub_category_id like  $sub_category_id and category.category_id like  $category_id ORDER BY `listing`.`listing_timestamp` DESC ";
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
                                $show_banner_of_category = true;

                                $listing_id  = $row_for_listing['listing_id'];
                            ?>
                                        <!-- <img src="images/<?= $row_for_listing['listing_image'] ?>" alt=""> -->
<!-- 
                                        <li><a
                                                href="listings.php?category_id=<?= $category_id ?>&sub_category_id=<?= $sub_category_id ?>">
                                                <?= $row_for_listing['listing_business_name'] ?> </a></li> -->
                                        <?php
                              }
                            } else {
                              ?>

                                        <h5>No Listing Found</h5>
                                        <style>
                                        #banner_sub_category_<?=$sub_category_id ?> {
                                            display: none;
                                        }
                                        </style>

                                        <?php
                            }

                            ?>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- <li><a href="listings.php?category_id=<?= $category_id ?>&sub_category_id=<?= $row_for_listing['sub_category_id'] ?>"><?= $row_for_sub_category['sub_category_name'] ?></a></li> -->
                        <?php
                  }
                } else {
                  ?>

                        <div class="col-md-4 col-sm-6 bdr1">
                            <div class="product-item">
                                <div class="product-thumbnail lazy">
                                    <!-- <a href="#"><img data-original="images/smallOilExpeller.jpg" alt="oil expeller" src="images/smallOilExpeller.jpg" title="smallOilExpeller"></a> -->
                                </div>
                                <div class="product-meta">
                                    <h3>No Sub Category Found</h3>

                                </div>
                            </div>
                        </div>


                    </div>
                    <?php
                } ?>

                </div>
            </div>
        </div>
        </div>
    </section>
    <?php

      if (!$show_banner_of_category) {
      ?>
    <style>
    #banner_category_<?=$category_id ?> {
        display: none;
    }
    </style>
    <?php

      }
    }
  }

  ?>

    <br>



    <!-- new section -->






    <!--***********************
              NEWS 
      **********************-->

     
<div class="container">
    <div class="container_12" style="justify-content: center;display: flex">
    <h1>Current News</h1>
        <div class="grid_3" style="display: flex;
    justify-content: start;
    align-items: start;
    /* padding: 10px; */
    /* margin: 12px; */
    gap: 2rem;
    width: 100%;">
            <br>
            <br>
            <br>
            <div class="holder">
                <div class="mask">
                    <ul id="ticker01">
                        <li> <time datetime="2014-01-01">29<span>Jan</span></time>
                            <div class="extra_wrapper">
                                <div class="title col2"><a href="#">Solar Charkha </a></div>
                                revoulation in khadi sector
                                <button style="background-color: #ffffff; -webkit-text-fill-color: black;"
                                    type="button" class="btn btn-link">Read More</button>
                            </div>
                        </li>
                        <li>
                            <time datetime="2014-01-01">02<span>Feb</span></time>
                            <div class="extra_wrapper">
                                <div class="title col2"><a href="#">Incubation Program</a></div>
                            </div>
                        </li>
                        <li> <time datetime="2014-01-01">20<span>Feb</span></time>
                            <div class="extra_wrapper">
                                <div class="title col2"><a href="#">MGIRI interface</a></div>
                                first phase of networked functioning
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <style></style>
            <blockquote class="bq1">
            <div class="testimonial">
	<span class="open quote">“</span>
	<div class="image">
		<div class="clip"></div>
		<img src="https://placehold.co/100">
	</div>
	<p class="p">"The essence of entrepreneurship is to serve, to demonstrate compassion, and to have the relentless will to help others."

</p>
	<div class="source">		
		<span>Albert Schweitzer</span>
	</div>
	<span class="close quote">”</span>
</div>


            </div>

            <style>

.testimonial {
    width: 400px;
    max-width: 100%;
    background: #ffca52;
    padding: 4em 3em;
    display: flex;
    align-items: flex-end;
    position: relative;
    box-shadow: 0 2px 2px hsla(0, 0%, 0%, 0.075), 0 3px 3px hsla(0, 0%, 0%, 0.075), 0 5px 5px hsla(0, 0%, 0%, 0.075), 0 9px 9px hsla(0, 0%, 0%, 0.075), 0 17px 17px hsla(0, 0%, 0%, 0.075);
}

.testimonial:after {
    content: "";
    border: 8px solid navy;
    border-radius: 50px;
    width: 85%;
    height: 120%;
    position: absolute;
    z-index: -1;
    left: 1.5em;
    top: -2em;
}

.testimonial:before {
    content: "";
    position: absolute;
    bottom: -2.1em;
    left: 2em;
    z-index: 1;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 70px 100px 0 0;
    border-color: navy transparent transparent transparent;
}

.quote {
    position: absolute;
    font-size: 3em;
    width: 40px;
    height: 40px;
    background: navy;
    color: #fff;
    text-align: center;
    line-height: 1.25;
}

.quote.open {
    top: 0;
    left: 0;
}

.quote.close {
    bottom: 0;
    right: 0;
}

p {
    width: 60%;
    display: inline-block;
    font-weight: bold;
    font-size: 1.25em;
}

.source {
    width: 40%;
    height: 100%;
    position: relative;
}

.source span {
    /* margin-righy: 22rem; */
    margin-top: 00px;
    display: inline-block;
    font-weight: bold;
    font-size: 1.15em;
    position: absolute;
    margin-left: 1rem;
    text-align: left;
    margin-left: -11rem;
}

.source span:before {
    content: "\2014";
    display: inline;
    margin-right: 5px;
}

.image {
    transform: rotate(-5deg);
    position: absolute;
    top: 0.5em;
    right: 1.5em;
}

.image img {
    border: -1px solid #fff;
    margin: 0;
    padding: 0;
}

.image .clip {
    border: 2px solid #222;
    border-right: none;
    height: 75px;
    width: 20px;
    position: absolute;
    right: 30%;
    top: -15%;
    border-radius: 25px;
}

.image .clip:before {
    content: "";
    position: absolute;
    top: -1px;
    right: 0;
    height: 10px;
    width: 16px;
    border: 2px solid #222;
    border-bottom: none;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    z-index: 99;
}

.image .clip:after {
    content: "";
    position: absolute;
    bottom: -1px;
    right: 0;
    height: 40px;
    width: 16px;
    border: 2px solid #222;
    border-top: none;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
    z-index: 99;
}
                </style>
    </div>
</div>
<style>
    .bq1 {
        width: 40%;
        position: relative;
        animation: zoomInOut 5s infinite alternate;


    }

    @keyframes zoomInOut {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
    }
     /* Media Queries */
     @media screen and (max-width: 768px) {
        .bq1 .testimonial p {
            width: 100%;
        }
        .bq1 .testimonial .source {
            display: none;
        }
        .bq1 .testimonial .image {
            position: relative;
            transform: none;
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .container_12 {
    margin-left: 0px;
    margin-right: 0px;
    width: 800px;
}
.grid_3{
    display: flex;
    justify-content: start;
    align-items: start;
   
    width: 100%;
    flex-direction: column;
}
    }

    /* Other styles remain the same */
</style>
<style>
    .holder {
        overflow: hidden;
        height: 100px; /* Adjust height as needed */
        position: relative;
    }

    .mask {
        width: 100%;
        position: absolute;
        animation: scroll 10s linear infinite;
    }

    @keyframes scroll {
        0% { top: 0; }
        100% { top: -100%; }
    }

    /* Other styles remain the same */
</style>
    <style>
        /* Styling for the ticker holder */
        .holder {
            background-color: #f2f2f2;
            /* Light grey background */
            width: 300px;
            height: 250px;
            overflow: hidden;
            padding: 10px;
            font-family: Arial, sans-serif;
            /* Change font to Arial */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Box shadow for depth */
        }

        /* Styling for the ticker mask */
        .holder .mask {
            position: relative;
            left: 0px;
            top: 10px;
            width: 100%;
            /* Use full width of the parent */
            height: 240px;
            /* Adjusted height */
            overflow: hidden;
        }

        /* Styling for the ticker list */
        .holder ul {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
        }

        /* Styling for each ticker item */
        .holder ul li {
            padding: 10px 0px;
            border-bottom: 1px solid #ddd;
            /* Add bottom border for separation */
            transition: background-color 0.3s ease;
            /* Smooth background color transition */
        }

        /* Hover effect for ticker items */
        .holder ul li:hover {
            background-color: #f9f9f9;
            /* Light grey background on hover */
        }

        /* Styling for ticker item links */
        .holder ul li a {
            color: #333;
            /* Dark text color */
            text-decoration: none;
            font-weight: bold;
            /* Make text bold */
            transition: color 0.3s ease;
            /* Smooth text color transition */
        }

        /* Hover effect for ticker item links */
        .holder ul li a:hover {
            color: #d9534f;
            /* Red text color on hover */
        }

            /* Media Query for ticker */
    @media screen and (max-width: 768px) {
        
        .holder {
            height: auto; /* Adjust height for mobile */
        }
        .holder .mask {
            width: auto; /* Adjust width for mobile */
            height: auto; /* Adjust height for mobile */
            position: relative;
        }
        .holder ul li {
            padding: 10px;
            border-bottom: none;
        }
        .utf_subscribe_block{
            width: 340px;
        }
    }
        </style>
          
        </div>

        
        <br>
        <br>
<!-- Usefull links -->
<article class="flow">
    <h2>UseFull Links</h2>
        <div class="team">
          <ul class="auto-grid" role="list">
            <li>
              <a href="#" target="_blank" class="profile">
                <span class="profile__name">Ministry of MSME, New Delhi</span>
                <img alt="Anita Simmons" src="images/MSME-DELHI.jpeg" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank" class="profile">
                <span class="profile__name">KVIC ,Mumbai</span>
           
                <img alt="Profile shot for Celina Harris" src="images/KVIC MUMBAI.jpeg" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank" class="profile">
                <span class="profile__name">MGIRI,Wardha</span>
           
                <img alt="Profile shot for Ruby Morris" src="images/MGIRI_WARDHA.jpg" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank" class="profile">
                <span class="profile__name">Ruralhaat</span>
             
                <img alt="Profile shot for Nicholas Castro" src="images/rurlahta.jpeg" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank" class="profile">
                <span class="profile__name">Khadi Design</span>
              
                <img alt="Profile shot for Marc Dixon" src="images/khadi_design.jpeg" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank" class="profile">
                <span class="profile__name">NSIC</span>
            
                <img alt="Profile shot for Chad" src="images/NSIC.png" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank" class="profile">
                <span class="profile__name">Coir Board</span>
            
                <img alt="Profile shot for Chad" src="images/COIR_BOARD.jpeg" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank" class="profile">
                <span class="profile__name">MSME, Hydrabad</span>
            
                <img alt="Profile shot for Chad" src="images/msmehydra.jpg" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank" class="profile">
                <span class="profile__name">MSME UDYAM</span>
            
                <img alt="Profile shot for Chad" src="images/msme udyam.jpeg" />
              </a>
            </li>
          </ul>
        </div>
      </article>

        <!--*****NEWS END ****-->
    </div>
    </div>


    <?php
  $select_visitor_count_query = "SELECT * FROM `visitor_count`"; //NOTE: here (`) is not equal to (')
  try {
    $select_visitor_count_result = 0;
    if ($connect) {
      $select_visitor_count_result = mysqli_query($connect, $select_visitor_count_query);
      if ($select_visitor_count_result) {
        $visitor_count_num = mysqli_num_rows($select_visitor_count_result);
      }
    }
  } catch (Exception $e) {
    $mess = $e->getMessage();
  }

  if ($visitor_count_num > 0) {
    $sno = 0;
    //Note : mysqli_fetch_assoc($result) it returns NULL when no data is persent to Select
    while ($row = mysqli_fetch_assoc($select_visitor_count_result)) {
      $visitor_count_home = $row["visitor_count_home"];


  ?>
    <!-- <section class="utf_cta_area_item utf_cta_area2_block">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="utf_subscribe_block clearfix">
                <div class="col-md-12 col-sm-7">


                  <div class="hero">

                    <div class="counter_row">
                      <div class="counter_col">
                        <div class="counter-box">
                          <i style="color:red" class="fa fa-users"></i>
                          <h2 style="padding-top: 15px;" class="counter"><?= $visitor_count_home ?></h2>
                          <h4>Visitors Count</h4>
                        </div>
                      </div> -->
    <!-- <div class="counter_col">
                        <div class="counter-box">
                          <i style="color:red" class="fa fa-list"></i>
                          <h2 style="padding-top: 15px;" class="counter"><?= $visitor_count_home ?></h2>
                          <h4>Listing count</h4>
                        </div>
                      </div> -->
    <!-- <div class="counter_col">
                    <div class="counter-box">
                      <i  style="color:red"class="fa fa-coffee"></i>
                      <h2 style="padding-top: 15px;"class="counter"><?= $visitor_count_home ?></h2>
                      <h4>CUPS OF COFFEE</h4>
                    </div>
                  </div>
                  <div class="counter_col">
                    <div class="counter-box">
                      <i style="color:red"class="fa fa-globe"></i>
                      <h2 style="padding-top: 15px;"class="counter"><?= $visitor_count_home ?></h2>
                      <h4>VISITED COUNTRIES</h4>
                    </div>
                  </div> -->

    <!-- </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section> -->
    <?php }
  }

  ?>



    <?php

  $count_page = ("hitcount.txt");
  $hits = file($count_page);
  $hits[0]++;

  $fp = fopen($count_page, "w");
  fputs($fp, "$hits[0]");
  fclose($fp);
  // echo $hits[0];

  ?>
    <div class="container padding-bottom-70">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline_part centered margin-bottom-35 margin-top-70">Most Use Products<span>Discover best
                        things to do Hardware, technologies,industry, Minerals industry and khadi industry<br>around the
                        world by categories.</span></h3>
            </div>


            <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/industry.jpeg">
                    <div class="utf_img_content_box visible">
                        <h4>Industries </h4>
                        <span>18 Listings</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/minerals.jpeg">
                    <div class="utf_img_content_box visible">
                        <h4>Minerals</h4>
                        <span>24 Listings</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/Machines.jpg">
                    <div class="utf_img_content_box visible">
                        <h4>Machines</h4>
                        <span>17 Listings</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/hardware.jpeg">
                    <div class="utf_img_content_box visible">
                        <h4>Hardware</h4>
                        <span>12 Listings</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/technolog.jpg">
                    <div class="utf_img_content_box visible">
                        <h4>technolog</h4>
                        <span>14 Listings</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/labour.jpeg">
                    <div class="utf_img_content_box visible">
                        <h4>Labour</h4>
                        <span>9 Listings</span>
                    </div>
                </a>
            </div> -->

            <div class="second_swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="img-box" data-background-image="images/industry.jpeg">
                        <div class="utf_img_content_box visible">
                            <h4>Industries</h4>
                            <span>18 Listings</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/minerals.jpeg">
                    <div class="utf_img_content_box visible">
                        <h4>Minerals</h4>
                        <span>24 Listings</span>
                    </div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/Machines.jpg">
                    <div class="utf_img_content_box visible">
                        <h4>Machines</h4>
                        <span>17 Listings</span>
                    </div>
                </a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/hardware.jpeg">
                    <div class="utf_img_content_box visible">
                        <h4>Hardware</h4>
                        <span>12 Listings</span>
                    </div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/technolog.jpg">
                    <div class="utf_img_content_box visible">
                        <h4>Technology</h4>
                        <span>14 Listings</span>
                    </div>
                </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="#" class="img-box" data-background-image="images/labour.jpeg">
                    <div class="utf_img_content_box visible">
                        <h4>Labour</h4>
                        <span>9 Listings</span>
                    </div>
                </a>
                </div>
            </div>
            <!-- Repeat similar structure for other items -->
        </div>

         <!-- Add pagination if needed -->
         <div class="swiper-pagination">1</div>



            <div class="centered_content"> <a href="#" class="button border margin-top-20">View More
                    Categories</a> </div>
        </div>
           
    </div>

    <!--- break<!-->

    <!-- <section class="utf_testimonial_part fullwidth_block padding-top-75 padding-bottom-75"> 
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3 class="headline_part centered">What Say Our Customers <span class="margin-top-15">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since...</span> </h3>
        </div>
      </div>
    </div>
    <div class="fullwidth_carousel_container_block margin-top-20">
      <div class="utf_testimonial_carousel testimonials"> 
        <div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="images/happy-client-01.jpg" alt="">
            <h4>Denwen Evil <span>Web Developer</span></h4>
          </div>
        </div>
        <div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="images/happy-client-02.jpg" alt="">
            <h4>Adam Alloriam <span>Web Developer</span></h4>
          </div>
        </div>
        <div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="images/happy-client-03.jpg" alt="">
            <h4>Illa Millia <span>Project Manager</span></h4>
          </div>
        </div>
		<div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="images/happy-client-01.jpg" alt="">
            <h4>Denwen Evil <span>Web Developer</span></h4>
          </div>
        </div>
      </div>
    </div>
  </section>   -->
    <marquee class="sampleMarquee" direction="left" scrollamount="8" behavior="scroll"> Disclaimer - Mahatma Gandhi
        Institute for Rural Industrilization is not responsible for any legal complications arising between seller and
        purchaser
    </marquee>


    <?php include "subscribe_newslatter.php"; ?>

    <!-- Footer -->
    <div id="footer" class="footer_sticky_part">
        <div class="container">
            <!-- <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>Useful Links</h4>
          <ul class="social_footer_link">
            <li><a href="#">Home</a></li>
            <li><a href="#">Listing</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>My Account</h4>
          <ul class="social_footer_link">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">My Listing</a></li>
            <li><a href="#">Favorites</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>Pages</h4>
          <ul class="social_footer_link">
            <li><a href="#">Blog</a></li>
            <li><a href="#">Our Partners</a></li>
            <li><a href="#">How It Work</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>Help</h4>
          <ul class="social_footer_link">
            <li><a href="#">Sign In</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Add Listing</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12"> 
          <h4>About Us</h4>
          <p>The new processes, techniques and machines were brought to the knowledge of the public through exhibitions. AIVIA also struggled to bring about a transformation in the villages in terms of sanitation, improved diet, indigenous healthcare and local resource based employment.
            </p>          
        </div>
      </div>-->

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
    <script src="scripts/magnific-popup.min.js"></script>
    <script src="scripts/jquery-ui.min.js"></script>
    <script src="scripts/bootstrap-select.min.js"></script>
    <script src="scripts/mmenu.js"></script>
    <script src="scripts/tooltips.min.js"></script>
    <script src="scripts/jquery_custom.js"></script>

    <script>
    function hideLoader() {
        $('#loading').hide();
    }

    //$("#loading").on("click", function () {
    //    $('#loading').hide();
    //    
    //});
    $("#view_webpage").on("click", function() {

        setTimeout(hideLoader, 14 * 1000);
        //alert("window loaded.");
        $("#loading").css("position", "fixed");
        $("#loading").css("width", "100%");
        $("#loading").css("height", "100%");
        $("#loading").css("top", "0");
        $("#loading").css("left", "0");
        $("#loading").css("overflow", "visible");
        $("#loading").css("background",
            "url('https://udyamisahayak.com/images/banner_trans.gif') no-repeat center");
        $("#loading").css("background-size", "contain");
        $("#loading").css("background-size", "content");
        $("#loading").css("z-index", "9999999");

        $("#view_webpage").hide();
        $("#divimg").hide();
    });



    $(document).ready(function() {




        jQuery.ajax({
            type: "POST", // Post / Get method
            url: "./service/update_counter.php", //Where form data is sent on submission
            dataType: "text", // Data type, HTML, json etc.
            data: {
                state: "home"
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
    <script>
    document.querySelector(".utf_listing_slider").addEventListener("mouseover", mouseOver);
    document.querySelector(".utf_listing_slider").addEventListener("mouseout", mouseOut);
    var condition_for_slider = true;

    var function_for_slider = setInterval((condition_for_slider) => {
        document.querySelector('.utf_listing_slider .slick-next').click();
    }, 3000);

    function mouseOver() {
        condition_for_slider = false;
        clearInterval(function_for_slider);
    }

    function mouseOut() {
        condition_for_slider = true;
        function_for_slider = setInterval((condition_for_slider) => {
            document.querySelector('.utf_listing_slider .slick-next').click();
        }, 3000);

    }
    </script>
    
   

    
    <!-- products scriipt -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.second_swiper', {
            slidesPerView: 'auto',
            spaceBetween: 30,
            autoplay: {
                delay: 5000, // Delay in milliseconds
                disableOnInteraction: false, // Enable/disable autoplay on user interaction
            },
            loop: true, // Enable infinite loop
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    });
</script>
<script>
    // JavaScript for autoplay functionality
    document.addEventListener('DOMContentLoaded', function () {
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slides input[type="radio"]');
        
        function showSlide(index) {
            slides[index].checked = true;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        // Interval for autoplay
        let intervalId = setInterval(nextSlide, 3000); // Change slide every 3 seconds (3000 milliseconds)

        // Pause autoplay on hover
        document.querySelectorAll('.slides').forEach(function(slideContainer) {
            slideContainer.addEventListener('mouseover', function() {
                clearInterval(intervalId);
            });

            slideContainer.addEventListener('mouseleave', function() {
                intervalId = setInterval(nextSlide, 3000);
            });
        });
    });
</script>




</body>


</html>