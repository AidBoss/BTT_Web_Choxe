<?php
$con = new mysqli("localhost", "root", "", "choxe");
// Check connection
if ($con->connect_errno) {
   echo "Lỗi kết nối database : " . $con->connect_error;
   exit();
}
$run = mysqli_query($con, 'SET NAMES "UTF8"');
