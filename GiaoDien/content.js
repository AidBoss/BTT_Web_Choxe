function toggleContent() {
    var content = document.getElementById("content");
    var image = document.createElement("img");
    image.src = "img/chevrons-down_20_20.png";
    image.classList.add("angle-down");
    var button = document.getElementById("toggleButton");
    
    if (content.classList.contains("collapsed")) {
      content.classList.remove("collapsed");
      content.classList.add("expanded");
      content.appendChild(image)
      button.textContent = "Thu gọn ";
    } else {
      content.classList.remove("expanded");
      content.classList.add("collapsed");
      content.appendChild(image)
      button.textContent = "Xem thêm ";
    }
  }