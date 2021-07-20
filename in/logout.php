<?php
session_start();
$domain = "http://localhost/digifront/in/login.php";
if(isset($_SESSION["user_id"])){
    session_unset();
    session_destroy();
}
header("location: $domain");
    exit();
?>