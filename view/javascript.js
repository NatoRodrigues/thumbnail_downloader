const urlField = document.querySelector(".field input"),
    previewArea = document.querySelector(".preview-area"),
    imgTag = previewArea.querySelector(".thumbnail"),
    hiddenInput = document.querySelector(".hidden-input"),
    button = document.querySelector(".download-btn"),
    videoTitle = document.querySelector(".video-title");

urlField.onkeyup = () => {
  const vidUrl = urlField.value;
  let imgUrl = urlField.value;
  previewArea.classList.add("active");
  button.style.pointerEvents = "auto";

  if (vidUrl.trim() !== '') {
    fetch(`https://noembed.com/embed?url=${encodeURIComponent(vidUrl)}`)
      .then(res => res.json())
      .then(data => {
        const title = data.title;
        videoTitle.textContent = title; // Define o título no elemento HTML
      })
      .catch(error => {
        console.error('Erro:', error);
        videoTitle.tesxtContent = 'Erro ao obter o título do vídeo';
      });
  } else {
    videoTitle.textContent = '';
  }
  
  if (imgUrl.indexOf("https://www.youtube.com/watch?v=") != -1) {
    let vidId = imgUrl.split('v=')[1].substring(0, 11);
    let ytImgUrl = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
    imgTag.src = ytImgUrl;
  } else if (imgUrl.indexOf("https://youtu.be/") != -1) {
    let vidId = imgUrl.split('be/')[1].substring(0, 11);
    let ytImgUrl = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
    imgTag.src = ytImgUrl;
  } else if (imgUrl.match(/\.(jpe?g|png|gif|bmp|webp)$/i)) {
    imgTag.src = imgUrl;
  } else {
    imgTag.src = "";
    button.style.pointerEvents = "none";
    previewArea.classList.remove("active");
  }
  hiddenInput.value = imgTag.src;
}

// Adiciona o código para abrir a imagem em uma nova aba
button.addEventListener("click", function() {
  if (imgTag.src) {
    var newWindow = window.open(imgTag.src, "_blank", "width=600,height=400");
    newWindow.focus();
  } else {
    alert("Nenhuma imagem para exibir.");
  }
});
