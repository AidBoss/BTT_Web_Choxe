<?php
include('../config/control.php');
ob_start();
if (isset($_SESSION['userName'])) {
   unset($_SESSION['userName']);
}
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
   <button type="submit" name="sub" style="background-color: #f05626; border: none;" class="btn btn-primary btn-block mb-4">Đăng
      Nhập</button>
   <div class="row mb-4">
      <div class="col d-flex justify-content-center">
         <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31">
               Lưu mật khẩu </label>
         </div>
      </div>
      <div class="col">
         <a href="#!" style="color: #f05626;">Quên mật khẩu ?</a>
      </div>
   </div>
   <div class="text-center ">
      <p>Bạn Chưa có tài khoản? <a onclick="eventclickshow()" id="change_login" href="sign.php" style="color: #f05626;">Đăng
            ký</a>
      </p>
   </div>
</form>
<?php
if (isset($_POST['sub'])) {
   session_start();
   $getdata = new data();
   $pass = $_POST['txtPass'];
   $tk = $getdata->login($_POST['txtUserName'], $pass);
   $check = mysqli_num_rows($tk);
   if ($check > 0) {
      $_SESSION['userName'] = $_POST['txtUserName'];
      if ($level == '1') {
         setcookie("success", "Đăng nhập thành công!", time() + 1, "/", "", 0);
         header('location:../Admin/index.php');
      } else {
         header('location:../User/ttnd.php');
      }
   } else {
      setcookie("error", "Đăng nhập không thành công!", time() + 1, "/", "", 0);
      echo '<script>alert("Thông tin tài khoản không chính xác.");</script>';
   }
}
?>