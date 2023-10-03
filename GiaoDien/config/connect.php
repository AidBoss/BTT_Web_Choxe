<?php
$mysqli = new mysqli("localhost", "root", "", "choxe");

// Check connection
if ($mysqli->connect_errno) {
   echo "Lỗi kết nối database : " . $mysqli->connect_error;
   exit();
}