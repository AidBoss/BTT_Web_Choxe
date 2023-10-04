<?php
include('../config/control.php');
ob_start();
// session_start();
if (isset($_SESSION['userName'])) {
   unset($_SESSION['userName']);
}
// include('../config/connect.php');
?>
<form action="login.php" method="post">
   <div class="form-outline mb-4">
      <label class="form-label" id="lb_tkmk" for="form2Example2"> Tên tài khoản</label>
      <input type="text" id="ip_tkmk" name="txtUserName" class="form-control" required="" />
   </div>
   <div class="form-outline mb-4">
      <label class="form-label" id="lb_tkmk" for="form2Example2">mật
         khẩu</label>
      <input type="password" id="ip_tkmk" name="txtPass" required="" class="form-control" />
   </div>
   <button type="submit" name="sub" style="background-color: #f05626; border: none;"
      class="btn btn-primary btn-block mb-4">Đăng
      Nhập</button>
</form>
<?php
if (isset($_POST['sub'])) {
   $get_data = new data;
   session_start();
   $userName = $_POST['txtUserName'];
   $pass = $_POST['txtPass'];
   $search = $get_data->login($userName, $pass);
   $check = mysqli_num_rows($search);
   // echo ($check);
   if ($check == 1) {
      $_SESSION['userName'] = $_POST['txtUserName'];
      header('location:../Admin/index.php');
   } else {
      echo '<script>alert("sai moe may roi");</script>';
   }
}
?>