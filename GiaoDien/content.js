function toggleContent() {
    var content = document.getElementById("content");
    var button = document.getElementById("toggleButton");

    if (content.style.display === "none") {
      content.style.display = "block" ;
      button.textContent = "Thu gọn ";
    } else {
      content.style.display = "none";
      button.textContent = "Xem thêm ";
    }
  }