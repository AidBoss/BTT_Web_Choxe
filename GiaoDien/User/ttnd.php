<?php
session_start();
if (!isset($_SESSION['userName'])) {
   header('location:../models/login.php');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Choxe</title>

</head>

<body>
   <div class="box">
      <!-- đầu trang phần logo  -->
      <?php
      include("../models/header.php")
      ?>

      <!-- đây là nội dung phần thân  -->
      <div class="container_web_users">

         <!------------Địa chỉ dẫn---------->
         <div class="address_product">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0.5rem 0; width: 100%;">
               <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="#">Chợ xe &gt;</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="#">Thông tin tài khoản</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>

         <div class="list_select_users">

            <div class="left_container">
               <ul class="list-group">
                  <li class="list-group-item disabled">Giới thiệu</li>
                  <li class="list-group-item">IMG</li>
                  <li class="list-group-item" id="users_ttnd"><i style="font-size:22px" class=" fa-regular fa-circle-user"></i>ㅤThông
                     tin
                     tài khoản</a></li>
                  <li class="list-group-item"><a id="link_users" href="ttlh.php"><i style="font-size:22px" style="font-size:22px" class="fa-solid fa-circle-info"></i>ㅤThông
                        tin liên hệ</a></li>
                  <li class="list-group-item"><a id="link_users" href="qldh.php"><i style="font-size:22px" class="fa-solid fa-list"></i>ㅤQuản lý tin
                        đăng</a></li>
                  <li class="list-group-item"><a id="link_users" href=""><i style="font-size:22px" class="fa-solid fa-receipt"></i>ㅤQuản lý
                        đơn hàng</a></li>
                  <li class="list-group-item"><a id="link_users" href=""><i style="font-size:22px" class="fa-solid fa-heart"></i>ㅤTin đã lưu
                     </a></li>
                  <li class="list-group-item"><a id="link_users" href=""><i style="font-size:22px" class="fa-solid fa-shop"></i>ㅤĐăng ký
                        salon</a></li>
                  <li class="list-group-item"><a id="link_users" href="change_pass.php"><i style="font-size:22px" class="fa-solid fa-lock"></i>ㅤĐổi mật khẩu
                     </a></li>
                  <li class="list-group-item "><a id="link_users" href="../Admin/index.php?act=logout"><i style="font-size:22px" class="fa-solid fa-arrow-right-from-bracket"></i>ㅤĐăng
                        xuất</a></li>
                  <!-- <li class="list-group-item">Vestibulum at eros</li>  -->
               </ul>
            </div>

            <div class="right_container">
               <ul class="list-group">
                  <!-- html của thông tin đăng nhập -->
                  <!-- html của thông tin đăng nhập -->
                  <div class="content_info_login">
                     <li class="list-group-item disabled">Thông tin đăng nhập </li>
                     <li class="list-group-item">
                        <div class="render-avatar">
                           adadadadadad
                        </div>
                        <input type="file" name="txtfile" id="list-group-item-upfile" class="up-file-pic">
                     </li>
                     <li class="list-group-item">
                        <div class="form-outline mb-4">
                           <label class="form-label" id="lb_tkmk" for="form2Example2">Số
                              điện
                              thoại</label>
                           <input type="text" id="ip_tkmk" class="form-control" />
                        </div>
                     </li>
                     <li class="list-group-item">
                        <div class="form-outline mb-4">
                           <label class="form-label" id="lb_tkmk" for="form2Example2"> Tên tài khoản</label>
                           <input type="text" id="ip_tkmk" class="form-control" />
                        </div>
                     </li>
                     <li class="list-group-item">
                        <div class="form-outline mb-4">
                           <label class="form-label" id="lb_tkmk" for="form2Example2">Email</label>
                           <input type="text" id="ip_tkmk" class="form-control" />
                        </div>
                     </li>
                     <li class="list-group-item">
                        <button type="submit" class="sub-users" id="sub-web-users">Cập nhập</button>
                     </li>
                  </div>
               </ul>
            </div>

         </div> <!-- thẻ đóng của list_select_users -->

      </div> <!-- thẻ đóng của container_web_users -->



      <!-- Phần chân trang web -->
      <?php
      include("../models/footer.php")
      ?>
   </div>

</body>

</html>