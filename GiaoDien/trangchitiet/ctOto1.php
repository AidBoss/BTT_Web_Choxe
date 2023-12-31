<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Choxe</title>
    <link rel="stylesheet" href="../CSS/Home.css">
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
        <div class="header">
            <div class="header_content">
                <div class="head_top">
                    <a href="/Home.html" alt="Chợ xe">
                        <img src="../img/logo_white.png" alt="" id="logo_header">
                    </a>
                    <a href="/Car-Audit.html">
                        <img src="../img/car_check_white_19_19.png" alt="" id="icons_header">
                        <p>Car Audit</p>
                    </a>
                    <a href="">
                        <img src="../img/support_white_24_24.png" alt="" id="icons_header">
                        <p>Thủ tục mua bán</p>
                    </a>
                    <a href="/tintuc.html" id="childe_news">
                        <img src="../img/news_white_20_16.png" alt="" id="icons_header">
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
                                                    <p><b>Từ 0 đến <span id="demo2"></span></b><b>&nbsp;triệu</b></p>
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
                            <a target="_blank" href="../đăngtin.html" id="dangtin">
                                Đăng Tin <img src="img/add_listing_white_16_18.png" alt="" id="login_dangtin"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- đây là nội dung phần thân  -->
        <div class="container_web">

            <!------------Địa chỉ dẫn---------->

            <div class="address_product">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Chợ xe &gt;</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Hyundai &gt;</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Starex &gt;</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Hyundai Starex Hyundai Starex H-1 2.5 MT 6 chỗ máy dầu 2015,
                                        Số sàn, đã đi 80.000 km</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- --------Thông tin xe -------- -->

            <div class="information_car">
                <div class="container_fluid info_cars_row">
                    <div class="row">
                        <div class="col-sm-9 mb-3 mb-sm-0 cotphai">

                            <!-- slide chứa các hình ảnh của xe -->

                            <?php
                        include('../config/control_pt.php');
                        $get_data=new data();
                        if (isset($_GET['id']))
                         {
                        $select_id=$get_data->select_id('dangtin',$_GET['id']);
                        foreach($select_id as $se_pro)
                        ?>
                            <div class="slider_car">
                                <div class="slider_top">
                                    <div class="control"><i id="prev" onclick="prev()"
                                            class="fa-solid fa-circle-chevron-left" style="font-size: 40px;"></i>
                                    </div>
                                    <div class="img_mid">
                                        <img src="../img/dangtin/ <?php echo $se_pro['anh']?>" alt="" class="img-feature" >
                                    </div>
                                    <div class="control"><i id="next" onclick="next()"
                                            class="fa-solid fa-circle-chevron-right" style="font-size: 40px;"></i>
                                    </div>
                                </div>

                                <!-- danh sách các hình ảnh của xe  -->

                                <div class="list-img">
                                    <div><img src="../img/Oto_1/oto1.jpg" alt=""></div>
                                    <div class="active"><img src="../img/Oto_1/2a.jpg" alt=""></div>
                                    <div><img src="../img/Oto_1/3.jpg" alt=""></div>
                                    <div><img src="../img/Oto_1/4.jpg" alt=""></div>
                                    <div><img src="../img/Oto_1/5.jpg" alt=""></div>
                                    <div><img src="../img/Oto_1/6.jpg" alt=""></div>
                                </div>

                                <!-- chi tiết mô tả xe -->
                                <div class="info_text_car">
                                    <div class="listing_meta">
                                        <span class="location"> <img src="../img/icons_ctsp/lc (1).png" alt="">
                                        <?php echo $se_pro['banxe']?></span>
                                        <span class="location"><img src="../img/icons_ctsp/lc (2).png" alt="">
                                            28/06/2023</span>
                                    </div>
                                    <h4 class="mota_title">
                                        <?php echo $se_pro['hangxe']?> <?php echo $se_pro['dongxe']?> <?php echo $se_pro['socho']?> chỗ  máy<?php echo $se_pro['nhienlieu']?>
                                        <?php echo $se_pro['namsanxuat']?> <?php echo $se_pro['hopso']?> đã đi <?php echo $se_pro['sokmdi']?>km</h4>
                                    <div class="giaca">
                                        <p><?php echo $se_pro['giaban']?> Triệu</p>
                                        <button type="button" class="btn btn-outline-secondary">Lưu Tin <i
                                                class="fa-regular fa-heart"></i></button>
                                    </div>

                                    <!-- mô tả xe   -->
                                    <div class="mota">
                                        <p class="mota_title">Mô tả</p>
                                        <p><?php echo $se_pro['mota']?>
                                        </p>
                                        <p class="mota_title">Chi Tiết</p>
                                    </div>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td><img src="../img/icons_ctsp/1.png" alt=""> Hãng xe</td>
                                                <td><?php echo $se_pro['hangxe']?></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="../img/icons_ctsp/2.png" alt=""> Dòng xe</td>
                                                <td><?php echo $se_pro['dongxe']?></td>
                                            </tr>
                                            <tr>
                                                <td><img src="../img/icons_ctsp/3.png" alt=""> Năm sản xuất
                                                </td>
                                                <td><?php echo $se_pro['namsanxuat']?></td>
                                            </tr>
                                            <tr>
                                                <td><img src="../img/icons_ctsp/4.png" alt=""> Số km đã
                                                    đi</td>
                                                <td><?php echo $se_pro['sokmdi']?></td>
                                            </tr>
                                            <tr>
                                                <td><img src="../img/icons_ctsp/5.png" alt=""> Nhiên liệu
                                                </td>
                                                <td><?php echo $se_pro['nhienlieu']?></td>
                                            </tr>
                                            <tr>
                                                <td><img src="../img/icons_ctsp/6.png" alt=""> Xuất xứ
                                                </td>
                                                <td><?php echo $se_pro['xuatxu']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="../img/icons_ctsp/7.png" alt=""> Kiểu dáng
                                                </td>
                                                <td><?php echo $se_pro['kieudang']?></td>
                                            </tr>
                                            <tr>
                                                <td><img src="../img/icons_ctsp/8.png" alt=""> Số chỗ
                                                </td>
                                                <td><?php echo $se_pro['socho']?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            
                        </div>
                        <div class=" col-sm-3">
                            <div class="card card-body card_ctsp">
                                <h4 class="card-title">Liên Hệ</h4>
                                <p class="card-text"><?php echo $se_pro['tenlienhe']?></p>
                                <p><img src="../img/phone_14_14.png" alt=""><?php echo $se_pro['sdt']?></p>
                                <p><img src="../img/location_12_13.png" alt=""><?php echo $se_pro['tinhtp']?></p>
                                <a href="#" id="bt_right1" class="btn btn-danger"><img
                                        src="../img/phone_white_14_14.png" alt="">
                                        <?php echo $se_pro['sdt']?></a>
                                <br>
                                <a href="#" id="bt_right2" class="btn  btn-light1"><img src="../img/audit_16_16.png"
                                        alt="">
                                    Car
                                    Audit</a>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="more_cars">
                <h5 id="title_h5">Tin Đăng mới nhất</h5>
                <div class="row">
                <?php
                            // include('/config/control_pt.php');
                            $get_data= new data();
                            $select_pro=$get_data->se_all('dangtin');
                            foreach ($select_pro as $se_pro)
                            { ?>
                <div class="col-sm-3" style="margin-top:1%;">
                                <div class="card" id="txt_logo" style="width: 18rem;">
                                    <a target="_blank" href="trangchitiet/ctOto1.php?id=<?php echo $se_pro['id']?>"><img class="card-img-top"
                                            src="../img/dangtin/ <?php echo $se_pro['anh']?>" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <a target="_blank" id="tx_link" href="trangchitiet/ctOto1.html">
                                            <h5 class="card-title"><?php echo $se_pro['tieude']?></h5>
                                        </a>
                                        <p id="tx_link" class="card-text"><?php echo $se_pro['namsanxuat']?>  <?php echo $se_pro['hopso']?>  <?php echo $se_pro['sokmdi']?>km</p>
                                        <h5 id="tx_link" class="card-title"><?php echo $se_pro['giaban']?> Triệu</h5>
                                        <p id="tx_link" class="card-text"><?php echo $se_pro['banxe']?> • 7 giờ trước</p>
                                    </div>      
                                </div>
                            </div>
                            <?php }?>
                </div>
                
                <div class="row">
                    <a href="#" id="next_page">
                        <p>Xem Thêm <img src="../img/chevrons-right_20_20.png" alt=""></p>
                    </a>
                </div>
            </div>
            <div class="more_cars">
                <h5 id="title_h5">Các tin khác cùng người bán</h5>
                <div class="row">
                    <a id="next_page">
                        <p><img src="../img/file_empty.png" alt=""></p>
                        <p style="color: gray; text-align: center;">chưa có tin đăng </p>
                    </a>
                </div>
            </div>
        </div>



        <!-- Phần chân trang web -->
        <div class="footer">
            <div style="height:238px; width:400px;" class="contenfooter">
                <div>
                    <img src="../img/logo_white_117_32.png" alt=""
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
                    <img src="../img/logo-bct.png" alt="" style="height:45px;width:122px; margin-top:50px;"></img>
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
                    <a href=""><img src="../img/hotline2.png"></a>
                    <div class="footer-content-right-1_1">
                        <a href=""><b>Hotline: 091.144.2883</b></a>
                    </div>
                </div>
                <div class="footer-content-right-2">
                    <a href=""><img src="../img/danhchomoigioi.png"></a>
                    <div class="footer-content-right-2_1">
                        <a href=""><b>Dành cho salon, Môi giới</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- link javascrip -->
    <script src="/javascrip/slider.js"></script>
    <script src="/javascrip/content.js"></script>


    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>