<?php
// include('connect.php');
include('connect.php');
class data
{
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
