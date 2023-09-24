let ctShow = document.getElementById("ct_login_show");
let ctHide = document.getElementById("ct_login_hide");
let check = true;
let eventHide = function(){
   if(check){
      ctHide.style.display = 'block';
      ctShow.style.display = 'none'
      check = false;
   }else{
      check = true;
   }
}