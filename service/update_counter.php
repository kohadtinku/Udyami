
<?php 
session_start();
include "db.php"; ?>
<?php
// $connect = $GLOBALS['connect'];
$state = $_POST["state"];

// $result = mysqli_query($connect,"SELECT * FROM cities");

$result = mysqli_query($connect, "UPDATE `visitor_count` SET `visitor_count_$state` = visitor_count_$state+1 WHERE `visitor_count`.`visitor_count_id` = 1");



?>


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

$visitors_user_first_name  = "";
$visitors_user_last_name  = "";
$visitors_user_id  = "";
$visitors_user_email  = "";
$visitors_user_phone  = "";
$visitors_user_type  = "Stranger";


if (isset($_SESSION['enquery_id'])) {

    $visitors_user_first_name  = $_SESSION['enquery_first_name'];
    $visitors_user_last_name  = $_SESSION['enquery_last_name'];
    $visitors_user_id  = $_SESSION['enquery_id'];
    $visitors_user_email  = $_SESSION['enquery_email'];
    $visitors_user_phone  = $_SESSION['enquery_phone'];
    $visitors_user_type  = "enquery";

} else {
    if (isset($_SESSION['user_id'])) {

        if (('' != $_SESSION['user_id']) && isset($_SESSION['user_email'])) {
            $visitors_user_first_name  = $_SESSION['user_first_name'];
            $visitors_user_last_name  = $_SESSION['user_last_name'];
            $visitors_user_id  = $_SESSION['user_id'];
            $visitors_user_email  = $_SESSION['user_email'];
            $visitors_user_phone  = $_SESSION['user_phone'];
            $visitors_user_type  = $_SESSION['user_type'];
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
                    $visitors_user_first_name  = $row_for_enquery_listing['enquery_first_name'];
                    $visitors_user_last_name  = $row_for_enquery_listing['enquery_last_name'];
                    $visitors_user_id  = $row_for_enquery_listing['enquery_id'];
                    $visitors_user_email  = $row_for_enquery_listing['enquery_email'];
                    $visitors_user_phone  = $row_for_enquery_listing['enquery_phone'];
                    $visitors_user_type  = "enquery";
                } else {
                }
            }
        }
    }
    
}


$update_visitors = mysqli_query($connect, "INSERT INTO `visitors` (`visitors_id`, `visitors_user_first_name`, `visitors_user_last_name`, `visitors_timestamp`, `visitors_user_type`, `visitors_user_email`, `visitors_user_phone`, `visitors_user_id`, `visitors_page`, `visitors_mac_id`) VALUES (NULL, '$visitors_user_first_name', '$visitors_user_last_name', current_timestamp(), '$visitors_user_type', '$visitors_user_email', '$visitors_user_phone', '$visitors_user_id', '$state', '$ipaddress')");



?>