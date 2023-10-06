<?php
// include('connect.php');
include('connect_ad.php');
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
    function login($userName, $pass)
    {
        global $conn;
        $sql = "SELECT * FROM accounts WHERE name_acc ='" . $userName . "' AND pass_acc = '" . $pass . "' ";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function signIn($name, $phone, $email, $pass, $level)
    {
        global $conn;
        $sql = "INSERT INTO accounts(name_acc,pass_acc,email_acc,level,phone) 
                            value ('$name','$pass','$email','$level','$phone')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function checkAccName($name)
    {
        global $conn;
        $sql = "SELECT* FROM accounts WHERE name_acc = '$name'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
