<?php
include "./db.php";
include "./filter_input.php";

if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['username']) || isset($_POST['phone']) || isset($_POST['email']))) {

    $json_username_data[0] = "username";
    $json_username_data[1] = "";
    $json_email_data[0] = "email";
    $json_email_data[1] = "";
    $json_phone_data[0] = "phone";
    $json_phone_data[1] = "";
   
    if (isset($_POST['phone']) && $_POST['phone']!="") {
        // echo"helo";
        $phone = filter($_POST["phone"]);

        $phone_exist_result = false;
        $phone_exist_query = "SELECT * FROM `enquery` WHERE  enquery_phone = '$phone'";
        try {
            $phone_exist_result = mysqli_query($connect, $phone_exist_query);
            $row  = mysqli_num_rows($phone_exist_result);
            if ($row >  0) {
                $phone_exist_result = 1;
                $json_phone_data[1] = $phone . " Phone number is already registered. Please enter another Phone number";
            }
        } catch (Exception $e) {
            // echo "Duplicate date Checking failed ";
            echo 'Message: ' . $e->getMessage() . "<br>";
        }
    }
    // $json_data[0] = $json_username_data;
    // $json_data[1] = $json_email_data;
    $json_data[2] = $json_phone_data;
    // echo $json_data;
    echo json_encode($json_data);
}
