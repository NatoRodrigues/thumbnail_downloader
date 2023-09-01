<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baixar Thumbnail de Vídeo do YouTube</title>
  <link rel="stylesheet" href="../resources/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
  <form action="#" method="POST" onsubmit="openImagePreview(); return false;">
    <div class="header-container">
      <img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png?20220706172052" alt="" class="yt">
      <header>Thumbnail downloader</header>
    </div>
    <div class="url-input">
      <span class="title">Cole a URL do vídeo:</span>
      <div class="field">
        <input type="text" placeholder="Ex: https://www.youtube.com/watch?..." name="imgurl" required>
        <span class="bottom-line"></span>
      </div>
    </div>
    <div class="preview-area">
      <div class="video-title"></div>
      <img class="thumbnail" src="" alt="">
      <i class="icon fas fa-cloud-download-alt"></i>
      <span>Cole a URL do vídeo para ver a prévia</span>
    </div>
    <button class="download-btn" type="submit" name="button">Baixar Thumbnail</button>
    <div class="download-warning">
      <i class="fas fa-exclamation-triangle"></i> Certifique-se de clicar com o botão direito na imagem e escolher 'Salvar imagem como...' para baixar a imagem.
    </div>
  </form>
  <footer>
    <p>&copy; <?php echo date('Y'); ?> YT thumbnail Downloader - @NatoRodrigues</p>
  </footer>
  <script src="../view/javascript.js"></script>
  <!-- <script>
    function openImagePreview() {
      var imgUrl = document.getElementsByName("imgurl")[0].value;
      var thumbnailUrl = "https://img.youtube.com/vi/" + imgUrl + "/maxresdefault.jpg";
      var newWindow = window.open(thumbnailUrl);
      newWindow.focus();
    }
  </script> -->
</body>
</html>