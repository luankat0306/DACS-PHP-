<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'vietjobs';

$conn = new  mysqli($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$_DOMAIN = 'http://localhost/Demo/Admin/';
?>