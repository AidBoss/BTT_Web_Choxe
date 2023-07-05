
// const formOpenBtn = document.querySelector("#form-open"),
//   home = document.querySelector(".home"),
//   formContainer = document.querySelector(".form_container"),
//   formCloseBtn = document.querySelector(".form_close"),
//   signupBtn = document.querySelector("#signup"),
//   loginBtn = document.querySelector("#login"),
//   pwShowHide = document.querySelectorAll(".pw_hide");

// formOpenBtn.addEventListener("click", () => home.classList.add("show"));
// formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

// pwShowHide.forEach((icon) => {
//   icon.addEventListener("click", () => {
//     let getPwInput = icon.parentElement.querySelector("input");
//     if (getPwInput.type === "password") {
//       getPwInput.type = "text";
//       icon.classList.replace("uil-eye-slash", "uil-eye");
//     } else {
//       getPwInput.type = "password";
//       icon.classList.replace("uil-eye", "uil-eye-slash");
//     }
//   });
// });

// signupBtn.addEventListener("click", (e) => {
//   e.preventDefault();
//   formContainer.classList.add("active");
// });
// loginBtn.addEventListener("click", (e) => {
//   e.preventDefault();
//   formContainer.classList.remove("active");
// });


// const exampleModal = document.getElementById('exampleModal')
// if (exampleModal) {
//   exampleModal.addEventListener('show.bs.modal', event => {
//     // Button that triggered the modal
//     const button = event.relatedTarget
//     // Extract info from data-bs-* attributes
//     const recipient = button.getAttribute('data-bs-whatever')
//     // If necessary, you could initiate an Ajax request here
//     // and then do the updating in a callback.

//     // Update the modal's content.
//     const modalTitle = exampleModal.querySelector('.modal-title')
//     const modalBodyInput = exampleModal.querySelector('.modal-body input')

//     modalTitle.textContent = `New message to ${recipient}`
//     modalBodyInput.value = recipient
//   })
// }
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



