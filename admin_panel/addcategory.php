<?php include "../validation_of_admin.php" ?>

<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from ulisting.utouchdesign.com/ulisting_ltr/dashboard_add_listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 11:41:50 GMT -->

<head>
    <meta name="author" content="" />
    <meta name="description" content="" />

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Category</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.png" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/stylesheet.css" />
    <link rel="stylesheet" href="../css/mmenu.css" />
    <link rel="stylesheet" href="../css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../css/style.css" id="colors" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

  
</head>

<body onload="validate_user()">

    <?php include "../component/preloader.php" ?>

    <!-- Wrapper -->
    <div id="main_wrapper">
        <?php include "./component/header.php" ?>
        <div class="clearfix"></div>

        <!-- Dashboard -->
        <div id="dashboard">
            <?php include "./component/user_sidebar_navbar.php" ?>

            <script>
                var d = document.getElementById("user_dashboard_add_category");
                d.className += "active";
            </script>

            <!-- Content -->
            <div class="utf_dashboard_content">
                <div id="titlebar" class="dashboard_gradient">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Add Category</h2>
                            <nav id="breadcrumbs">
                                <ul>
                                    <li><a href="index_1.php">Home</a></li>
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li>Add Category</li>
                                    <!-- <li> -->

                                    <!-- </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">

                        <div id="utf_add_listing_part">
                            <form enctype="multipart/form-data" method="POST" action="<?= $_SERVER["REQUEST_URI"]; ?>">
                                <input type="hidden" class="addCategory" id="addCategory" name="addCategory">
                                <script>
                                    addCategory.value = true;
                                </script>
                                <div class="add_utf_listing_section margin-top-45" validate>

                                    <div class="utf_add_listing_part_headline_part">
                                        <h3><i class="sl sl-icon-tag"></i> Add Category </h3>
                                    </div>

                                    <div class="row with-forms">


                                        <div class="form-row mb-2">
                                            <div class="col-md-6 mx-auto mb-3">
                                                <label for="category_name">Category Name <?php echo "<span style='color:red;' id='label_for_category_name_validation'></span>"; ?>

                                                    <input type="text" class="form-control " id="category_name" name="category_name" onchange="validation_for_category()" onload="validation_for_category()" placeholder="Category Name" required>
                                            </div>
                                            <div class="col-md-6 mx-auto mb-3">
                                                <label for="category_color">Category Color
                                                    <input type="text" class="form-control " id="category_color" name="category_color" placeholder="Category Name" required>
                                            </div>

                                        </div>


                                        <div class="form-row mb-2">
                                            <div class="col-md-12 mx-auto mb-3">
                                                <input type="hidden" class="form-control" id="subcategory_name" name="subcategory_name">
                                                <style>
                                                    #multi_tag {
                                                        margin: 0;
                                                        font-family: "Poppins", Arial, Helvetica, sans-serif;
                                                        background: #1f2023;
                                                        display: flex;
                                                        flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;
                                                        color: #fff;
                                                    }

                                                    #multi_tag_ul {
                                                        margin-block-start: 0;
                                                        margin-block-end: 0;
                                                        padding-inline-start: 0px;
                                                    }

                                                    li {
                                                        list-style: none;
                                                    }

                                                    .tag-area {
                                                        /* padding: 1rem; */
                                                        outline: none;
                                                        /* width: 600px; */
                                                        border: 2px solid #605f6f;
                                                        border-radius: 5px;
                                                        transition: all 0.2s;
                                                        cursor: text;
                                                        display: flex;
                                                        align-items: center;
                                                        position: relative;
                                                        background-color: #fff;

                                                    }

                                                    #multi_tag_label {
                                                        position: absolute;
                                                        background: #1f2023;
                                                        padding: 0 0.3rem;
                                                        color: #adadad;
                                                        top: 22px;
                                                        transition: all 0.1s;
                                                    }

                                                    .label-active {
                                                        top: -11px;
                                                        color: #8d29ff;
                                                        font-size: 13px;
                                                    }

                                                    .tag-area ul {
                                                        display: flex;
                                                        flex-wrap: wrap;
                                                        align-items: center;
                                                    }

                                                    .active {
                                                        /* border: 2px solid #8d29ff !important; */
                                                    }

                                                    .tag {
                                                        padding-left: 0.8rem;
                                                        background: #353535;
                                                        border-radius: 100px;
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: space-between;
                                                        margin: 0.5rem;
                                                        color: #fff;
                                                    }

                                                    .tag-input {
                                                        padding: 0.5rem;
                                                        outline: none;
                                                        border: none;
                                                        width: 150px;
                                                        margin-left: 0.5rem;
                                                        background: transparent;
                                                        /* font-size: 20px; */
                                                        /* color: #fff; */
                                                    }

                                                    .cross {
                                                        cursor: pointer;
                                                        display: flex;
                                                        margin-left: 0.5rem;
                                                        justify-content: center;
                                                        align-items: center;
                                                        padding: 1.3rem;
                                                        transform: rotate(45deg);
                                                        border-radius: 50%;
                                                        background: #414141;
                                                    }

                                                    .cross:hover {
                                                        background: #818181b1;
                                                    }

                                                    .cross::before {
                                                        content: "";
                                                        width: 2px;
                                                        height: 16px;
                                                        position: absolute;
                                                        background: rgb(255, 255, 255);
                                                    }

                                                    .cross::after {
                                                        content: "";
                                                        height: 2px;
                                                        width: 16px;
                                                        position: absolute;
                                                        background: rgb(255, 255, 255);
                                                    }

                                                    @media (max-width: 650px) {
                                                        .tag-area {
                                                            width: 300px;
                                                        }
                                                    }
                                                </style>

                                                <!-- <div id="multi_tag"> -->
                                                <label for="subcategory_name">Sub-Category Name
                                                    <div class="tag-area">
                                                        <ul id="multi_tag_ul">
                                                            <input type="text" class="tag-input" placeholder="Sub-Category Name" id="tag-input" />
                                                        </ul>
                                                        <!-- </div> -->
                                                    </div>
                                                    <!-- <label for="subcategory_name">NOTE: Press <strong>Space Bar</strong> to Add New Sub Category. </label> -->
                                            </div>
                                        </div>


                                    </div>
                                </div>



                                <div class="add_utf_listing_section margin-top-45">
                                    <div class="utf_add_listing_part_headline_part">
                                        <h3><i class="sl sl-icon-picture"></i> Images</h3>
                                    </div>
                                    <div class="row with-forms">
                                        <div class="utf_submit_section col-md-4">
                                            <h4>Logo</h4>
                                            <!-- <form></form> -->
                                            <div class="">
                                                <input type="file"name="category_image" id="category_image" required>
                                            </div>
                                            <!-- <div class="">
                                                <img style="display:none" class="dropzone" name="view_logo_image" id="view_logo_image" src="" />
                                            </div> -->

                                            <!-- <script>
                                                function showimg() {
                                                    document.getElementById("view_logo_image").style.display = "block";
                                                    // var x = (document.getElementById("category_image").value).slice(12, 100);
                                                    var x = (document.getElementById("category_image").value);
                                                    console.log(x);
                                                    document.getElementById("view_logo_image").src = "../images/" + x;
                                                    // alert("hello");
                                                }
                                            </script> -->

                                            </input>
                                        </div>
                                    </div>
                                </div> <!-- <a href="#" class="button preview">Save </a> -->
                                <button type="submit" class="button preview" id="submit">Save</button>
                                <button type="button" class="button " onclick="window.location.href='./dashboard_category.php'">Go Back</button>
                            </form>
                        </div>
                    </div>
                    <?php include "./component/footer.php" ?>
                </div>

            </div>
        </div>
    </div>
    <script>
        /**
         * @link https://github.com/hicodersofficial/custom-html-css-js-widgets/tree/main/tag-input-field
         * INSTAGRAM: @hi.coders
         */

        const tagInput = document.querySelector(".tag-input");
        const tagArea = document.querySelector(".tag-area");
        const ul = document.querySelector(".tag-area ul");
        const label = document.querySelector(".label");

        let tags = [];

        function addEvent(element) {
            tagArea.addEventListener("click", () => {
                element.focus();
            });

            element.addEventListener("focus", () => {
                tagArea.classList.add("active");
                label.classList.add("label-active");
            });

            element.addEventListener("blur", (e) => {
                tagArea.classList.remove("active");
                if (element.value === "" && tags.length === 0) {
                    label.classList.remove("label-active");
                }
                if (!element.value.match(/^\s+$/gi) && element.value !== "") {
                    tags.push(e.target.value.trim());
                    element.value = "";
                    renderTags();
                }
            });
            /**
             * NOTE: Keyboard events works unexpected on mobile devices.
             * For mobile devices you need to add this code
             * to get the last character user entered.
             * value[value.length - 1] === " "
             *
             * keycode 32 is for SpaceBar
             * keycode 13 is for EnterKey
             */

            element.addEventListener("keydown", (e) => {
                console.log(e);
                const value = e.target.value;
                if (
                    (e.keyCode === 13 ||
                        value[value.length - 1] === "") &&
                    !value.match(/^\s+$/gi) &&
                    value !== ""
                ) {
                    tags.push(e.target.value.trim());
                    element.value = "";
                    renderTags();
                }
                if (e.keyCode === 8 && value === "") {
                    tags.pop();
                    renderTags();
                }
            });
        }
        addEvent(tagInput);

        function renderTags() {
            ul.innerHTML = "";
            document.getElementById("subcategory_name").value = "";
            tags.forEach((tag, index) => {
                var data = tag;
                console.log(typeof(data));
                console.log(data);
                // data = JSON.stringify(data);
                // console.log(typeof(data));
                // console.log(data);
                if (document.getElementById("subcategory_name").value == "") {
                    document.getElementById("subcategory_name").value += data;
                } else {
                    document.getElementById("subcategory_name").value += "," + data;
                }

                createTag(tag, index);
            });
            const input = document.createElement("input");
            input.type = "text";
            input.className = "tag-input";
            addEvent(input);
            ul.appendChild(input);
            input.focus();
            setTimeout(() => (input.value = ""), 0);
        }

        function createTag(tag, index) {
            const li = document.createElement("li");
            li.className = "tag";
            const text = document.createTextNode(tag);
            const span = document.createElement("span");
            span.className = "cross";
            span.dataset.index = index;
            span.addEventListener("click", (e) => {
                tags = tags.filter((_, index) => index != e.target.dataset.index);
                renderTags();
            });
            li.appendChild(text);
            li.appendChild(span);
            ul.appendChild(li);
            // var data =text;
            // console.log(data);
            // data = JSON.stringify(data);
            // console.log(typeof(data));
            // console.log(data);

            // document.getElementById("subcategory_name").value = data;
        }
        // document.getElementById("subcategory_name").setAttribute('value','My default value');
    </script>


    <!-- Scripts -->
    <script src="../scripts/jquery-3.4.1.min.js"></script>
    <script src="../scripts/chosen.min.js"></script>
    <script src="../scripts/perfect-scrollbar.min.js"></script>
    <script src="../scripts/slick.min.js"></script>
    <script src="../scripts/rangeslider.min.js"></script>
    <script src="../scripts/bootstrap-select.min.js"></script>
    <script src="../scripts/magnific-popup.min.js"></script>
    <script src="../scripts/jquery-ui.min.js"></script>
    <script src="../scripts/mmenu.js"></script>
    <script src="../scripts/tooltips.min.js"></script>
    <script src="../scripts/color_switcher.js"></script>
    <script src="../scripts/jquery_custom.js"></script>

    <!-- Maps -->
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="../scripts/infobox.min.js"></script>
    <script src="../scripts/markerclusterer.js"></script>
    <script src="../scripts/maps.js"></script>
    <script src="../scripts/dropzone.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script>
        function show_table() {

            console.log("success");

        }
    </script>
    <script src="multi-input.js"></script>

    <script>
        const getButton = document.getElementById('get_multi_tags');
        const multiInput = document.querySelector('multi-input');
        const values = document.querySelector('#show_tags_values');

        getButton.onclick = () => {
            if (multiInput.getValues().length > 0) {
                values.textContent = `Got ${multiInput.getValues().join(' and ')}!`;
            } else {
                values.textContent = 'Got none  :(';
            }
        }

        document.querySelector('input').focus();
    </script>


    <?php

    if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['addCategory']) && isset($_POST['category_name']))) {

        $category_name = filter($_POST["category_name"]);
        // $category_image = filter($_POST["category_image"]);
        $category_image = '';

        if (isset($_FILES['category_image'])) {
            if ("" != $_FILES["category_image"]["tmp_name"]) {
                $category_image = get_server_image_name('category_image');
            }
        }
        $sub_category_names = filter($_POST["subcategory_name"]);
        $category_color = filter($_POST["category_color"]);

        $exist_result = false;
        $exist_query = "SELECT * FROM category WHERE  category_name = '$category_name'";
        try {
            $exist_result = mysqli_query($connect, $exist_query);
            $row  = mysqli_num_rows($exist_result);
            if ($row >  0) {
                // // echo "exist";
                $exist_result = 1;
                // echo "exist" . "<br>";
            }
        } catch (Exception $e) {
            // echo "Duplicate date Checking failed " . "<br>";
            // echo 'Message: ' . $e->getMessage() . "<br>";
        }
        $add_category_query = "INSERT INTO `category` (`category_id`, `category_name`, `category_keyword`, `category_image`, `category_color`) VALUES (NULL, '$category_name', '', '$category_image', '$category_color')";

        try {
            if ($exist_result) {
                $add_category_result = mysqli_query($connect, $add_category_query);
            }
            if ($add_category_result) {
                echo "<script>alert('Category Successfully Added !! ') </script>" . "<br>";
                $last_id = mysqli_insert_id($connect);
                // echo $last_id;
                

                // echo "<script>alert('Category Successfully Added !! ".$last_id."') </script>" . "<br>";
            } else {
                echo "<script>alert('Category is not  Added !! ') </script>" . "<br>";
            }

            // if ($insert_result) {
            //   header("location: Login.php");
            // }
        } catch (Exception $e) {
            // echo "Data insertion failed " . "<br>";
            // echo 'Message: ' . $e->getMessage() . "<br>";
        }

        // $subcategory_name;

        if($add_category_result){
            $sub_category_names =explode(",",$sub_category_names);

            echo '<pre>';
            echo '<pre>';
            foreach ($sub_category_names as $sub_category_name){
                echo $sub_category_name;
    
                $add_sub_category_query = "INSERT INTO `sub_category` (`sub_category_name`, `sub_category_category_id`) VALUES ('$sub_category_name', '$last_id')";
    
                try {
                    if ($exist_result) {
                        $add_sub_category_result = mysqli_query($connect, $add_sub_category_query);
                    }
                    // if (true) {
                    if ($add_sub_category_result) {
        
                        // echo "<script>alert('Category Successfully Added !! ". $sub_category_name."') </script>" . "<br>";
                    } else {
                        echo "<script>alert('Sub Category is not  Added !! ') </script>" . "<br>";
                    }
        
                    // if ($insert_result) {
                    //   header("location: Login.php");
                    // }
                } catch (Exception $e) {
                    // echo "Data insertion failed " . "<br>";
                    // echo 'Message: ' . $e->getMessage() . "<br>";
                }
            }
        }

    }
    ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script>
        function validation_for_category() {
            var category_name = document.getElementById("category_name");
            category_name = category_name.value;
            if (category_name.length > 0) {


                $.ajax({
                    url: "./validation_for_category.php",
                    datatype: "text",
                    type: "POST",
                    data: {
                        submit: "submit",
                        category_name: category_name,
                    },
                    success: function(result) {
                        console.log("hello");
                        result = JSON.parse(result);
                        json_data = result;
                        console.log(json_data);
                        // console.log(json_data[0][0]);

                        if (0 < (json_data[0][0]).length) {
                            $('#label_for_category_name_validation').html(json_data[0][1]);
                        }
                        if (0 < (json_data[0][1]).length) {
                            document.getElementById("add_category_submit").disabled = true;
                        } else {
                            document.getElementById("add_category_submit").disabled = false;
                        }
                    }
                });


               
            }
        }
        $(document).ready(function() {
            $(window).keydown(function(event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });
    </script>
</body>

<!-- Mirrored from ulisting.utouchdesign.com/ulisting_ltr/dashboard_add_listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 11:41:50 GMT -->

</html>

