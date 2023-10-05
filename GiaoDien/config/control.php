<?php
include('connect.php');
class data
{
    function dangtin_tt($banxe, $tinhtrang, $anh, $hangxe, $dongxe, $namsanxuat, $phienban, $sokmdi, $hopso, $kieudandong, $nhienlieu, $giaban, $tieude, $mota, $kieudang, $socho, $xuatxu, $tenlienhe, $sdt, $tinhtp, $quanhuyen, $phuongxa, $diachi)
    {
        global $conn;
        $sql = "INSERT INTO dangtin(banxe,tinhtrang,anh,hangxe,dongxe,namsanxuat,phienban,sokmdi,hopso,kieudang,nhienlieu,giaban,tieude,mota,kieudang,socho,xuatxu,tenlienhe,sdt,tinhtp,quanhuyen,phuongxa,diachi)
            values('$banxe','$tinhtrang','$anh','$hangxe','$dongxe','$namsanxuat','$phienban','$sokmdi','$hopso','$kieudandong','$nhienlieu','$giaban','$tieude','$mota','$kieudang','$socho','$xuatxu','$tenlienhe','$sdt','$tinhtp','$quanhuyen','$phuongxa','$diachi')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function login($userName, $pass)
    {
        global $con;
        $sql = "SELECT * FROM accounts WHERE name_acc ='" . $userName . "' AND pass_acc = '" . $pass . "' ";
        $run = mysqli_query($con, $sql);
        return $run;
    }
}
