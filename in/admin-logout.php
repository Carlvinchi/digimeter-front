<?php
session_start();
$domain = "http://localhost/digifront/in/admin-login.php";
if(isset($_SESSION["admin_id"])){
    session_unset();
    session_destroy();
}
header("location: $domain");
    exit();
?>