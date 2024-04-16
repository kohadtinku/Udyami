<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_ltr/add_listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 11:43:50 GMT -->

<head>
    <?php
    include "validation_of_session.php";
    include "./service/db.php";
    if (isset($_POST['Submit'])) {

        // Name: Aman Ramteke
        // Email: amanar.royalwebtech@gmail.com
        // Mobilenno: 932288678
        // Subject: no
        // Message: ddssa
        // Submit: Submit
        // Submit: 

        $Name = isset($_POST['Name']) ? $_POST['Name'] : '';
        $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
        $Subject = isset($_POST['Subject']) ? $_POST['Subject'] : '';
        $Mobilenno = isset($_POST['Mobilenno']) ? $_POST['Mobilenno'] : '';
        $Message = isset($_POST['Message']) ? $_POST['Message'] : '';

        try {
            $sql = "INSERT INTO `contact_us` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_phone`, `contact_message`) VALUES (NULL, '$Name', '$Email','$Subject','$Mobilenno','$Message')";
            // echo $sql;
            $result = mysqli_query($connect, $sql);
        } catch (Exception $e) {
            echo $e;
        }

        if ($result) {
            echo "<script>alert('Contact Form submitted Successfully');</script>";
        } else {

            echo "<script>alert('Contact Form submition Failed ');</script>";
        }
    }


    ?>

    <title>Contact us : Udyamisahayak</title>


    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2; /* Make sure it appears above the images */
  color: white; /* Text color */
  /* background-color: rgba(0, 0, 0, 0.5); Background color with opacity */
  padding: 20px; /* Adjust padding as needed */
}


.custom_container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Adjust as needed */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Adding box shadow */
}

.container_icon {
    animation: fadeInUp 1s ease forwards; /* Adjust animation properties as needed */
    opacity: 0;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


.custom_container{
    width: 100%;
    height: 300px;
    background-color: #ffca52; /* Initial background color */
    transition: background-color 0.3s ease; /* Smooth transition effect */
}
.custom_container:hover {
    background: linear-gradient(to right, #ffca52, #ff6b52); /* Gradient from left to right */
}
        </style>
</head>

<body>

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
        </div>


        <div class="carousel">
            <!-- Text overlay -->
  <div class="carousel-text">
  <h2 style="text-align: center; color:white">Contact Us</h2>

  </div>
            <ul class="slides">
                <input type="radio" name="radio-buttons" id="img-1" checked />
                <li class="slide-container">
                    <div class="slide-image">
                    <img src="images/img/u5.jpg">
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
                    <img src="images/img/u3.jpg">
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
 @media screen and (max-width: 768px) {
  .slides {
    flex-direction: column;
    overflow-x: hidden;
  }
  .col-xs-12 h4{
    font-size: 15px;
    text-align: center;
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
      top: 50%; /* Adjust as needed */
      font-size: 14px; Adjust as needed
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

    <section class="fullwidth_block padding-bottom-70" data-background-color="">
    <div class="custom_container">
    <div class="row container_icon">
        <div class="col-xs-12">
            <h4>Mahatma Gandhi Institute for Rural Industrialization</h4>
            <h4>Maganwadi, Wardha, Maharashtra - 442 001, India.</h4>
            <h4>Email: director.mgiri@gmail.com</h4>
            <h4>Phone: 07152-253512/13[O], 253513[Direct]</h4>
        </div>
    </div>
</div>

    </section>
    <div class="container margin-bottom-75">
        <div class="row">
            <div class="col-lg-12">
                <div id="utf_add_listing_part">

                    <form enctype="multipart/form-data" method="post" action="">
                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-list"></i>Contact Form</h3>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-6">
                                    <h5>Full Name</h5>
                                    <input type="text" placeholder="Name" name="Name" required>
                                </div>
                                <div class="col-md-6">
                                    <h5>Email</h5>
                                    <input type="email" placeholder="Email" name="Email" required>
                                </div>
                                <div class="col-md-6">
                                    <h5>Phone no.</h5>
                                    <input type="tel" placeholder="Your phone number" name="Mobilenno" required>
                                </div>
                                <div class="col-md-6">
                                    <h5>Subject</h5>
                                    <input type="text" placeholder="Subject" name="Subject" required>
                                </div>
                                <div class="col-md-12">
                                    <h5>Message</h5>
                                    <textarea name="Message" cols="40" rows="3" id="description"
                                        placeholder="Type Your Message Here..." spellcheck="true" required></textarea>
                                </div>
                            </div>
                            <input type="submit" name="Submit" value="Submit" />
                        </div>
                        <input type="hidden" name="Submit" value="" />


                    </form>



                </div>
            </div>
        </div>
    </div>
    <?php include "subscribe_newslatter.php"; ?>

    <?php include "./component/footer.php"; ?>

    <?php  include "home_body.php";?>
    <script>
    $(document).ready(function() {
        jQuery.ajax({
            type: "POST", // Post / Get method
            url: "./service/update_counter.php", //Where form data is sent on submission
            dataType: "text", // Data type, HTML, json etc.
            data: {
                state: "contact"
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

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_ltr/add_listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 11:43:50 GMT -->

</html>