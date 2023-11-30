<?php
$hostName = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "fullbootcamp";

$conn = mysqli_connect($hostName, $db_user, $db_pass,$db_name);
if (!$conn) {
  die("Database errors, Something went wrong");
}
// $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>