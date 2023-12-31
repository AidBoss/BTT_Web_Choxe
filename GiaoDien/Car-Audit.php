<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="./CSS/Car-Audit.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="javascrip/content.js"></script>
    <script src="javascrip/car_audit_lc8.js"></script>
    <script src="javascrip/car_audit_lc9.js"></script>
    <script src="javascrip/car_audit_lc10.js"></script>
    <script src="javascrip/car_audit_lc2.js"></script>
    <script src="javascrip/car_audit_lc7.js"></script>
</head>

<body>
    <div class="box">
        <div class="header">
            <div class="header_content">
                <div class="head_top">
                    <a href="Home.html" alt="Chợ xe">
                        <img src="img/logo_white.png" alt="" id="logo_header">
                    </a>
                    <a href="Car-Audit.html">
                        <img src="img/car_check_white_19_19.png" alt="" id="icons_header">
                        <p>Car Audit</p>
                    </a>
                    <a href="">
                        <i class="fa-solid fa-square-phone"></i>
                        <p>Thủ tục mua bán</p>
                    </a>
                    <a href="tintuc.html" id="childe_news">
                        <i class="fa-solid fa-newspaper"></i>
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
                            <a target="_blank" href="đăngtin.html" id="dangtin">
                                Đăng Tin <img src="img/add_listing_white_16_18.png" alt="" id="login_dangtin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="luaChon1">
            <div class="can_giua">
                <div class="lc1_container">
                    <div class="word">
                        <div class="boldWord">
                            TRÁNH MUA NHẦM XE ĐÂM ĐỤNG, NGẬP NƯỚC
                        </div>
                        <div class="dichVu">
                            <div class="down_dichVu">
                                <b>Dịch vụ Kiểm tra xe ô tô cũ Car Audit của Chợ Xe</b>
                                giúp bạn hiểu rõ hơn về tình trạng chiếc xe bạn định mua
                            </div>
                            <div class="checkList">
                                <div class="list">
                                    <img src="img/check_pink_12_12.png"> Thông tin đâm đụng, ngập nước
                                </div>
                                <div class="list">
                                    <img src="img/check_pink_12_12.png"> Tình trạng chức năng hoạt động
                                </div>
                                <div class="list">
                                    <img src="img/check_pink_12_12.png"> Mức giá tham khảo cho xe
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carAcc_img">
                        <div class="inside_carAcc">
                            <img src="img/car_accident.png" class="carAcc_size">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="luaChon2">
            <div class="can_giua">
                <div class="lc2_container">
                    <div class="small_box">
                        <div class="audit_lagi">
                            <div class="title">CAR AUDIT LÀ GÌ?</div>
                            <div class="audit_item">
                                <div class="audit_icon">
                                    <img src="img/car_check_white.png">
                                </div>
                                <div class="lc2_content">Là dịch vụ kiểm tra và thẩm định ô tô cũ của Chợ Xe</div>
                            </div>
                            <div class="audit_item">
                                <div class="audit_icon">
                                    <img src="img/medal.png">
                                </div>
                                <div class="lc2_content">Được thực hiện bởi chuyên gia kiểm tra xe nhiều năm kinh nghiệm
                                </div>
                            </div>
                            <div class="audit_item">
                                <div class="audit_icon">
                                    <img src="img/car_commitment.png">
                                </div>
                                <div class="lc2_content">Giúp thông tin tình trạng xe rõ ràng và minh bạch</div>
                            </div>
                        </div>
                        <div class="register">
                            <div class="smallbox_re">
                                <div class="inside_re">
                                    <form class="form_re">
                                        <div class="w">Đăng ký kiểm tra xe</div>
                                        <div class="field">
                                            <div class="control">
                                                <div class="inline_input">
                                                    <input id="customer_name" name="customer_name" class="input"
                                                        type="text"
                                                        oninvalid="this.setCustomValidity('Vui lòng nhập họ tên')"
                                                        oninput="this.setCustomValidity('')" required>
                                                    <label class="required" for="customer_name">
                                                        Họ và tên
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <div class="inline_input">
                                                    <input id="customer_name" name="customer_phone" class="input"
                                                        type="text"
                                                        oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại')"
                                                        oninput="this.setCustomValidity('')" required>
                                                    <label class="required" for="customer_phone">
                                                        Số điện thoại
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <div class="select">
                                                    <div onclick="toggleDropdown()" class="dropdown">
                                                        <div class="option_select">

                                                        </div>
                                                        <label class="required">
                                                            Khu vực xem xe
                                                        </label>
                                                        <input type="text" name="province_id" value class="hidden_input"
                                                            oninvalid="this.setCustomValidity('Vui lòng chọn tỉnh thành phố')"
                                                            oninput="this.setCustomValidity('')" required>
                                                        <input type="hidden" name="district_id">
                                                    </div>
                                                    <div id="dropdown-content" class="dropdown-content">
                                                        <div class="select_dropDown">
                                                            <div class="card">
                                                                <div class="card_content">
                                                                    <div class="select_province">
                                                                        <div class="control select_dropDown">
                                                                            <div class="city_input">
                                                                                <div class="city_select">
                                                                                </div>
                                                                                <label>Tỉnh/Thành phố</label>
                                                                            </div>
                                                                            <div class="district_input">
                                                                                <div class="city_select">
                                                                                </div>
                                                                                <label>Quận/Huyện</label>
                                                                            </div>
                                                                            <div class="field">
                                                                                <div class="column_field">
                                                                                    <button type="button"
                                                                                        class="btn_datLai">
                                                                                        Đặt lại
                                                                                    </button>
                                                                                </div>
                                                                                <div class="column_field">
                                                                                    <button type="button"
                                                                                        class="btn_apDung">
                                                                                        Áp dụng
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <div class="inline_input">
                                                    <input id="car_model" name="car_model" class="input" type="text"
                                                        oninvalid="this.setCustomValidity('Vui lòng nhập dòng xe')"
                                                        oninput="this.setCustomValidity('')" required>
                                                    <label class="required" for="customer_name">
                                                        Tên dòng xe cần kiểm tra
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <div class="inline_input">
                                                    <label class="required-clone" for="customer_date">
                                                        Ngày dự kiến xem xe
                                                    </label>
                                                    <input id="customer_date" name="customer_date" class="input"
                                                        type="date"
                                                        oninvalid="this.setCustomValidity('Vui lòng chọn ngày')"
                                                        oninput="this.setCustomValidity('')" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <div class=" inline_input-clone">
                                                    <label1 class="required-clone2">
                                                        Ghi chú
                                                    </label1>
                                                    <textarea class="textarea" name="note" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <button type="submit" class="button">
                                                    <div class="req">Gửi yêu cầu</div>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="luaChon3">
            <div class="lc3_container">
                <div class="car_intro">CAR AUDIT GIÚP NGƯỜI MUA</div>
                <div class="intro_box">
                    <div class="sua_chua">
                        <div class="boldSub">
                            Không lo mua phải xe đã mông má, đại tu
                        </div>
                        <div class="sub">
                            Car Audit sẽ giúp bạn biết được tình trạng xe
                        </div>
                        <div class="sub_box">
                            <div>Thông tin đâm đụng, ngập nước</div>
                            <div>Tình trạng chức năng hoạt động</div>
                            <div>Mức giá tham khảo cho xe</div>
                        </div>
                    </div>
                    <div class="intro_img">
                        <div class="intro_img_size">
                            <img src="img/car_audit1_pc.png" class="img_intro_size">
                        </div>
                    </div>
                </div>
                <div class="intro_box">
                    <div class="intro_img">
                        <div class="intro_img_size">
                            <img src="img/car_audit2_pc.png" class="img_intro_size">
                        </div>
                    </div>
                    <div class="sua_chua-clone">
                        <div class="boldSub">
                            Đánh giá đúng giá trị thực tế của chiếc xe
                        </div>
                        <div class="sub">
                            Sau khi kiểm tra, bạn sẽ được tư vấn về giá trị của chiếc xe
                        </div>
                        <div class="sub_box">
                            <div>Mức giá hợp lý cho chiếc xe đó</div>
                            <div>Các chi phí có thể phát sinh sau khi mua</div>
                        </div>
                    </div>
                </div>
                <div class="intro_box">
                    <div class="sua_chua">
                        <div class="boldSub">
                            An tâm đưa ra quyết định mua xe
                        </div>
                        <div class="sub">
                            Car Audit giúp bạn giải quyết những nỗi lo khi mua xe cũ
                        </div>
                        <div class="sub_box">
                            <div>An tâm về chất lượng xe</div>
                            <div>Chi phí hợp lí</div>
                            <div>không phát sinh lỗi</div>
                        </div>
                    </div>
                    <div class="intro_img">
                        <div class="intro_img_size">
                            <img src="img/car_audit3_pc.png" class="img_intro_size">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="luaChon4">
            <div class="lc4_container">
                <div class="feature_box">
                    <div class="car_feature">
                        <img src="img/quy_trinh_check_xe.png" class="img_feature">
                    </div>
                    <div class="feature_info">
                        <div class="feature_boldSub">
                            QUY TRÌNH CHECK XE Ô TÔ CŨ VỚI 8 HẠNG MỤC
                        </div>
                        <div class="feature_sub">
                            Và 136 tiêu chí giúp thông tin xe trở nên minh bạch, rõ ràng, đáng tin cậy
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="luaChon5">
            <div class="lc5_container">
                <div class="price_sub">BẢNG GIÁ DỊCH VỤ KIỂM TRA Ô TÔ CŨ CAR AUDIT</div>
                <div class="price_select">
                    <div class="mid_car">
                        <div class="price_card">
                            <div class="price_card_content">
                                <div class="sale">
                                    <img src="img/price_tag.png" class="sale_img">
                                </div>
                                <div class="sale_sub">
                                    Các dòng xe phổ thông
                                </div>
                                <div class="sale_des">
                                    Các dòng xe phổ thông Nhật Bản, Hàn Quốc, Mỹ, Đài Loan, Trung Quốc có tầm giá dưới
                                    1,2 tỷ (tính theo giá xe cũ).
                                </div>
                                <div class="sale_price">
                                    <span class="first_price">1.900.000 VND</span>
                                    <span class="second_price">2.400.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rich_car">
                        <div class="price_card">
                            <div class="price_card_content">
                                <div class="sale">
                                    <img src="img/white_star_circle.png" class="sale_img">
                                </div>
                                <div class="sale_sub">
                                    Các dòng xe Đức, xe sang
                                </div>
                                <div class="sale_des">
                                    Các dòng xe BMW, Mercedes, Volkswagen, Lexus, Acura, Infinity, Mini Cooper, … Hoặc
                                    các xe có giá từ 1,2 tỷ trở lên. </div>
                                <div class="sale_price">
                                    <span class="first_price">2.990.000 VND</span>
                                    <span class="second_price">3.490.000 VND</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="warning">
                    <p>
                        <b>Lưu ý:</b>
                    </p>
                    <span class="important_note">
                        Áp dụng cho các quận trung tâm TP. HCM, các quận vùng ven hoặc tỉnh sẽ tính thêm chi phí di
                        chuyển.
                        <a href="#">Tham khảo phí di chuyển</a>.
                    </span>
                    <span class="important_note">
                        Mức giá áp dụng ngay cả khi giao dịch mua bán xe giữa người bán và người mua không thành công.
                    </span>
                    <span class="important_note">
                        Đối với những xe cần nâng Khung gầm để kiểm tra chi tiết, cần thực hiện tại các Garage đối tác
                        của Chợ Xe sẽ phụ phí 200.000đ.
                    </span>
                </div>
            </div>
        </div>
        <div class="luaChon6">
            <div class="lc6_container">
                <div class="check_step">KIỂM TRA XE CÙNG CAR AUDIT VỚI CHỈ 3 BƯỚC</div>
                <div class="three_box">
                    <div class="box1">
                        <div class="inside_box1">
                            <div class="box_card">
                                <div class="box_card_img">
                                    <i class="box_card_icon1"></i>
                                </div>
                                <div class="bottom_content">
                                    <div class="audit_sub">
                                        BƯỚC 1: ĐĂNG KÝ THÔNG TIN
                                    </div>
                                    <div class="c1">
                                        <b>Cách 1:</b>
                                        Điền form đăng ký tại website
                                    </div>
                                    <div class="c1">
                                        <b>Cách 2:</b>
                                        Liên hệ với Hotline: 0936.66.11.60
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box2">
                        <div class="inside_box1">
                            <div class="box_card">
                                <div class="box_card_img">
                                    <i class="box_card_icon2"></i>
                                </div>
                                <div class="bottom_content-clone">
                                    <div class="audit_sub">
                                        BƯỚC 2: LÊN LỊCH HẸN
                                    </div>
                                    <div class="c2">
                                        Trung tâm CSKH của Chợ Xe sẽ liên hệ với bạn để đặt lịch hẹn kiểm tra xe với
                                        Chuyên viên Car Audit
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box2">
                        <div class="inside_box1">
                            <div class="box_card">
                                <div class="box_card_img">
                                    <i class="box_card_icon3"></i>
                                </div>
                                <div class="bottom_content-clone">
                                    <div class="audit_sub">
                                        BƯỚC 3: TIẾN HÀNH KIỂM TRA XE
                                    </div>
                                    <div class="c2">
                                        Bạn cùng với Chuyên viên Car Audit sẽ gặp nhau theo thời gian và địa điểm đã hẹn
                                        để tiến hành kiểm tra xe.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="luaChon7">
            <div class="lc7_container">
                <form class="form_re2">
                    <div class="form_title">Đăng ký kiểm tra xe</div>
                    <div class="nam_ngang">
                        <div class="column1">
                            <div class="control">
                                <div class="inline_input">
                                    <input id="customer_name" name="customer_name" class="input" type="text"
                                        oninvalid="this.setCustomValidity('Vui lòng nhập họ tên')"
                                        oninput="this.setCustomValidity('')" required>
                                    <label class="required" for="customer_name">
                                        Họ và tên
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="column1">
                            <div class="control">
                                <div class="inline_input">
                                    <input id="customer_name" name="customer_phone" class="input" type="text"
                                        oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại')"
                                        oninput="this.setCustomValidity('')" required>
                                    <label class="required" for="customer_phone">
                                        Số điện thoại
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="column1">
                            <div class="control">
                                <div class="select">
                                    <div onclick="toggleDrop()" class="dropdown">
                                        <div class="option_select">

                                        </div>
                                        <label class="required">
                                            Khu vực xem xe
                                        </label>
                                        <input type="text" name="province_id" value class="hidden_input"
                                            oninvalid="this.setCustomValidity('Vui lòng chọn tỉnh thành phố')"
                                            oninput="this.setCustomValidity('')" required>
                                        <input type="hidden" name="district_id">
                                    </div>
                                    <div id="dropdown-cont" class="dropdown-cont">
                                        <div class="select_dropDown">
                                            <div class="card">
                                                <div class="card_content">
                                                    <div class="select_province">
                                                        <div class="control select_dropDown">
                                                            <div class="city_input">
                                                                <div class="city_select">
                                                                </div>
                                                                <label>Tỉnh/Thành phố</label>
                                                            </div>
                                                            <div class="district_input">
                                                                <div class="city_select">
                                                                </div>
                                                                <label>Quận/Huyện</label>
                                                            </div>
                                                            <div class="field">
                                                                <div class="column_field">
                                                                    <button type="button" class="btn_datLai">
                                                                        Đặt lại
                                                                    </button>
                                                                </div>
                                                                <div class="column_field">
                                                                    <button type="button" class="btn_apDung">
                                                                        Áp dụng
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column1">
                            <div class="control">
                                <div class="inline_input">
                                    <input id="car_model" name="car_model" class="input" type="text"
                                        oninvalid="this.setCustomValidity('Vui lòng nhập dòng xe')"
                                        oninput="this.setCustomValidity('')" required>
                                    <label class="required" for="customer_name">
                                        Tên dòng xe cần kiểm tra
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="column1">
                            <div class="control">
                                <div class=" inline_input-clone">
                                    <label1 class="required-clone2">
                                        Ghi chú
                                    </label1>
                                    <textarea class="textarea" name="note" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="column1">
                            <div class="control">
                                <div class="inline_input">
                                    <label class="required-clone" for="customer_date">
                                        Ngày dự kiến xem xe
                                    </label>
                                    <input id="customer_date" name="customer_date" class="input" type="date"
                                        oninvalid="this.setCustomValidity('Vui lòng chọn ngày')"
                                        oninput="this.setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="control-clone">
                                <button type="submit" class="button-clone">
                                    <div class="req-clone">Gửi yêu cầu</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="luaChon8">
            <div class="lc8_container">
                <div class="car_title">HÌNH ẢNH KIỂM TRA XE</div>
                <div class="slideshow-container">
                    <div class="displayAble">
                        <img src="img/1.png">
                    </div>
                    <div class="slide">
                        <img src="img/1.png" alt="Slide 1">
                    </div>
                    <div class="slide">
                        <img src="img/2.png" alt="Slide 2">
                    </div>
                    <div class="slide">
                        <img src="img/3.png" alt="Slide 3">
                    </div>
                    <div class="slide">
                        <img src="img/4.png" alt="Slide 4">
                    </div>
                    <div class="slide">
                        <img src="img/5.png" alt="Slide 5">
                    </div>
                    <span class="prev-btn" onclick="changeSlide(-1)">&#8249;</span>
                    <span class="next-btn" onclick="changeSlide(1)">&#8250;</span>
                    <div class="dots-container">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        <span class="dot" onclick="currentSlide(5)"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="luaChon9">
            <div class="lc9_container">
                <div class="client_rate">ĐÁNH GIÁ CỦA KHÁCH HÀNG VỀ CAR AUDIT</div>
                <div class="slideshow-box">
                    <div class="quote-slideAble">
                        <div class="quote">
                            <div class="quote_card">
                                <div class="quote_content">
                                    <div class="header_quote">
                                        <img src="img/client.png" class="quote_img">
                                    </div>
                                    <div class="quote_name">Anh Thanh Phạm</div>
                                    <div class="brand_quote">Kiểm tra Mitsubishi Outlander 2019</div>
                                    <div class="quote_cmd">Vì chưa từng có kinh nghiệm mua xe cũ, nên nỗi lo lớn nhất
                                        của tôi là mua nhầm chiếc xe đã đâm đụng, ngập nước và được tu sửa lại. Sau khi
                                        được các anh chuyên viên bên Car Audit kiểm tra mình rất an tâm, các anh giải
                                        thích rõ ràng, dễ hiểu về tình trạng xe hiện tại và đặc biệt là rất nhiệt tình
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-slide">
                        <div class="quote">
                            <div class="quote_card">
                                <div class="quote_content">
                                    <div class="header_quote">
                                        <img src="img/client.png" class="quote_img">
                                    </div>
                                    <div class="quote_name">Anh Thanh Phạm</div>
                                    <div class="brand_quote">Kiểm tra Mitsubishi Outlander 2019</div>
                                    <div class="quote_cmd">Vì chưa từng có kinh nghiệm mua xe cũ, nên nỗi lo lớn nhất
                                        của tôi là mua nhầm chiếc xe đã đâm đụng, ngập nước và được tu sửa lại. Sau khi
                                        được các anh chuyên viên bên Car Audit kiểm tra mình rất an tâm, các anh giải
                                        thích rõ ràng, dễ hiểu về tình trạng xe hiện tại và đặc biệt là rất nhiệt tình
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-slide">
                        <div class="quote">
                            <div class="quote_card">
                                <div class="quote_content">
                                    <div class="header_quote">
                                        <img src="img/client.png" class="quote_img">
                                    </div>
                                    <div class="quote_name">Anh Thanh Phạm</div>
                                    <div class="brand_quote">Kiểm tra Mitsubishi Outlander 2019</div>
                                    <div class="quote_cmd">Vì chưa từng có kinh nghiệm mua xe cũ, nên nỗi lo lớn nhất
                                        của tôi là mua nhầm chiếc xe đã đâm đụng, ngập nước và được tu sửa lại. Sau khi
                                        được các anh chuyên viên bên Car Audit kiểm tra mình rất an tâm, các anh giải
                                        thích rõ ràng, dễ hiểu về tình trạng xe hiện tại và đặc biệt là rất nhiệt tình
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="then" onclick="nextSlide(-1)">
                        <i>&#8249;</i>
                    </span>
                    <span class="now" onclick="nextSlide(1)">
                        <i>&#8250;</i>
                    </span>
                </div>
                <div class="daus">
                    <span class="dau" onclick="prevSlide(1)"></span>
                    <span class="dau" onclick="prevSlide(2)"></span>
                </div>
            </div>
        </div>


        <div class="luaChon10">
            <div class="lc10_container">
                <div class="title_ask">
                    CÂU HỎI THƯỜNG GẶP
                </div>
                <div class="list_questions">
                    <div class="question">
                        <div class="card_question question_img">
                            <div class="question_title" onclick="toggleAnswerBox(1)">
                                <img src="img/plus_circle_red_18_18.png">
                                Car Audit của Chợ Xe có kiểm tra được xe đâm đụng, thủy kích không?
                            </div>
                            <div class="answer">
                                <img src="img/minus_circle_18_18.png" class="image_a">
                                Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm
                                đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm
                                không như trạng thái ban đầu được.
                            </div>
                        </div>
                    </div>
                    <div class="question">
                        <div class="card_question">
                            <div class="question_title" onclick="toggleAnswerBox(2)">
                                <img src="img/plus_circle_red_18_18.png">
                                Gói dịch vụ xuống tận nơi kiểm tra hay tôi mang xe đến Garage của Chợ Xe?
                            </div>
                            <div class="answer">
                                <img src="img/minus_circle_18_18.png" class="image_a">
                                Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm
                                đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm
                                không như trạng thái ban đầu được.
                            </div>
                        </div>
                    </div>
                    <div class="question">
                        <div class="card_question">
                            <div class="question_title" onclick="toggleAnswerBox(3)">
                                <img src="img/plus_circle_red_18_18.png">
                                Thời gian kiểm tra 1 chiếc ô tô cũ mất khoảng bao lâu?
                            </div>
                            <div class="answer">
                                <img src="img/minus_circle_18_18.png" class="image_a">
                                Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm
                                đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm
                                không như trạng thái ban đầu được.
                            </div>
                        </div>
                    </div>
                    <div class="question">
                        <div class="card_question">
                            <div class="question_title" onclick="toggleAnswerBox(4)">
                                <img src="img/plus_circle_red_18_18.png">
                                Tôi cần đặt lịch hẹn kiểm tra xe trước bao lâu?
                            </div>
                            <div class="answer">
                                <img src="img/minus_circle_18_18.png" class="image_a">
                                Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm
                                đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm
                                không như trạng thái ban đầu được.
                            </div>
                        </div>
                    </div>
                    <div class="question">
                        <div class="card_question">
                            <div class="question_title" onclick="toggleAnswerBox(5)">
                                <img src="img/plus_circle_red_18_18.png">
                                Nếu tôi không mua được xe thì có mất phí kiểm tra không?
                            </div>
                            <div class="answer">
                                <img src="img/minus_circle_18_18.png" class="image_a">
                                Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm
                                đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm
                                không như trạng thái ban đầu được.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- phần chân trang  -->
        <div class="footer">
            <div class="footer_container">
                <div class="logo_footer"></div>
                <div class="footer_wrapper">
                    <div class="footer_content">
                        <div>
                            ©2022 by ChoXe.net. All rights reserved. Công Ty Cổ Phần Ô Tô Xuyên Việt; Mã số thuế:
                            0304013473
                        </div>
                        <div class="content_up">
                            Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TPHCM
                        </div>
                        <div class="footer_contact">
                            <a href="tel:091.144.2883" class="phone">091.144.2883</a>
                            <a href="mailto:cskh@choxe.vn" class="email">cskh@choxe.vn</a>
                        </div>
                        <div class="footer_img">
                            <img src="img/logo-bct.png">
                        </div>
                    </div>
                    <div class="footer_link">
                        <a href="#">Giới thiệu</a>
                        <a href="#" class="ma">Quy chế hoạt động</a>
                        <a href="#" class="ma">Báo giá</a>
                    </div>
                    <div class="footer_index">
                        <a href="#" class="btn_hotline">
                            Hotline: 091.144.2883
                        </a>
                        <a href="#" class="btn_agant">
                            Dành cho Salon, Môi giới
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>