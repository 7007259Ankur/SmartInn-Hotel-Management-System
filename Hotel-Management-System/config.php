<?php

$server = "localhost";
$username = "bluebird_user";
$password = "password";
$database = "theheavenparadise";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}

?>