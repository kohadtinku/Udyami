
<?php 
$servername = "localhost";
$username = "root";
$pass = "";
$database = "udyami";
try {
  $connect = mysqli_connect($servername, $username, $pass, $database);
  $GLOBALS['connect']  = $connect;
  // echo"connection was successfull";
} catch (Exception $e) {

  $mess = $e->getMessage();
  // echo"connection was unsuccessfull";

}
?>