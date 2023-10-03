<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
   <meta charset="UTF-8">
   <title>Choxe</title>
   <link rel="stylesheet" href="CSS/Home.css">
   <link rel="stylesheet" href="CSS/dangtin.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="/fonts/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
      rel="stylesheet">
</head>

<body>
   <div class="box">


      <!-- đầu trang phần logo  -->
      <div class="header2">
         <div class="header_content">
            <div class="head_top">
               <a href="Home.php" alt="Chợ xe">
                  <img src="img/logo_white.png" alt="" id="logo_header">
               </a>
               <a href="Car-Audit.php">
                  <img src="img/car_check_white_19_19.png" alt="" id="icons_header">
                  <p>Car Audit</p>
               </a>
               <a href="">
                  <img src="img/support_white_24_24.png" alt="" id="icons_header">
                  <p>Thủ tục mua bán</p>
               </a>
               <a href="tintuc.php" id="childe_news">
                  <img src="img/news_white_20_16.png" alt="" id="icons_header">
                  <p>Tin Tức</p>
               </a>
            </div>
            <div class="head_search">
               <form class="sbox">
                  <i class="fa-solid fa-magnifying-glass kl1"></i>
                  <input type="text" class="stext" placeholder="Tìm kiếm trong chợ xe " id="usr" name="username">
                  <!-- <i class="fa-solid fa-bars "></i> -->

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-lg fa-bars " data-toggle="modal"
                     data-target="#modelId_list" style="background-color: #fff;border: none;">
                     <i class="fa-solid fa-bars "></i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="modelId_list" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                     aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content " style=" width: 600px; ">
                           <div class="modal-header">
                              <h5 class="modal-title">Bộ lọc </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="phanthan_bl">
                                 <label class="dropdown" style="width: 100%;">
                                    <label class="form-label" id="lb_bl" for="form2Example2">Tinh/ThanhPho
                                    </label>
                                    <div class="dd-button bt_bl" style="width: 100%;">
                                       <p>Toàn quốc</p>
                                    </div>

                                    <input type="checkbox" class="dd-input" id="test">

                                    <div class="dd-menu" style="width: 100%;">
                                       <div style="margin-left:13px;margin-top:10px;height: 250px;">
                                          <div>
                                             <p style="font-size:16px;"> Dòng xe </p>
                                          </div>
                                          <!-- <div style="height:35px;"> -->
                                          <form class="sbox2" action="/search" method="get">
                                             <div class="input-group mb-4 " style="width:97%">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"><i
                                                         class="fa-solid fa-magnifying-glass"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username">
                                             </div>
                                          </form>
                                          <!-- </div> -->
                                          <div>
                                             <select class="flatform" size="6">
                                                <option value="An Giang">An Giang
                                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                                <option value="Bắc Giang">Bắc Giang
                                                <option value="Bắc Kạn">Bắc Kạn
                                                <option value="Bạc Liêu">Bạc Liêu
                                                <option value="Bắc Ninh">Bắc Ninh
                                                <option value="Bến Tre">Bến Tre
                                                <option value="Bình Định">Bình Định
                                                <option value="Bình Dương">Bình Dương
                                                <option value="Bình Phước">Bình Phước
                                                <option value="Bình Thuận">Bình Thuận
                                                <option value="Bình Thuận">Bình Thuận
                                                <option value="Cà Mau">Cà Mau
                                                <option value="Cao Bằng">Cao Bằng
                                                <option value="Đắk Lắk">Đắk Lắk
                                                <option value="Đắk Nông">Đắk Nông
                                                <option value="Điện Biên">Điện Biên
                                                <option value="Đồng Nai">Đồng Nai
                                                <option value="Đồng Tháp">Đồng Tháp
                                                <option value="Đồng Tháp">Đồng Tháp
                                                <option value="Gia Lai">Gia Lai
                                                <option value="Hà Giang">Hà Giang
                                                <option value="Hà Nam">Hà Nam
                                                <option value="Hà Tĩnh">Hà Tĩnh
                                                <option value="Hải Dương">Hải Dương
                                                <option value="Hậu Giang">Hậu Giang
                                                <option value="Hòa Bình">Hòa Bình
                                                <option value="Hưng Yên">Hưng Yên
                                                <option value="Khánh Hòa">Khánh Hòa
                                                <option value="Kiên Giang">Kiên Giang
                                                <option value="Kon Tum">Kon Tum
                                                <option value="Lai Châu">Lai Châu
                                                <option value="Lâm Đồng">Lâm Đồng
                                                <option value="Lạng Sơn">Lạng Sơn
                                                <option value="Lào Cai">Lào Cai
                                                <option value="Long An">Long An
                                                <option value="Nam Định">Nam Định
                                                <option value="Nghệ An">Nghệ An
                                                <option value="Ninh Bình">Ninh Bình
                                                <option value="Ninh Thuận">Ninh Thuận
                                                <option value="Phú Thọ">Phú Thọ
                                                <option value="Quảng Bình">Quảng Bình
                                                <option value="Quảng Bình">Quảng Bình
                                                <option value="Quảng Ngãi">Quảng Ngãi
                                                <option value="Quảng Ninh">Quảng Ninh
                                                <option value="Quảng Trị">Quảng Trị
                                                <option value="Sóc Trăng">Sóc Trăng
                                                <option value="Sơn La">Sơn La
                                                <option value="Tây Ninh">Tây Ninh
                                                <option value="Thái Bình">Thái Bình
                                                <option value="Thái Nguyên">Thái Nguyên
                                                <option value="Thanh Hóa">Thanh Hóa
                                                <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                                <option value="Tiền Giang">Tiền Giang
                                                <option value="Trà Vinh">Trà Vinh
                                                <option value="Tuyên Quang">Tuyên Quang
                                                <option value="Vĩnh Long">Vĩnh Long
                                                <option value="Vĩnh Phúc">Vĩnh Phúc
                                                <option value="Yên Bái">Yên Bái
                                                <option value="Phú Yên">Phú Yên
                                                <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                                <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                                <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                                <option value="Tp.Hà Nội">Tp.Hà Nội
                                                <option value="TP  HCM">TP HCM
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </label>

                                 <label class="dropdown" style="width: 100%;">
                                    <label class="form-label" id="lb_bl" for="form2Example2">Hãng Xe
                                    </label>
                                    <div class="dd-button bt_bl" style="width: 100%;">
                                       <p>Tất cả</p>
                                    </div>

                                    <input type="checkbox" class="dd-input" id="test">

                                    <div class="dd-menu" style="width: 100%;">
                                       <div style="margin-left:13px;margin-top:10px;height: 385px;">
                                          <div>
                                             <p style="font-size:16px;"> Dòng xe </p>
                                          </div>
                                          <!-- <div style="height:35px;"> -->
                                          <form class="sbox2" action="/search" method="get">
                                             <div class="input-group mb-4 " style="width:97%">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"><i
                                                         class="fa-solid fa-magnifying-glass"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username">
                                             </div>
                                          </form>
                                          <!-- </div> -->
                                          <div>
                                             <!-- <select class="flatform" size="6"> -->
                                             <ul class="ndtabmenu">
                                                <li>
                                                   <div style="width:100%;height:50px;">
                                                      <div style="width:50%; float:left; margin-top:15px;">
                                                         <p style="font-size:18px; color:#F05626; font-weight: bold;">
                                                            Tất cả
                                                         </p>
                                                      </div>
                                                      <div style="width:50%; float: right; margin-top:15px;">
                                                         <img src="img/Annotation 2023-07-05 213208.png" alt=""
                                                            style="margin-left:120px;">
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <span><img src="img/Toyota.png" alt=""
                                                         style="width:24px; height:24px;"></span>
                                                   <span>Toyota</span>
                                                </li>
                                                <li>
                                                   <span><img src="img/Hyndy.png" alt=""
                                                         style="width:24px; height:24px;"></img></span>
                                                   <span>Hyundai</span>
                                                </li>
                                                <li>
                                                   <span><img src="img/Kia.png" alt=""
                                                         style="width:24px; height:24px;"></img></span>
                                                   <span>KIA</span>
                                                </li>
                                                <li>
                                                   <span><img src="img/vinfast.png" alt=""
                                                         style="width:24px; height:24px;"></span>
                                                   <span>VinFast</span>
                                                </li>
                                                <li>
                                                   <span><img src="img/mitsubishi.png" alt=""
                                                         style="width:24px; height:24px;"></img></span>
                                                   <span>Misubishi</span>
                                                </li>
                                             </ul>
                                             <!-- </select> -->
                                          </div>
                                       </div>
                                    </div>
                                 </label>

                                 <div class="form-group" style="width: 100%;">
                                    <!-- <label class="form-label" id="lb_bl3" for="form2Example2">Dòng xe
                                                    </label> -->
                                    <select class="form-control" style="height: 40px;
                                                    margin: 0 5px;" disabled>
                                       <option selected>Tất cả</option>
                                       <option></option>
                                       <option></option>
                                    </select>
                                 </div>

                                 <!-- ---------Khoảng Giá---------- -->
                                 <div class="boc_than_bl">
                                    <p>Khoảng Giá</p>
                                    <div class="khgia_home">
                                       <p><b>Từ 0 đến <span id="demo2"></span></b><b>&nbsp;triệu</b>
                                       </p>
                                       <input type="range" min="0" max="900" value="0" class="slider2" id="myRange2">

                                    </div>
                                 </div>

                                 <!-- ---------Tình trạng---------- -->
                                 <div class="boc_than_bl">
                                    <p>Tình trạng</p>
                                    <div class="tt_xe_bl">
                                       <button>xe cũ</button>
                                       <button>xe mới</button>
                                    </div>
                                 </div>

                                 <!-- ---------Năm sản xuất---------- -->
                                 <div class="boc_than_bl">
                                    <p>Năm sản xuất</p>
                                    <div class="khgia_home">
                                       <p><b>Từ năm 2000 đến <span id="namsx"></span></b><b>&nbsp;năm</b>
                                       </p>
                                       <input type="range" min="2000" max="2023" value="0" class="sonam" id="myRange2">

                                    </div>
                                 </div>

                                 <!-- ---------Hộp số---------- -->
                                 <div class="boc_than_bl">
                                    <p>Hộp số</p>
                                    <div class="tt_xe_bl ">
                                       <button id="hs_bl">Số sàn</button>
                                       <button id="hs_bl">Tự động</button>
                                       <button id="hs_bl">Bán tự động</button>
                                    </div>
                                 </div>

                                 <!-- ----------Nguyên liệu--------- -->
                                 <div class="boc_than_bl">
                                    <p>Nhiên Liệu</p>
                                    <div class="nl_xe_bl">
                                       <button class="nl_bt">Xăng</button>
                                       <button class="nl_bt">Dầu</button>
                                       <button class="nl_bt">Điện</button>
                                       <button class="nl_bt">Hybrid</button>
                                    </div>
                                 </div>
                                 <!-- --------------Kiểu dáng-------------- -->
                                 <div class="boc_than_bl">
                                    <p>Kiểu dáng</p>
                                    <div class="kd_xe_bl">
                                       <button class="nl_bt">Sedan</button>
                                       <button class="nl_bt">Hatchback</button>
                                       <button class="nl_bt">SUV</button>
                                       <button class="nl_bt">Bán Tải</button>
                                       <button class="nl_bt">Xe Tải</button>
                                       <button class="nl_bt">MPV</button>
                                       <button class="nl_bt">Van/Minivan</button>
                                       <button class="nl_bt">Coupe</button>
                                       <button class="nl_bt">Mui trần</button>
                                    </div>
                                 </div>
                                 <!-- /* --------------Số chỗ ngồi------------ -->
                                 <div class="boc_than_bl">
                                    <p>Số chỗ ngồi</p>
                                    <div class="kd_xe_bl">
                                       <button class="scn  ">2</button>
                                       <button class="scn ">4</button>
                                       <button class="scn ">5</button>
                                       <button class="scn ">7</button>
                                       <button class="scn ">9</button>
                                       <button class="scn ">14</button>
                                       <button class="scn ">3</button>
                                       <button class="scn ">8</button>
                                       <button class="scn ">6</button>
                                    </div>
                                 </div>
                                 <!-- ---------Xuất xứ---------- -->
                                 <div class="boc_than_bl">
                                    <p>Xuất xứ</p>
                                    <div class="tt_xe_bl">
                                       <button>Nhập khẩu</button>
                                       <button>Lắp ráp trong nước</button>
                                    </div>
                                 </div>
                                 <!-- ---------Kiểu dẫn động---------- -->
                                 <div class="boc_than_bl">
                                    <p>Kiểu dẫn động</p>
                                    <div class="nl_xe_bl">
                                       <button class="nl_bt">FWD</button>
                                       <button class="nl_bt">RWD</button>
                                       <button class="nl_bt">AWD</button>
                                       <button class="nl_bt">4WD</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="modal_footer">
                              <button style="background-color:#fff;color: #F05626;border: 1px solid #F05626;"
                                 type="button" class="btn btn-light">Bỏ chọn tất
                                 cả</button>
                              <button style="background-color: #F05626;border: 1px solid #F05626;" type="button"
                                 class="btn btn-primary">Xem kết quả</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
               <div class="buttom_login">
                  <div class="but">
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId"
                        style="background-color: #f05626;border: none;font-size: 16px;">
                        <i class="fa-regular fa-user" id="login_header"></i>Đăng Nhập
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title">Đăng Nhập</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>

                              <!-- form dang ky dang nhap -->
                              <div class="modal-body">
                                 <form>
                                    <div class="form-outline mb-4" id="icons_modal">
                                       <button>
                                          <i class="fa-brands fa-facebook" style="color: #225fc9;"></i>
                                          Đăng nhập bằng facebook
                                       </button>
                                    </div>
                                    <div class="form-outline mb-4" id="icons_modal">
                                       <button>
                                          <i class="fa-brands fa-google"></i> Đăng nhập bằng google
                                       </button>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                       <p class="form-label" for="form2Example2" style="color: #B3B6C1;">
                                          hoặc đăng nhập bằng
                                          tài khoản Chợ xe</p>
                                    </div>
                                    <div class="login_modal">
                                       <!-- Email input -->
                                       <div class="form-outline mb-4">
                                          <label class="form-label" id="lb_tkmk" for="form2Example2">Số
                                             điện
                                             thoại</label>
                                          <input type="text" id="ip_tkmk" class="form-control" />
                                       </div>

                                       <!-- Password input -->
                                       <div class="form-outline mb-4">
                                          <label class="form-label" id="lb_tkmk" for="form2Example2">mật
                                             khẩu</label>
                                          <input type="password" id="ip_tkmk" class="form-control" />
                                       </div>
                                    </div>
                                    <div class="register_modal">
                                       <!-- Email input -->
                                       <div class="form-outline mb-4">
                                          <label class="form-label" id="lb_tkmk" for="form2Example2">Họ
                                             tên</label>
                                          <input type="text" id="ip_tkmk" class="form-control" />
                                       </div>

                                       <!-- Password input -->
                                       <div class="form-outline mb-4">
                                          <label class="form-label" id="lb_tkmk" for="form2Example2">Số
                                             điện thoại</label>
                                          <input type="text" id="ip_tkmk" class="form-control" />
                                       </div>
                                       <!-- Email input -->
                                       <div class="form-outline mb-4">
                                          <label class="form-label" id="lb_tkmk" for="form2Example2">Email</label>
                                          <input type="email" id="ip_tkmk" class="form-control" />
                                       </div>

                                       <!-- Password input -->
                                       <div class="form-outline mb-4">
                                          <label class="form-label" id="lb_tkmk" for="form2Example2">Mật
                                             khẩu</label>
                                          <input type="password" id="ip_tkmk" class="form-control" />
                                       </div>
                                    </div>
                                    <!-- 2 column grid layout for inline styling -->
                                    <div class="row mb-4">
                                       <div class="col d-flex justify-content-center">

                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value=""
                                                id="form2Example31" checked />
                                             <label class="form-check-label" for="form2Example31">
                                                Lưu mật khẩu </label>
                                          </div>
                                       </div>

                                       <div class="col">
                                          <!-- Simple link -->
                                          <a href="#!" style="color: #f05626;">Quên mật khẩu ?</a>
                                       </div>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="button" style="background-color: #f05626; border: none;"
                                       class="btn btn-primary btn-block mb-4">Đăng
                                       Nhập</button>

                                    <!-- Register buttons -->
                                    <div class="text-center ">
                                       <p>Bạn Chưa có tài khoản? <a onclick="eventclickshow()" id="change_login"
                                             href="#!" style="color: #f05626;">Đăng
                                             ký</a>
                                       </p>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="but2">
                     <a target="_blank" href="../đăngtin.html" id="dangtin">
                        Đăng Tin <img src="img/add_listing_white_16_18.png" alt="" id="login_dangtin"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div>
               <div style="margin-top:2%;">
                  <img src="img/logo_white (1).png" alt=""></img>
                  <div style="margin-left:49%; margin-top:-3%;">
                     <P style="color: #fff;font-size:24px;">Đăng tin</P>
                  </div>
               </div>
            </div>
            <!-- <section class="home">
=======
    <meta charset="UTF-8">
    <title>Choxe</title>
    <link rel="stylesheet" href="CSS/Home.css">
    <link rel="stylesheet" href="CSS/dangtin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/fonts/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="box">


        <!-- đầu trang phần logo  -->
        <div class="header2">
            <div class="header_content">
                <div class="head_top">
                    <a href="/Home.html" alt="Chợ xe">
                        <img src="/img/logo_white.png" alt="" id="logo_header">
                    </a>
                    <a href="/Car-Audit.html">
                        <img src="/img/car_check_white_19_19.png" alt="" id="icons_header">
                        <p>Car Audit</p>
                    </a>
                    <a href="">
                        <img src="/img/support_white_24_24.png" alt="" id="icons_header">
                        <p>Thủ tục mua bán</p>
                    </a>
                    <a href="/tintuc.html" id="childe_news">
                        <img src="/img/news_white_20_16.png" alt="" id="icons_header">
                        <p>Tin Tức</p>
                    </a>
                </div>
                <div class="head_search">
                    <form class="sbox">
                        <i class="fa-solid fa-magnifying-glass kl1"></i>
                        <input type="text" class="stext" placeholder="Tìm kiếm trong chợ xe " id="usr" name="username">
                        <!-- <i class="fa-solid fa-bars "></i> -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg fa-bars " data-toggle="modal"
                            data-target="#modelId_list" style="background-color: #fff;border: none;">
                            <i class="fa-solid fa-bars "></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId_list" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content " style=" width: 600px; ">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Bộ lọc </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="phanthan_bl">
                                            <label class="dropdown" style="width: 100%;">
                                                <label class="form-label" id="lb_bl" for="form2Example2">Tinh/ThanhPho
                                                </label>
                                                <div class="dd-button bt_bl" style="width: 100%;">
                                                    <p>Toàn quốc</p>
                                                </div>

                                                <input type="checkbox" class="dd-input" id="test">

                                                <div class="dd-menu" style="width: 100%;">
                                                    <div style="margin-left:13px;margin-top:10px;height: 250px;">
                                                        <div>
                                                            <p style="font-size:16px;"> Dòng xe </p>
                                                        </div>
                                                        <!-- <div style="height:35px;"> -->
                                                        <form class="sbox2" action="/search" method="get">
                                                            <div class="input-group mb-4 " style="width:97%">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i
                                                                            class="fa-solid fa-magnifying-glass"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username">
                                                            </div>
                                                        </form>
                                                        <!-- </div> -->
                                                        <div>
                                                            <select class="flatform" size="6">
                                                                <option value="An Giang">An Giang
                                                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                                                <option value="Bắc Giang">Bắc Giang
                                                                <option value="Bắc Kạn">Bắc Kạn
                                                                <option value="Bạc Liêu">Bạc Liêu
                                                                <option value="Bắc Ninh">Bắc Ninh
                                                                <option value="Bến Tre">Bến Tre
                                                                <option value="Bình Định">Bình Định
                                                                <option value="Bình Dương">Bình Dương
                                                                <option value="Bình Phước">Bình Phước
                                                                <option value="Bình Thuận">Bình Thuận
                                                                <option value="Bình Thuận">Bình Thuận
                                                                <option value="Cà Mau">Cà Mau
                                                                <option value="Cao Bằng">Cao Bằng
                                                                <option value="Đắk Lắk">Đắk Lắk
                                                                <option value="Đắk Nông">Đắk Nông
                                                                <option value="Điện Biên">Điện Biên
                                                                <option value="Đồng Nai">Đồng Nai
                                                                <option value="Đồng Tháp">Đồng Tháp
                                                                <option value="Đồng Tháp">Đồng Tháp
                                                                <option value="Gia Lai">Gia Lai
                                                                <option value="Hà Giang">Hà Giang
                                                                <option value="Hà Nam">Hà Nam
                                                                <option value="Hà Tĩnh">Hà Tĩnh
                                                                <option value="Hải Dương">Hải Dương
                                                                <option value="Hậu Giang">Hậu Giang
                                                                <option value="Hòa Bình">Hòa Bình
                                                                <option value="Hưng Yên">Hưng Yên
                                                                <option value="Khánh Hòa">Khánh Hòa
                                                                <option value="Kiên Giang">Kiên Giang
                                                                <option value="Kon Tum">Kon Tum
                                                                <option value="Lai Châu">Lai Châu
                                                                <option value="Lâm Đồng">Lâm Đồng
                                                                <option value="Lạng Sơn">Lạng Sơn
                                                                <option value="Lào Cai">Lào Cai
                                                                <option value="Long An">Long An
                                                                <option value="Nam Định">Nam Định
                                                                <option value="Nghệ An">Nghệ An
                                                                <option value="Ninh Bình">Ninh Bình
                                                                <option value="Ninh Thuận">Ninh Thuận
                                                                <option value="Phú Thọ">Phú Thọ
                                                                <option value="Quảng Bình">Quảng Bình
                                                                <option value="Quảng Bình">Quảng Bình
                                                                <option value="Quảng Ngãi">Quảng Ngãi
                                                                <option value="Quảng Ninh">Quảng Ninh
                                                                <option value="Quảng Trị">Quảng Trị
                                                                <option value="Sóc Trăng">Sóc Trăng
                                                                <option value="Sơn La">Sơn La
                                                                <option value="Tây Ninh">Tây Ninh
                                                                <option value="Thái Bình">Thái Bình
                                                                <option value="Thái Nguyên">Thái Nguyên
                                                                <option value="Thanh Hóa">Thanh Hóa
                                                                <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                                                <option value="Tiền Giang">Tiền Giang
                                                                <option value="Trà Vinh">Trà Vinh
                                                                <option value="Tuyên Quang">Tuyên Quang
                                                                <option value="Vĩnh Long">Vĩnh Long
                                                                <option value="Vĩnh Phúc">Vĩnh Phúc
                                                                <option value="Yên Bái">Yên Bái
                                                                <option value="Phú Yên">Phú Yên
                                                                <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                                                <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                                                <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                                                <option value="Tp.Hà Nội">Tp.Hà Nội
                                                                <option value="TP  HCM">TP HCM
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>

                                            <label class="dropdown" style="width: 100%;">
                                                <label class="form-label" id="lb_bl" for="form2Example2">Hãng Xe
                                                </label>
                                                <div class="dd-button bt_bl" style="width: 100%;">
                                                    <p>Tất cả</p>
                                                </div>

                                                <input type="checkbox" class="dd-input" id="test">

                                                <div class="dd-menu" style="width: 100%;">
                                                    <div style="margin-left:13px;margin-top:10px;height: 385px;">
                                                        <div>
                                                            <p style="font-size:16px;"> Dòng xe </p>
                                                        </div>
                                                        <!-- <div style="height:35px;"> -->
                                                        <form class="sbox2" action="/search" method="get">
                                                            <div class="input-group mb-4 " style="width:97%">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i
                                                                            class="fa-solid fa-magnifying-glass"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username">
                                                            </div>
                                                        </form>
                                                        <!-- </div> -->
                                                        <div>
                                                            <!-- <select class="flatform" size="6"> -->
                                                            <ul class="ndtabmenu">
                                                                <li>
                                                                    <div style="width:100%;height:50px;">
                                                                        <div
                                                                            style="width:50%; float:left; margin-top:15px;">
                                                                            <p
                                                                                style="font-size:18px; color:#F05626; font-weight: bold;">
                                                                                Tất cả
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            style="width:50%; float: right; margin-top:15px;">
                                                                            <img src="img/Annotation 2023-07-05 213208.png"
                                                                                alt="" style="margin-left:120px;">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <span><img src="img/Toyota.png" alt=""
                                                                            style="width:24px; height:24px;"></span>
                                                                    <span>Toyota</span>
                                                                </li>
                                                                <li>
                                                                    <span><img src="img/Hyndy.png" alt=""
                                                                            style="width:24px; height:24px;"></img></span>
                                                                    <span>Hyundai</span>
                                                                </li>
                                                                <li>
                                                                    <span><img src="img/Kia.png" alt=""
                                                                            style="width:24px; height:24px;"></img></span>
                                                                    <span>KIA</span>
                                                                </li>
                                                                <li>
                                                                    <span><img src="img/vinfast.png" alt=""
                                                                            style="width:24px; height:24px;"></span>
                                                                    <span>VinFast</span>
                                                                </li>
                                                                <li>
                                                                    <span><img src="img/mitsubishi.png" alt=""
                                                                            style="width:24px; height:24px;"></img></span>
                                                                    <span>Misubishi</span>
                                                                </li>
                                                            </ul>
                                                            <!-- </select> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>

                                            <div class="form-group" style="width: 100%;">
                                                <!-- <label class="form-label" id="lb_bl3" for="form2Example2">Dòng xe
                                                    </label> -->
                                                <select class="form-control" style="height: 40px;
                                                    margin: 0 5px;" disabled>
                                                    <option selected>Tất cả</option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>

                                            <!-- ---------Khoảng Giá---------- -->
                                            <div class="boc_than_bl">
                                                <p>Khoảng Giá</p>
                                                <div class="khgia_home">
                                                    <p><b>Từ 0 đến <span id="demo2"></span></b><b>&nbsp;triệu</b>
                                                    </p>
                                                    <input type="range" min="0" max="900" value="0" class="slider2"
                                                        id="myRange2">

                                                </div>
                                            </div>

                                            <!-- ---------Tình trạng---------- -->
                                            <div class="boc_than_bl">
                                                <p>Tình trạng</p>
                                                <div class="tt_xe_bl">
                                                    <button>xe cũ</button>
                                                    <button>xe mới</button>
                                                </div>
                                            </div>

                                            <!-- ---------Năm sản xuất---------- -->
                                            <div class="boc_than_bl">
                                                <p>Năm sản xuất</p>
                                                <div class="khgia_home">
                                                    <p><b>Từ năm 2000 đến <span id="namsx"></span></b><b>&nbsp;năm</b>
                                                    </p>
                                                    <input type="range" min="2000" max="2023" value="0" class="sonam"
                                                        id="myRange2">

                                                </div>
                                            </div>

                                            <!-- ---------Hộp số---------- -->
                                            <div class="boc_than_bl">
                                                <p>Hộp số</p>
                                                <div class="tt_xe_bl ">
                                                    <button id="hs_bl">Số sàn</button>
                                                    <button id="hs_bl">Tự động</button>
                                                    <button id="hs_bl">Bán tự động</button>
                                                </div>
                                            </div>

                                            <!-- ----------Nguyên liệu--------- -->
                                            <div class="boc_than_bl">
                                                <p>Nhiên Liệu</p>
                                                <div class="nl_xe_bl">
                                                    <button class="nl_bt">Xăng</button>
                                                    <button class="nl_bt">Dầu</button>
                                                    <button class="nl_bt">Điện</button>
                                                    <button class="nl_bt">Hybrid</button>
                                                </div>
                                            </div>
                                            <!-- --------------Kiểu dáng-------------- -->
                                            <div class="boc_than_bl">
                                                <p>Kiểu dáng</p>
                                                <div class="kd_xe_bl">
                                                    <button class="nl_bt">Sedan</button>
                                                    <button class="nl_bt">Hatchback</button>
                                                    <button class="nl_bt">SUV</button>
                                                    <button class="nl_bt">Bán Tải</button>
                                                    <button class="nl_bt">Xe Tải</button>
                                                    <button class="nl_bt">MPV</button>
                                                    <button class="nl_bt">Van/Minivan</button>
                                                    <button class="nl_bt">Coupe</button>
                                                    <button class="nl_bt">Mui trần</button>
                                                </div>
                                            </div>
                                            <!-- /* --------------Số chỗ ngồi------------ -->
                                            <div class="boc_than_bl">
                                                <p>Số chỗ ngồi</p>
                                                <div class="kd_xe_bl">
                                                    <button class="scn  ">2</button>
                                                    <button class="scn ">4</button>
                                                    <button class="scn ">5</button>
                                                    <button class="scn ">7</button>
                                                    <button class="scn ">9</button>
                                                    <button class="scn ">14</button>
                                                    <button class="scn ">3</button>
                                                    <button class="scn ">8</button>
                                                    <button class="scn ">6</button>
                                                </div>
                                            </div>
                                            <!-- ---------Xuất xứ---------- -->
                                            <div class="boc_than_bl">
                                                <p>Xuất xứ</p>
                                                <div class="tt_xe_bl">
                                                    <button>Nhập khẩu</button>
                                                    <button>Lắp ráp trong nước</button>
                                                </div>
                                            </div>
                                            <!-- ---------Kiểu dẫn động---------- -->
                                            <div class="boc_than_bl">
                                                <p>Kiểu dẫn động</p>
                                                <div class="nl_xe_bl">
                                                    <button class="nl_bt">FWD</button>
                                                    <button class="nl_bt">RWD</button>
                                                    <button class="nl_bt">AWD</button>
                                                    <button class="nl_bt">4WD</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_footer">
                                        <button style="background-color:#fff;color: #F05626;border: 1px solid #F05626;"
                                            type="button" class="btn btn-light">Bỏ chọn tất
                                            cả</button>
                                        <button style="background-color: #F05626;border: 1px solid #F05626;"
                                            type="button" class="btn btn-primary">Xem kết quả</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="buttom_login">
                        <div class="but">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#modelId" style="background-color: #f05626;border: none;font-size: 16px;">
                                <i class="fa-regular fa-user" id="login_header"></i>Đăng Nhập
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Đăng Nhập</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <!-- form dang ky dang nhap -->
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-outline mb-4" id="icons_modal">
                                                    <button>
                                                        <i class="fa-brands fa-facebook" style="color: #225fc9;"></i>
                                                        Đăng nhập bằng facebook
                                                    </button>
                                                </div>
                                                <div class="form-outline mb-4" id="icons_modal">
                                                    <button>
                                                        <i class="fa-brands fa-google"></i> Đăng nhập bằng google
                                                    </button>
                                                </div>

                                                <!-- Password input -->
                                                <div class="form-outline mb-4">
                                                    <p class="form-label" for="form2Example2" style="color: #B3B6C1;">
                                                        hoặc đăng nhập bằng
                                                        tài khoản Chợ xe</p>
                                                </div>
                                                <div class="login_modal">
                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" id="lb_tkmk" for="form2Example2">Số
                                                            điện
                                                            thoại</label>
                                                        <input type="text" id="ip_tkmk" class="form-control" />
                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" id="lb_tkmk" for="form2Example2">mật
                                                            khẩu</label>
                                                        <input type="password" id="ip_tkmk" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="register_modal">
                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" id="lb_tkmk" for="form2Example2">Họ
                                                            tên</label>
                                                        <input type="text" id="ip_tkmk" class="form-control" />
                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" id="lb_tkmk" for="form2Example2">Số
                                                            điện thoại</label>
                                                        <input type="text" id="ip_tkmk" class="form-control" />
                                                    </div>
                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" id="lb_tkmk"
                                                            for="form2Example2">Email</label>
                                                        <input type="email" id="ip_tkmk" class="form-control" />
                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" id="lb_tkmk" for="form2Example2">Mật
                                                            khẩu</label>
                                                        <input type="password" id="ip_tkmk" class="form-control" />
                                                    </div>
                                                </div>
                                                <!-- 2 column grid layout for inline styling -->
                                                <div class="row mb-4">
                                                    <div class="col d-flex justify-content-center">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="form2Example31" checked />
                                                            <label class="form-check-label" for="form2Example31">
                                                                Lưu mật khẩu </label>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <!-- Simple link -->
                                                        <a href="#!" style="color: #f05626;">Quên mật khẩu ?</a>
                                                    </div>
                                                </div>

                                                <!-- Submit button -->
                                                <button type="button" style="background-color: #f05626; border: none;"
                                                    class="btn btn-primary btn-block mb-4">Đăng
                                                    Nhập</button>

                                                <!-- Register buttons -->
                                                <div class="text-center ">
                                                    <p>Bạn Chưa có tài khoản? <a onclick="eventclickshow()"
                                                            id="change_login" href="#!" style="color: #f05626;">Đăng
                                                            ký</a>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="but2">
                            <a target="_blank" href="đăngtin.html" id="dangtin">
                                Đăng Tin <img src="/img/add_listing_white_16_18.png" alt="" id="login_dangtin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="margin-top:2%;">
                        <img src="/img/logo_white (1).png" alt=""></img>
                        <div style="margin-left:49%; margin-top:-3%;"><P style="color: #fff;font-size:24px;">Đăng tin</P></div>
                    </div>
                </div>
                <!-- <section class="home">
>>>>>>> dbb9f6f068d3b222f88b6b5c6d9105547953d532
                        <div class="form_container">
                            <i class="uil uil-times form_close"></i>
                           
                            <div class="form login_form">
                                <form action="#">
                                    <h2>Login</h2>
                                    <div class="input_box">
                                        <input type="email" placeholder="Enter your email" required />
                                        <i class="uil uil-envelope-alt email"></i>
                                    </div>
                                    <div class="input_box">
                                        <input type="password" placeholder="Enter your password" required />
                                        <i class="uil uil-lock password"></i>
                                        <i class="uil uil-eye-slash pw_hide"></i>
                                    </div>
                                    <div class="option_field">
                                        <span class="checkbox">
                                            <input type="checkbox" id="check" />
                                            <label for="check">Remember me</label>
                                        </span>
                                        <a href="#" class="forgot_pw">Forgot password?</a>
                                    </div>
                                    <button class="button">Login Now</button>
                                    <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="form signup_form">
                                <form action="#">
                                    <h2>Signup</h2>
                                    <div class="input_box">
                                        <input type="email" placeholder="Enter your email" required />
                                        <i class="uil uil-envelope-alt email"></i>
                                    </div>
                                    <div class="input_box">
                                        <input type="password" placeholder="Create password" required />
                                        <i class="uil uil-lock password"></i>
                                        <i class="uil uil-eye-slash pw_hide"></i>
                                    </div>
                                    <div class="input_box">
                                        <input type="password" placeholder="Confirm password" required />
                                        <i class="uil uil-lock password"></i>
                                        <i class="uil uil-eye-slash pw_hide"></i>
                                    </div>
                                    <button class="button">Signup Now</button>
                                    <div class="login_signup">Already have an account? <a href="#" id="login">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section> -->
<<<<<<< HEAD
         </div>
      </div>

      <!-- đây là nội dung phần thân  -->

      <div style="width:80%;background-color:#fff;height:auto; margin-left:11%;
        margin-top: 2%;border-radius:10px 10px;border: 1px solid #e2dfdf; margin-bottom:2%;">
         <div style="margin-bottom:2%;">
            <div>
               <label class="dropdown" style="width: 50%;margin-left:25%;margin-top:2%;">
                  <label class="form-label" id="lb_bl" for="form2Example2">khu vực bán xe*
                  </label>
                  <div class="dd-button bt_bl" style="width: 100%;">
                     <p>Chọn tỉnh thành phố </p>
                  </div>

                  <input type="checkbox" class="dd-input" id="test">

                  <div class="dd-menu" style="width: 100%;">
                     <div style="margin-left:13px;margin-top:10px;height: 220px;">
                        <!-- <div style="height:35px;"> -->
                        <form class="sbox2" action="/search" method="get">
                           <div class="input-group mb-4 " style="width:97%">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Username">
                           </div>
                        </form>
                        <!-- </div> -->
                        <div>
                           <select class="flatform" size="6">
                              <option value="An Giang">An Giang
                              <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                              <option value="Bắc Giang">Bắc Giang
                              <option value="Bắc Kạn">Bắc Kạn
                              <option value="Bạc Liêu">Bạc Liêu
                              <option value="Bắc Ninh">Bắc Ninh
                              <option value="Bến Tre">Bến Tre
                              <option value="Bình Định">Bình Định
                              <option value="Bình Dương">Bình Dương
                              <option value="Bình Phước">Bình Phước
                              <option value="Bình Thuận">Bình Thuận
                              <option value="Bình Thuận">Bình Thuận
                              <option value="Cà Mau">Cà Mau
                              <option value="Cao Bằng">Cao Bằng
                              <option value="Đắk Lắk">Đắk Lắk
                              <option value="Đắk Nông">Đắk Nông
                              <option value="Điện Biên">Điện Biên
                              <option value="Đồng Nai">Đồng Nai
                              <option value="Đồng Tháp">Đồng Tháp
                              <option value="Đồng Tháp">Đồng Tháp
                              <option value="Gia Lai">Gia Lai
                              <option value="Hà Giang">Hà Giang
                              <option value="Hà Nam">Hà Nam
                              <option value="Hà Tĩnh">Hà Tĩnh
                              <option value="Hải Dương">Hải Dương
                              <option value="Hậu Giang">Hậu Giang
                              <option value="Hòa Bình">Hòa Bình
                              <option value="Hưng Yên">Hưng Yên
                              <option value="Khánh Hòa">Khánh Hòa
                              <option value="Kiên Giang">Kiên Giang
                              <option value="Kon Tum">Kon Tum
                              <option value="Lai Châu">Lai Châu
                              <option value="Lâm Đồng">Lâm Đồng
                              <option value="Lạng Sơn">Lạng Sơn
                              <option value="Lào Cai">Lào Cai
                              <option value="Long An">Long An
                              <option value="Nam Định">Nam Định
                              <option value="Nghệ An">Nghệ An
                              <option value="Ninh Bình">Ninh Bình
                              <option value="Ninh Thuận">Ninh Thuận
                              <option value="Phú Thọ">Phú Thọ
                              <option value="Quảng Bình">Quảng Bình
                              <option value="Quảng Bình">Quảng Bình
                              <option value="Quảng Ngãi">Quảng Ngãi
                              <option value="Quảng Ninh">Quảng Ninh
                              <option value="Quảng Trị">Quảng Trị
                              <option value="Sóc Trăng">Sóc Trăng
                              <option value="Sơn La">Sơn La
                              <option value="Tây Ninh">Tây Ninh
                              <option value="Thái Bình">Thái Bình
                              <option value="Thái Nguyên">Thái Nguyên
                              <option value="Thanh Hóa">Thanh Hóa
                              <option value="Thừa Thiên Huế">Thừa Thiên Huế
                              <option value="Tiền Giang">Tiền Giang
                              <option value="Trà Vinh">Trà Vinh
                              <option value="Tuyên Quang">Tuyên Quang
                              <option value="Vĩnh Long">Vĩnh Long
                              <option value="Vĩnh Phúc">Vĩnh Phúc
                              <option value="Yên Bái">Yên Bái
                              <option value="Phú Yên">Phú Yên
                              <option value="Tp.Cần Thơ">Tp.Cần Thơ
                              <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                              <option value="Tp.Hải Phòng">Tp.Hải Phòng
                              <option value="Tp.Hà Nội">Tp.Hà Nội
                              <option value="TP  HCM">TP HCM
                           </select>
                        </div>
                     </div>
                  </div>
               </label>
            </div>
            <div style="width:50%;margin-left:25%;">
               <p>Tình trạng</p>
               <div class="tt_xe_bl">
                  <button>xe cũ</button>
                  <button>xe mới</button>
               </div>
            </div>

            <div style="margin-left:25%;margin-top:1%;">
               <P style="color: #A5A5A5;">Ảnh xe *</P>
               <div style="width:67%;height:140px;background-color:#F5F5F6;border-radius:5px 5px;">
                  <div>
                     <ul style="margin-left:30px;">
                        <li>Đăng ít nhất 3 ảnh </li>
                        <li>Ảnh đầu tiên sẽ là ảnh đại diện cho tin đăng </li>
                     </ul>
                     <p style="margin-left:30px;margin-right:30px;color: #A5A5A5;">Chụp hình đầy đủ và chi tiết
                        sẽ gây ấn tượng tốt với người xem tin: ngoại thất (mặt
                        trước,
                        mặt sau, 2 bên), nội thất (khoang lái, hàng ghế trước, hàng ghế sau), khoang máy.</p>
                     <p style="margin-left: 30px;">
                        <a href="" style="color: #F05626;text-decoration: underline #F05626;">Tham khảo hình mẫu
                        </a>
                     </p>
                  </div>
               </div>
            </div>
            <div
               style="margin-left:25%; width: 50%; margin-top:2%;border: 2px dashed #FFB8A1;border-radius: 4px;height:70px;">
               <!-- <span>
                    <i class="icon-add-photo"></i>
                </span> -->
               <input type="file" style="margin-left:25%;margin-top:25px;">
            </div>
            <label class="dropdown" style="width:50%;margin-left:25%;margin-top:2%;">
               <label class="form-label" id="lb_bl" for="form2Example2">Hãng Xe
               </label>
               <div class="dd-button bt_bl" style="width: 100%;">
               </div>

               <input type="checkbox" class="dd-input" id="test">

               <div class="dd-menu" style="width: 100%;">
                  <div style="margin-left:13px;margin-top:10px;height: 385px;">
                     <!-- <div style="height:35px;"> -->
                     <form class="sbox2" action="/search" method="get">
                        <div class="input-group mb-4 " style="width:97%">
                           <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                           </div>
                           <input type="text" class="form-control" placeholder="Username">
                        </div>
                     </form>
                     <!-- </div> -->
                     <div>
                        <!-- <select class="flatform" size="6"> -->
                        <ul class="ndtabmenu">

                           <li>

                              <span>Toyota</span>
                           </li>
                           <li>

                              <span>Hyundai</span>
                           </li>
                           <li>

                              <span>KIA</span>
                           </li>
                           <li>
                              <span>VinFast</span>
                           </li>
                           <li>

                              <span>Misubishi</span>
                           </li>
                        </ul>
                        <!-- </select> -->
                     </div>
                  </div>
               </div>
            </label>
            <label class="dropdown" style="width:50%;margin-left:25%;">
               <label class="form-label" id="lb_bl" for="form2Example2">Dòng xe
               </label>
               <div class="dd-button bt_bl" style="width: 100%;">
               </div>

               <input type="checkbox" class="dd-input" id="test">

               <div class="dd-menu" style="width: 100%;">
                  <div style="margin-left:13px;margin-top:10px;height: 385px;">
                     <!-- <div style="height:35px;"> -->
                     <form class="sbox2" action="/search" method="get">
                        <div class="input-group mb-4 " style="width:97%">
                           <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                           </div>
                           <input type="text" class="form-control" placeholder="Username">
                        </div>
                     </form>
                     <!-- </div> -->
                     <div>
                        <!-- <select class="flatform" size="6"> -->
                        <ul class="ndtabmenu">

                           <li>

                           </li>
                           <li>


                           </li>
                           <li>


                           </li>
                           <li>

                           </li>
                           <li>


                           </li>
                        </ul>
                        <!-- </select> -->
                     </div>
                  </div>
               </div>
            </label>
            <label class="dropdown" style="width:50%;margin-left:25%;">
               <label class="form-label" id="lb_bl" for="form2Example2">Năm sản xuất
               </label>
               <div class="dd-button bt_bl" style="width: 100%;">
               </div>

               <input type="checkbox" class="dd-input" id="test">

               <div class="dd-menu" style="width: 100%;">
                  <div style="margin-left:13px;margin-top:10px;height: 385px;">
                     <!-- <div style="height:35px;"> -->
                     <form class="sbox2" action="/search" method="get">
                        <div class="input-group mb-4 " style="width:97%">
                           <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                           </div>
                           <input type="text" class="form-control" placeholder="Username">
                        </div>
                     </form>
                     <!-- </div> -->
                     <div>
                        <!-- <select class="flatform" size="6"> -->
                        <ul class="ndtabmenu">

                           <li>

                           </li>
                           <li>


                           </li>
                           <li>


                           </li>
                           <li>

                           </li>
                           <li>


                           </li>
                        </ul>
                        <!-- </select> -->
                     </div>
                  </div>
               </div>
=======
            </div>
        </div>

        <!-- đây là nội dung phần thân đăng tin -->

        <div style="width:80%;background-color:#fff;height:auto; margin-left:11%;
        margin-top: 2%;border-radius:10px 10px;border: 1px solid #e2dfdf; margin-bottom:2%;">
        <form method="post" enctype="multipart/form-data">
        <div style="margin-bottom:2%;">
            <div>
                <label class="dropdown" style="width: 50%;margin-left:25%;margin-top:2%;">
                    <label class="form-label" id="lb_bl" for="form2Example2">khu vực bán xe*
                    </label>
                    <div class="dd-button bt_bl" style="width: 100%;">
                        <p>Chọn tỉnh thành phố </p>
                    </div>

                    <input type="checkbox" class="dd-input" id="test">

                    <div class="dd-menu" style="width: 100%;">
                        <div style="margin-left:13px;margin-top:10px;height: 220px;">
                            <!-- <div style="height:35px;"> -->
                            <form class="sbox2" action="/search" method="get">
                                <div class="input-group mb-4 " style="width:97%">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i
                                                class="fa-solid fa-magnifying-glass"></i></span>
                                    </div>
                                    <input type="text" class="form-control"
                                        placeholder="Username">
                                </div>
                            </form>
                            <!-- </div> -->
                            <div>
                                <select class="flatform" size="6" name="txtbanxe">
                                    <option value="An Giang">An Giang
                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                    <option value="Bắc Giang">Bắc Giang
                                    <option value="Bắc Kạn">Bắc Kạn
                                    <option value="Bạc Liêu">Bạc Liêu
                                    <option value="Bắc Ninh">Bắc Ninh
                                    <option value="Bến Tre">Bến Tre
                                    <option value="Bình Định">Bình Định
                                    <option value="Bình Dương">Bình Dương
                                    <option value="Bình Phước">Bình Phước
                                    <option value="Bình Thuận">Bình Thuận
                                    <option value="Bình Thuận">Bình Thuận
                                    <option value="Cà Mau">Cà Mau
                                    <option value="Cao Bằng">Cao Bằng
                                    <option value="Đắk Lắk">Đắk Lắk
                                    <option value="Đắk Nông">Đắk Nông
                                    <option value="Điện Biên">Điện Biên
                                    <option value="Đồng Nai">Đồng Nai
                                    <option value="Đồng Tháp">Đồng Tháp
                                    <option value="Đồng Tháp">Đồng Tháp
                                    <option value="Gia Lai">Gia Lai
                                    <option value="Hà Giang">Hà Giang
                                    <option value="Hà Nam">Hà Nam
                                    <option value="Hà Tĩnh">Hà Tĩnh
                                    <option value="Hải Dương">Hải Dương
                                    <option value="Hậu Giang">Hậu Giang
                                    <option value="Hòa Bình">Hòa Bình
                                    <option value="Hưng Yên">Hưng Yên
                                    <option value="Khánh Hòa">Khánh Hòa
                                    <option value="Kiên Giang">Kiên Giang
                                    <option value="Kon Tum">Kon Tum
                                    <option value="Lai Châu">Lai Châu
                                    <option value="Lâm Đồng">Lâm Đồng
                                    <option value="Lạng Sơn">Lạng Sơn
                                    <option value="Lào Cai">Lào Cai
                                    <option value="Long An">Long An
                                    <option value="Nam Định">Nam Định
                                    <option value="Nghệ An">Nghệ An
                                    <option value="Ninh Bình">Ninh Bình
                                    <option value="Ninh Thuận">Ninh Thuận
                                    <option value="Phú Thọ">Phú Thọ
                                    <option value="Quảng Bình">Quảng Bình
                                    <option value="Quảng Bình">Quảng Bình
                                    <option value="Quảng Ngãi">Quảng Ngãi
                                    <option value="Quảng Ninh">Quảng Ninh
                                    <option value="Quảng Trị">Quảng Trị
                                    <option value="Sóc Trăng">Sóc Trăng
                                    <option value="Sơn La">Sơn La
                                    <option value="Tây Ninh">Tây Ninh
                                    <option value="Thái Bình">Thái Bình
                                    <option value="Thái Nguyên">Thái Nguyên
                                    <option value="Thanh Hóa">Thanh Hóa
                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                    <option value="Tiền Giang">Tiền Giang
                                    <option value="Trà Vinh">Trà Vinh
                                    <option value="Tuyên Quang">Tuyên Quang
                                    <option value="Vĩnh Long">Vĩnh Long
                                    <option value="Vĩnh Phúc">Vĩnh Phúc
                                    <option value="Yên Bái">Yên Bái
                                    <option value="Phú Yên">Phú Yên
                                    <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                    <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                    <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                    <option value="Tp.Hà Nội">Tp.Hà Nội
                                    <option value="TP  HCM">TP HCM
                                </select>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
            <div style="width:50%;margin-left:25%;">
                <p>Tình trạng</p>
                <div class="tt_xe_bl">
                    <button name="txttinhtrang">xe cũ</button>
                    <button name="txttinhtrang">xe mới</button>
                </div>
            </div>

            <div style="margin-left:25%;margin-top:1%;">
                <P style="color: #A5A5A5;">Ảnh xe *</P>
                <div style="width:67%;height:140px;background-color:#F5F5F6;border-radius:5px 5px;">
                    <div>
                        <ul style="margin-left:30px;">
                            <li>Đăng ít nhất 3 ảnh </li>
                            <li>Ảnh đầu tiên sẽ là ảnh đại diện cho tin đăng </li>
                        </ul>
                        <p style="margin-left:30px;margin-right:30px;color: #A5A5A5;">Chụp hình đầy đủ và chi tiết sẽ gây ấn tượng tốt với người xem tin: ngoại thất (mặt
                            trước,
                            mặt sau, 2 bên), nội thất (khoang lái, hàng ghế trước, hàng ghế sau), khoang máy.</p>
                        <p style="margin-left: 30px;">
                            <a href="" style="color: #F05626;text-decoration: underline #F05626;">Tham khảo hình mẫu </a>
                        </p>
                    </div>
                </div>
            </div>
            <div style="margin-left:25%; width: 50%; margin-top:2%;border: 2px dashed #FFB8A1;border-radius: 4px;height:70px;">
                <!-- <span>
                    <i class="icon-add-photo"></i>
                </span> -->
                <input type="file" style="margin-left:25%;margin-top:25px;" name="txtfile">
            </div>
            <label class="dropdown" style="width:50%;margin-left:25%;margin-top:2%;">
                <label class="form-label" id="lb_bl" for="form2Example2">Hãng Xe
                </label>
                <div class="dd-button bt_bl" style="width: 100%;">
                </div>

                <input type="checkbox" class="dd-input" id="test">

                <div class="dd-menu" style="width: 100%;">
                    <div style="margin-left:13px;margin-top:10px;height: 385px;">
                        <!-- <div style="height:35px;"> -->
                        <form class="sbox2" action="/search" method="get">
                            <div class="input-group mb-4 " style="width:97%">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                                <input type="text" class="form-control"
                                    placeholder="Username" name="txthangxe">
                            </div>
                        </form>
                        <!-- </div> -->
                        <div>
                            <!-- <select class="flatform" size="6"> -->
                            <ul class="ndtabmenu">
                                
                                <li>
                                   
                                    <span>Toyota</span>
                                </li>
                                <li>
                                   
                                    <span>Hyundai</span>
                                </li>
                                <li>
                                   
                                    <span>KIA</span>
                                </li>
                                <li>
                                    <span>VinFast</span>
                                </li>
                                <li>
                                    
                                    <span>Misubishi</span>
                                </li>
                            </ul>
                            <!-- </select> -->
                        </div>
                    </div>
                </div>
            </label>
            <label class="dropdown" style="width:50%;margin-left:25%;">
                <label class="form-label" id="lb_bl" for="form2Example2">Dòng xe
                </label>
                <div class="dd-button bt_bl" style="width: 100%;">
                </div>

                <input type="checkbox" class="dd-input" id="test">

                <div class="dd-menu" style="width: 100%;">
                    <div style="margin-left:13px;margin-top:10px;height: 385px;">
                        <!-- <div style="height:35px;"> -->
                        <form class="sbox2" action="/search" method="get">
                            <div class="input-group mb-4 " style="width:97%">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                                <input type="text" class="form-control"
                                    placeholder="Username" name="txtdongxe">
                            </div>
                        </form>
                        <!-- </div> -->
                        <div>
                            <!-- <select class="flatform" size="6"> -->
                            <ul class="ndtabmenu">
                                
                                <li>
                                   
                                </li>
                                <li>
                                   
                                  
                                </li>
                                <li>
                                   
                                   
                                </li>
                                <li>
                                   
                                </li>
                                <li>
                                    
                                    
                                </li>
                            </ul>
                            <!-- </select> -->
                        </div>
                    </div>
                </div>
            </label>
            <label class="dropdown" style="width:50%;margin-left:25%;">
                <label class="form-label" id="lb_bl" for="form2Example2">Năm sản xuất
                </label>
                <div class="dd-button bt_bl" style="width: 100%;">
                </div>

                <input type="checkbox" class="dd-input" id="test">

                <div class="dd-menu" style="width: 100%;">
                    <div style="margin-left:13px;margin-top:10px;height: 385px;">
                        <!-- <div style="height:35px;"> -->
                        <form class="sbox2" action="/search" method="get">
                            <div class="input-group mb-4 " style="width:97%">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                                <input type="text" class="form-control"
                                    placeholder="Username" name="txtnamsanxuat">
                            </div>
                        </form>
                        <!-- </div> -->
                        <div>
                            <!-- <select class="flatform" size="6"> -->
                            <ul class="ndtabmenu">
                                
                                <li>
                                   
                                </li>
                                <li>
                                   
                                  
                                </li>
                                <li>
                                   
                                   
                                </li>
                                <li>
                                   
                                </li>
                                <li>
                                    
                                    
                                </li>
                            </ul>
                            <!-- </select> -->
                        </div>
                    </div>
                </div>
>>>>>>> dbb9f6f068d3b222f88b6b5c6d9105547953d532
            </label>


            <div style="margin-left:25%; border:1px solid #5e5e5f;width:50%;height:40px;border-radius:3px ;">
<<<<<<< HEAD
               <label for="" style="margin-left:2px;color: #A5A5A5;font-size:12px;height:5px;">Phiên bản *</label>
               <input type="text" class="nut2">
            </div>
            <div
               style="margin-left:25%;width:50%;background-color: white;height:40px;border: 1px solid #5e5e5f;border-radius:4px;margin-top:1%;">
               <label style="margin-left:1%;height:5px;font-size:12px;color: #A5A5A5">Số km đã đi(ODO) *</label>
               <input type="text" class="nut2">
            </div>
            <div style="width:50%;margin-left:25%;margin-top:10px;">
               <p>Hộp số</p>
               <div class="tt_xe_bl ">
                  <button id="hs_bl">Số sàn</button>
                  <button id="hs_bl">Tự động</button>
                  <button id="hs_bl">Bán tự động</button>
               </div>
            </div>
            <div style="width:50%;margin-left:25%;margin-top:10px;">
               <p>Kiểu dẫn động</p>
               <div class="nl_xe_bl" style="flex-grow: 1;">
                  <button class="nl_bt">FWD</button>
                  <button class="nl_bt">RWD</button>
                  <button class="nl_bt">AWD</button>
                  <button class="nl_bt">4WD</button>
               </div>
            </div>
            <div style="width:50%;margin-left:25%;margin-top:10px;">
               <p>Nhiên Liệu</p>
               <div class="nl_xe_bl">
                  <button class="nl_bt">Xăng</button>
                  <button class="nl_bt">Dầu</button>
                  <button class="nl_bt">Điện</button>
                  <button class="nl_bt">Hybrid</button>
               </div>
            </div>
            <div
               style="margin-left:25%; border:1px solid #5e5e5f;width:50%;height:40px;border-radius:3px;margin-top:2%;">
               <label for="" style="margin-left:2px;color: #A5A5A5;font-size:12px;height:5px;">Giá bán*</label>
               <input type="text" class="nut2">
            </div>
            <div style="margin-left:25%;margin-top:1%;">
               <P style="color: #A5A5A5;">Tiêu đề của tin *</P>
               <div style="width:67%;height:110px;background-color:#F5F5F6;border-radius:5px 5px;">
                  <div>
                     <p style="margin-left:30px;margin-right:30px;color: #A5A5A5;">
                        Tiêu đề tin cần bao gồm các thông tin quan trọng nhất để nâng cao hiệu quả tìm kiếm:
                        hãng xe, dòng
                        xe,
                        phiên bản, năm sản xuất, số tự động / số sàn, số km đã đi, ... và các đặc tính nổi bật
                        khác.</p>
                     <p style="margin-left: 30px;color: #A5A5A5;">
                        Ví dụ: <b style="color: rgb(82, 81, 81);">Toyota Fortuner 2.8V 4x4 AT 2019, máy dầu, số
                           tự động, đã đi 80 ngàn km, nhập khẩu, màu
                           đen</b>
                     </p>
                  </div>
               </div>
            </div>
            <div
               style="margin-left:25%; border:1px solid #5e5e5f;width:50%;height:75px;border-radius:3px;margin-top:2%;">
               <label style="margin-left:12px;color: #A5A5A5;font-size:12px;height:10px;">Tiêu đề của tin *</label>
               <textarea style="width: 100%; height:50px;border: none;" class="nut2"></textarea>
            </div>
            <div
               style="margin-left:25%; border:1px solid #5e5e5f;width:50%;height:150px;border-radius:4px;margin-top:2%;">
               <label for="" style="margin-left:12px;color: #A5A5A5;font-size:12px;height:5px;">Mô tả chi tiết
                  *</label>
               <textarea name="" id="" style="width: 100%; height:130px;border: none;" class="nut2" placeholder="  Nhập mô tả chi tiết về xe đăng bán
=======
                <label for="" style="margin-left:2px;color: #A5A5A5;font-size:12px;height:5px;">Phiên bản *</label>
                <input type="text" class="nut2" name="txtphienban">
            </div>
            <div style="margin-left:25%;width:50%;background-color: white;height:40px;border: 1px solid #5e5e5f;border-radius:4px;margin-top:1%;">
                <label style="margin-left:1%;height:5px;font-size:12px;color: #A5A5A5">Số km đã đi(ODO) *</label>
                <input type="text" class="nut2" name="txtsokmdi">
            </div>
            <div  style="width:50%;margin-left:25%;margin-top:10px;">
                <p>Hộp số</p>
                <div class="tt_xe_bl ">
                    <button id="hs_bl" name="txthopso">Số sàn</button>
                    <button id="hs_bl" name="txthopso">Tự động</button>
                    <button id="hs_bl" name="txthopso">Bán tự động</button>
                </div>
            </div>
            <div  style="width:50%;margin-left:25%;margin-top:10px;">
                <p>Kiểu dẫn động</p>
                <div class="nl_xe_bl" style="flex-grow: 1;">
                    <button class="nl_bt" name="txtkieudandong">FWD</button>
                    <button class="nl_bt" name="txtkieudandong">RWD</button>
                    <button class="nl_bt" name="txtkieudandong">AWD</button>
                    <button class="nl_bt" name="txtkieudandong">4WD</button>
                </div>
            </div>
            <div  style="width:50%;margin-left:25%;margin-top:10px;">
                <p>Nhiên Liệu</p>
                <div class="nl_xe_bl">
                    <button class="nl_bt" name="txtnhienlieu">Xăng</button>
                    <button class="nl_bt" name="txtnhienlieu">Dầu</button>
                    <button class="nl_bt" name="txtnhienlieu">Điện</button>
                    <button class="nl_bt" name="txtnhienlieu">Hybrid</button>
                </div>
            </div>
            <div style="margin-left:25%; border:1px solid #5e5e5f;width:50%;height:40px;border-radius:3px;margin-top:2%;">
                <label for="" style="margin-left:2px;color: #A5A5A5;font-size:12px;height:5px;">Giá bán*</label>
                <input type="text" class="nut2" name="txtgiaban">
            </div>
            <div style="margin-left:25%;margin-top:1%;">
                <P style="color: #A5A5A5;">Tiêu đề của tin *</P>
                <div style="width:67%;height:110px;background-color:#F5F5F6;border-radius:5px 5px;">
                    <div>
                        <p style="margin-left:30px;margin-right:30px;color: #A5A5A5;">
                            Tiêu đề tin cần bao gồm các thông tin quan trọng nhất để nâng cao hiệu quả tìm kiếm: hãng xe, dòng
                            xe,
                            phiên bản, năm sản xuất, số tự động / số sàn, số km đã đi, ... và các đặc tính nổi bật khác.</p>
                        <p style="margin-left: 30px;color: #A5A5A5;">
                            Ví dụ: <b style="color: rgb(82, 81, 81);">Toyota Fortuner 2.8V 4x4 AT 2019, máy dầu, số tự động, đã đi 80 ngàn km, nhập khẩu, màu
                                đen</b>
                        </p>
                    </div>
                </div>
            </div>  
            <div  style="margin-left:25%; border:1px solid #5e5e5f;width:50%;height:75px;border-radius:3px;margin-top:2%;">
                <label style="margin-left:12px;color: #A5A5A5;font-size:12px;height:10px;">Tiêu đề của tin *</label>
                <textarea style="width: 100%; height:50px;border: none;" class="nut2" name="txttieude"></textarea>
            </div>
            <div style="margin-left:25%; border:1px solid #5e5e5f;width:50%;height:150px;border-radius:4px;margin-top:2%;">
                <label for="" style="margin-left:12px;color: #A5A5A5;font-size:12px;height:5px;">Mô tả chi tiết   *</label>
                <textarea name="txtmota" id="" style="width: 100%; height:130px;border: none;" class="nut2" placeholder="  Nhập mô tả chi tiết về xe đăng bán
>>>>>>> dbb9f6f068d3b222f88b6b5c6d9105547953d532
                · Tình trạng chiếc xe
                · Thời gian sử dụng xe
                · Bảo trì xe: bao lâu/lần ở đâu
                · Tình trạng giấy tờ"></textarea>
            </div>

            <div style="margin-left:25%;margin-top:4%;width:50%;height:50px;" id="btnShow">
<<<<<<< HEAD
               <span style="margin-left:30%;font-size:16px; color: #F05626; cursor: pointer;"
                  onclick="toggleShow()">Hiển thị tùy chọn nâng cao &#8744;</span>
               <!-- <span  onclick="toggleShow()" style="cursor: pointer;"> &#8744; </span> -->
            </div>
            <!--  -->
            <div id="btnHide" style="display: none;">
               <div style="width:50%;margin-top:2%;margin-left:25%;">
                  <div style="border:1px solid #5e5e5f;width:100%;height:40px;border-radius:4px;">
                     <label style="height:7px;color: #A5A5A5;font-size:12px;margin-left:7px;">Kiểu dáng</label>
                     <select style="width: 100%;margin-top:-2px;" class="nut2">
=======
                <span style="margin-left:30%;font-size:16px; color: #F05626; cursor: pointer;" onclick="toggleShow()" >Hiển thị tùy chọn nâng cao &#8744;</span>
                <!-- <span  onclick="toggleShow()" style="cursor: pointer;"> &#8744; </span> -->
            </div>
            <!--  -->
            <div id="btnHide" style="display: none;" >
            <div style="width:50%;margin-top:2%;margin-left:25%;">
                <div style="border:1px solid #5e5e5f;width:100%;height:40px;border-radius:4px;">
                    <label style="height:7px;color: #A5A5A5;font-size:12px;margin-left:7px;">Kiểu dáng</label>
                    <select style="width: 100%;margin-top:-2px;" class="nut2" name="txtkieudang">
>>>>>>> dbb9f6f068d3b222f88b6b5c6d9105547953d532
                        <option value="">chọn phiên kiểu dáng</option>
                        <option value="" class="chọn">Sedan</option>
                        <option value="" class="chọn">Hatchback</option>
                        <option value="" class="chọn">SUV</option>
                        <option value="" class="chọn">Bán tải</option>
                        <option value="" class="chọn">Xe tải</option>
                        <option value="" class="chọn">MPV</option>
                        <option value="" class="chọn">Van/Minivan</option>
                        <option value="" class="chọn">Coupe</option>
                        <option value="" class="chọn">Mui Trần</option>
<<<<<<< HEAD
                     </select>
                  </div>
               </div>
               <div style="width:50%;margin-top:2%;margin-left:25%;">
                  <div style="border:1px solid #5e5e5f;width:100%;height:40px;border-radius:4px;">
                     <label style="height:7px;color: #A5A5A5;font-size:12px;margin-left:10px;">Số chỗ</label>
                     <select style="width: 100%; margin-top:-2px;" class="nut2">
=======
                    </select>
                </div>
            </div>
            <div style="width:50%;margin-top:2%;margin-left:25%;">
                <div style="border:1px solid #5e5e5f;width:100%;height:40px;border-radius:4px;">
                    <label style="height:7px;color: #A5A5A5;font-size:12px;margin-left:10px;">Số chỗ</label>
                    <select style="width: 100%; margin-top:-2px;" class="nut2" name="txtsocho">
>>>>>>> dbb9f6f068d3b222f88b6b5c6d9105547953d532
                        <option value="">Chọn số chỗ</option>
                        <option value="" class="chọn">2</option>
                        <option value="" class="chọn">4</option>
                        <option value="" class="chọn">9</option>
                        <option value="" class="chọn">7</option>
                        <option value="" class="chọn">14</option>
                        <option value="" class="chọn">3</option>
                        <option value="" class="chọn">8</option>
                        <option value="" class="chọn">6</option>
<<<<<<< HEAD

                     </select>
                  </div>
               </div>
               <div style="width:50%;margin-top:2%;margin-left:25%;">
                  <div style="border:1px solid #5e5e5f;width:100%;height:40px;border-radius:4px;">
                     <label style="height:7px;color: #A5A5A5;font-size:12px;margin-left:10px;">Xuất xứ</label>
                     <select style="width: 100%; margin-top:-2px;" class="nut2">
                        <option value="">Chọn xuất xứ</option>
                        <option value="" class="chọn">Nhập khẩu </option>
                        <option value="" class="chọn">Lắp ráp trong nước</option>
                     </select>
                  </div>
               </div>
            </div>

            <div style="margin-left:25%;margin-top:2%;width:50%;">
               <p style=" color: #A5A5A5;height:10px;">Thông tin người bán </p>
               <div style="border: 1px solid #e2dfdf;width:100%;height:80px;border-radius:6px;" id="tnShow">
                  <button
                     style="border: none;background-color:#fff;margin-top:30px;margin-left:30%;font-size:16px;color: #F05626; cursor: pointer;"
                     onclick="nutShow()">Thêm thông tin liên hệ mới <span>&#43;</span></button>
               </div>
            </div>
            <div id="tnHide" style="display: none;">
               <div style="width:50%;margin-left:25%;height:auto;margin-top:2%;">
                  <div
                     style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                     <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Tên liên
                        hệ*</label>
                     <input type="text" class="nut2">
                  </div>
                  <div
                     style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                     <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Số điện thoại
                        liên hệ*</label>
                     <input type="text" class="nut2">
                  </div>
                  <div
                     style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                     <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Tỉnh/Thành
                        phố*</label>
                     <select style="border: none;" class="nut2">
                        <option value="" style="font-size:14px;">Chọn Tỉnh/Thành phố</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                     </select>
                  </div>
                  <div
                     style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                     <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Quận/huyện*</label>
                     <select style="border: none;" class="nut2">
                        <option value="" style="font-size:14px;">Chọn Quận/huyện</option>
                     </select>
                  </div>
                  <div
                     style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                     <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Phương/xã*</label>
                     <select style="border: none;" class="nut2">
                        <option value="" style="font-size:14px;">Chọn Phương/xã</option>
                     </select>
                  </div>
                  <div
                     style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                     <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Địa
                        chỉ*</label>
                     <input type="text" class="nut2">
                  </div>
                  <div style="margin-top:2%;margin-left:4%">
                     <input type="checkbox"> Đặt làm mặc định
                  </div>
                  <div style="margin-left:4%;margin-top:2%;">
                     <button style="background-color:#fff;color: #F05626;border: 1px solid #F05626;" type="button"
                        class="nut3">Hủy bỏ</button>
                     <button style="background-color: #F05626;border: 1px solid #F05626;color:#fff;margin-left:4%;"
                        type="button" class="nut3">Thêm mới</button>
                  </div>
               </div>
            </div>
            <div style="width:50%;margin-left:25%;margin-top:2%;">
               <button style="background-color: #F05626;border: 1px solid #F05626;color:#fff;" type="button"
                  class="nut1">Tiếp tục</button>
            </div>
            <div style="width:50%;margin-left:25%;margin-top:2%;">
               <button style="background-color:#fff;color: #F05626;border: 1px solid #F05626;" type="button"
                  class="nut1">Lưu tin</button>
            </div>
         </div>
      </div>


      <!-- Phần chân trang web -->
      <div class="footer">
         <div style="height:238px; width:400px;" class="contenfooter">
            <div>
               <img src="img/logo_white_117_32.png" alt="" style="width:117px; height:32px; margin-top:20px;"></img>
            </div>
            <div style="width:400px; height:42px; color:white; margin-top:40px;">
               ©2022 by ChoXe.net. All rights reserved. Công Ty Cổ Phần Ô Tô Xuyên Việt; Mã số
               thuế: 0304013473
            </div>
            <div style="width:400px; height:42px; color:white; margin-top:40px;">
               Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TPHCM
            </div>
            <div style="height:18px; width:247px;margin-top:40px; display:inline-flex;">
               <i class="fa-solid fa-phone" style="color:white; font-size:14px;"><a href=""
                     class="phone">091.144.2883</a></i>
               <i class="fa-solid fa-envelope" style="color:white; margin-left:60px; font-size:14px;"><a href=""
                     class="email">cskh@choxe.vn</a></i>
            </div>
            <div>
               <img src="img/logo-bct.png" alt="" style="height:45px;width:122px; margin-top:50px;"></img>
            </div>
         </div>
         <div style="margin-left:565px; width:180px; height:220px; margin-top:-140px;">
            <a href="" class="footerlink">Giới thiệu</a>
            <a href="" class="footerlink">Quy chế hoạt động</a>
            <a href="" class="footerlink">Báo giá</a>
         </div>
         <!-- <div style="  margin-left:900px; margin-top:-150px;">
                    <div class="phones"><i class="fa-solid fa-phone" style="color:#F05626; font-size:17px;"><a href="" class="hotline">Hotline: 091.144.2883</a></i></div>
                    <div class="salons"><i class="fa-sharp fa-solid fa-store" style="color:white; font-size:17px;"><a href="" class="salon">Dành cho Salon, Môi giới</a></i></div>
                </div> -->
         <div class="footer-content-right">
            <div class="footer-content-right-1">
               <a href=""><img src="img/hotline2.png"></a>
               <div class="footer-content-right-1_1">
                  <a href=""><b>Hotline: 091.144.2883</b></a>
               </div>
            </div>
            <div class="footer-content-right-2">
               <a href=""><img src="img/danhchomoigioi.png"></a>
               <div class="footer-content-right-2_1">
                  <a href=""><b>Dành cho salon, Môi giới</b></a>
               </div>
            </div>
         </div>
      </div>
=======
                        
                    </select>
                </div>
            </div>
            <div style="width:50%;margin-top:2%;margin-left:25%;">
                <div style="border:1px solid #5e5e5f;width:100%;height:40px;border-radius:4px;">
                    <label style="height:7px;color: #A5A5A5;font-size:12px;margin-left:10px;">Xuất xứ</label>
                    <select style="width: 100%; margin-top:-2px;" class="nut2" name="txtxuatxu">
                        <option value="">Chọn xuất xứ</option>
                        <option value="" class="chọn">Nhập khẩu </option>
                        <option value="" class="chọn">Lắp ráp trong nước</option>
                    </select>
                </div>
            </div>
            </div>

            <div style="margin-left:25%;margin-top:2%;width:50%;" >
                <p style=" color: #A5A5A5;height:10px;">Thông tin người bán </p>
                <div style="border: 1px solid #e2dfdf;width:100%;height:80px;border-radius:6px;"  id="tnShow">
                    <button style="border: none;background-color:#fff;margin-top:30px;margin-left:30%;font-size:16px;color: #F05626; cursor: pointer;" 
                     onclick="nutShow()">Thêm thông tin liên hệ mới <span>&#43;</span></button>
                </div>
            </div>
            <div id="tnHide" style="display: none;">
                <div style="width:50%;margin-left:25%;height:auto;margin-top:2%;">
                    <div style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                        <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Tên liên hệ*</label>
                        <input type="text" class="nut2" name="txttenlienhe">
                    </div>
                    <div style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                        <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Số điện thoại liên hệ*</label>
                        <input type="text" class="nut2" name="txtsdt">
                    </div>
                    <div style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                        <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Tỉnh/Thành phố*</label>
                        <select style="border: none;" class="nut2" name="txttinhtp">
                            <option value="" style="font-size:14px;">Chọn Tỉnh/Thành phố</option>
                            <option value="">Hà Nội</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                        <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Quận/huyện*</label>
                        <select style="border: none;" class="nut2" name="txtquanhuyen">
                            <option value="" style="font-size:14px;">Chọn Quận/huyện</option>
                        </select>
                    </div>
                    <div style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                        <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Phương/xã*</label>
                        <select style="border: none;" class="nut2" name="txtphuongxa">
                            <option value="" style="font-size:14px;">Chọn Phương/xã</option>
                        </select>
                    </div>
                    <div style=" border:1px solid #5e5e5f;width:90%;height:40px;border-radius:3px;margin-top:2%;margin-left:4%">
                        <label for="" style="margin-left:2%;color: #A5A5A5;font-size:12px;height:5px;">Địa chỉ*</label>
                        <input type="text" class="nut2" name="txtdiachi">
                    </div>
                    <div style="margin-top:2%;margin-left:4%">
                        <input type="checkbox"> Đặt làm mặc định
                    </div>
                    <div style="margin-left:4%;margin-top:2%;">
                        <button style="background-color:#fff;color: #F05626;border: 1px solid #F05626;"
                        type="button" class="nut3">Hủy bỏ</button>
                        <button style="background-color: #F05626;border: 1px solid #F05626;color:#fff;margin-left:4%;"
                        type="button" class="nut3">Thêm mới</button>
                    </div>
                </div>
            </div>
            <div style="width:50%;margin-left:25%;margin-top:2%;">
                <button style="background-color: #F05626;border: 1px solid #F05626;color:#fff;"
                type="button" class="nut1" name="txtsub">Tiếp tục</button>
            </div>
            <div  style="width:50%;margin-left:25%;margin-top:2%;">
                <button style="background-color:#fff;color: #F05626;border: 1px solid #F05626;"
                    type="button" class="nut1">Lưu tin</button>
            </div>
        </div>
        </form>
        <?php
            include('control.php');//Chèn trang control vào bài
            $get_data=new data();//Gọi đến class data
            if(isset($_POST['txtsub']))// Thực thị sau khi nhấn nút submit
            {
            if(empty($_POST['txtname'])||empty($_POST['txtnumber'])||empty($_POST['txtprice'])) {
               echo"<script>alert('bạn chưa nhập đủ thông tin!')</script>";
            }
            else{
            //else{
              //  if($_POST['txtpassword']!=$_POST['txtrepassword']) {
                  //  echo"<script>alert('mật khẩu không trùng khớp')</script>";
               // }
                //else {
                  //  $check_Username=$get_data->select_username();
                  //  while ($row = mysqli_fetch_array(($check_Username))) {
                     //   if ($row['Username'] == $_POST['txtusername']) {
                         //   echo "<script>alert('trung thong tin')</script>";
                          //  return;
                          //  }
                   // }
                    move_uploaded_file($_FILES['txtfile']['tmp_name'],'/img '.$_FILES['txtfile']['name']);
                    $contact=$get_data->dangtin_tt(
                                                $_POST['txtbanxe'],
                                                $_POST['txttinhtrang'],
                                                $_FILES['txtfile']['name'],
                                                $_POST['txthangxe'],
                                                $_POST['txtdongxe'],
                                                $_POST['txtnamsanxuat'],
                                                $_POST['txtphienban'],
                                                $_POST['txtsokmdi'],
                                                $_POST['txthopso'],
                                                $_POST['txtkieudandong'],
                                                $_POST['txtnhienlieu'],
                                                $_POST['txtgiaban'],
                                                $_POST['txttieude'],
                                                $_POST['txtmota'],
                                                $_POST['txtkieudang'],
                                                $_POST['txtsocho'],
                                                $_POST['txtxuatxu'],
                                                $_POST['txttenlienhe'],
                                                $_POST['txtsdt'],
                                                $_POST['txttinhtp'],
                                                $_POST['txtquanhuyen'],
                                                $_POST['txtphuongxa'],
                                                $_POST['txtdiachi']);
                    if($insert) echo "<script>alert('thêm mới sản phẩm thành công')
                    window.location='product.php';
                    </script>";
                    //else echo"<script>alert('thêm mới không thành công')</script>";
                }
              }
           // }
       //     }
       //     }
              ?>
        </div>


        <!-- Phần chân trang web -->
        <div class="footer">
            <div style="height:238px; width:400px;" class="contenfooter">
                <div>
                    <img src="/img/logo_white_117_32.png" alt=""
                        style="width:117px; height:32px; margin-top:20px;"></img>
                </div>
                <div style="width:400px; height:42px; color:white; margin-top:40px;">
                    ©2022 by ChoXe.net. All rights reserved. Công Ty Cổ Phần Ô Tô Xuyên Việt; Mã số
                    thuế: 0304013473
                </div>
                <div style="width:400px; height:42px; color:white; margin-top:40px;">
                    Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TPHCM
                </div>
                <div style="height:18px; width:247px;margin-top:40px; display:inline-flex;">
                    <i class="fa-solid fa-phone" style="color:white; font-size:14px;"><a href=""
                            class="phone">091.144.2883</a></i>
                    <i class="fa-solid fa-envelope" style="color:white; margin-left:60px; font-size:14px;"><a href=""
                            class="email">cskh@choxe.vn</a></i>
                </div>
                <div>
                    <img src="/img/logo-bct.png" alt="" style="height:45px;width:122px; margin-top:50px;"></img>
                </div>
            </div>
            <div style="margin-left:565px; width:180px; height:220px; margin-top:-140px;">
                <a href="" class="footerlink">Giới thiệu</a>
                <a href="" class="footerlink">Quy chế hoạt động</a>
                <a href="" class="footerlink">Báo giá</a>
            </div>
            <!-- <div style="  margin-left:900px; margin-top:-150px;">
                    <div class="phones"><i class="fa-solid fa-phone" style="color:#F05626; font-size:17px;"><a href="" class="hotline">Hotline: 091.144.2883</a></i></div>
                    <div class="salons"><i class="fa-sharp fa-solid fa-store" style="color:white; font-size:17px;"><a href="" class="salon">Dành cho Salon, Môi giới</a></i></div>
                </div> -->
            <div class="footer-content-right">
                <div class="footer-content-right-1">
                    <a href=""><img src="/img/hotline2.png"></a>
                    <div class="footer-content-right-1_1">
                        <a href=""><b>Hotline: 091.144.2883</b></a>
                    </div>
                </div>
                <div class="footer-content-right-2">
                    <a href=""><img src="/img/danhchomoigioi.png"></a>
                    <div class="footer-content-right-2_1">
                        <a href=""><b>Dành cho salon, Môi giới</b></a>
                    </div>
                </div>
            </div>
        </div>
>>>>>>> dbb9f6f068d3b222f88b6b5c6d9105547953d532




<<<<<<< HEAD
      <!-- link javascrip -->
      <script src="/javascrip/slider.js"></script>
      <script src="/javascrip/content.js"></script>
      <script src="/javascrip/dangtin.js"></script>


      <!-- bootstrap -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
   </div>

</body>

=======
        <!-- link javascrip -->
        <script src="/javascrip/slider.js"></script>
        <script src="/javascrip/content.js"></script>
        <script src="/javascrip/dangtin.js"></script>


        <!-- bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    </div>

</body>
  
>>>>>>> dbb9f6f068d3b222f88b6b5c6d9105547953d532
</html>