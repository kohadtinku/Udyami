
<?php

session_start();
include "../service/filter_input.php";
include "../service/upload_image.php";
include "../service/unlink_image.php";

if (((isset($_SESSION['user_username'])||($_SESSION['user_type']=='admin')) &&(($_SESSION['user_type']=='user')&& ($_SESSION['is_verified_admin'] == '1')))) {

//header("location:https://udyamisahayak.com/user_panel/dashboard.php");
  if(isset($_SESSION['user_image'])){
    $user_image =$_SESSION['user_image'];
  }
  if(isset($_SESSION['user_image_url'])){
    $user_image_url =$_SESSION['user_image_url'];
  }
  if(isset($_SESSION['user_phone'])){
    $user_phone =$_SESSION['user_phone'];
  }
  if(isset($_SESSION['user_email'])){
    $user_email =$_SESSION['user_email'];
  }
} else {
  // echo "INVALID user";
  // echo "<br>";
  // $path  = "Signin";
  header("location: ../login.php");
}
include "../service/db.php";

$select_query = "SELECT * FROM `users_entries` WHERE `user_id` = " . $_SESSION['user_id'];
$select_result  = mysqli_query($connect, $select_query);
$num = mysqli_num_rows($select_result);
if ($num > 0) {
  while ($row = mysqli_fetch_assoc($select_result)) {
    $_SESSION['user_image'] = $row['user_image'];
    $_SESSION['user_first_name'] = $row['user_first_name'];
    $_SESSION['user_last_name'] = $row['user_last_name'];
    $_SESSION['user_email'] = $row['user_email'];
    $_SESSION['user_phone'] = $row['user_phone'];
    $_SESSION['user_type'] = $row['user_type'];
    $_SESSION['is_verified_email'] = $row['is_verified_email'];
    $_SESSION['user_request_for_seller'] = $row['user_request_for_seller'];
  }
}
?>