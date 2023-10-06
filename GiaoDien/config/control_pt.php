<?php
// include('connect.php');
include('connect.php');
class data
{
    function dangtin_tt($banxe, $tinhtrang, $anh, $hangxe, $dongxe, $namsanxuat, $phienban, $sokmdi, $hopso, $kieudandong, $nhienlieu, $giaban, $tieude, $mota, $kieudang, $socho, $xuatxu, $tenlienhe, $sdt, $tinhtp, $quanhuyen, $phuongxa, $diachi)
    {
        global $conn;
        $sql = "insert into dangtin(banxe,tinhtrang,anh,hangxe,dongxe,namsanxuat,phienban,sokmdi,hopso,kieudandong,nhienlieu,giaban,tieude,mota,kieudang,socho,xuatxu,tenlienhe,sdt,tinhtp,quanhuyen,phuongxa,diachi)
            values('$banxe','$tinhtrang','$anh','$hangxe','$dongxe','$namsanxuat','$phienban','$sokmdi','$hopso','$kieudandong','$nhienlieu','$giaban','$tieude','$mota','$kieudang','$socho','$xuatxu','$tenlienhe','$sdt','$tinhtp','$quanhuyen','$phuongxa','$diachi')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function se_all($table)
    {
        global $conn;
        $sql="select * from $table";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
}
