<?php
include('connect.php');
class Data
{
   function dangtin_tt($banxe, $tinhtrang, $anh, $hangxe, $dongxe, $namsanxuat, $phienban, $sokmdi, $hopso, $kieudandong, $nhienlieu, $giaban, $tieude, $mota, $kieudang, $socho, $xuatxu, $tenlienhe, $sdt, $tinhtp, $quanhuyen, $phuongxa, $diachi)
   {
      global $conn;
      $sql = "INSERT INTO dangtin(fullname,username,email,password,repassword)
            values('$banxe','$tinhtrang','$anh','$hangxe','$dongxe','$namsanxuat','$phienban','$sokmdi','$hopso','$kieudandong','$nhienlieu','$giaban','$tieude','$mota','$kieudang','$socho','$xuatxu','$tenlienhe','$sdt','$tinhtp','$quanhuyen','$phuongxa','$diachi')";
      $run = mysqli_query($conn, $sql);
      return $run;
   }
}
