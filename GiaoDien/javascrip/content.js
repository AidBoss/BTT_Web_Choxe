const show = document.querySelector('#bt_show')
const btshow = document.querySelector('#btu_show')
let check = true;
let eventclickshow = function () {
  if (check) {
    btshow.style.display = 'block';
    show.style.display = 'block';
    btshow.innerHTML = " Ẩn đi &uarr;";
    btshow.style.fontSize = '15px';
    register.style.display = 'block';
    btchange.style.display = 'block';
    login.style.display = 'none';
    btchange.innerHTML = 'Đăng Nhập'
    check = false;
  } else {
    btshow.innerHTML = " Xem Thêm &darr;"
    show.style.display = 'none';
    register.style.display = 'none';
    login.style.display = 'block';
    btchange.innerHTML = 'Đăng Ký'
    check = true;
  }
}
const register = document.querySelector('.register_modal')
const btchange = document.querySelector('#change_login')
const login = document.querySelector('.login_modal')

let sonam = document.querySelector(".sonam")
let namsx = document.querySelector("#namsx")
namsx.innerHTML = sonam.value;
sonam.oninput = function () {
  namsx.innerHTML = this.value;
}
let slider2 = document.getElementById("myRange2");
let output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;
slider2.oninput = function () {
  output2.innerHTML = this.value;
}
