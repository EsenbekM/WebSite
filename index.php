<!DOCTYPE html>
  <html lang="ru">
  <head>
    <title><?= $title; red ?></title>
    <link rel="stylesheet" href="css/style.css">
    <style>
   body {
    background: #333; 
    color: #fc0; 
   }
  </style>
  </head>
  <body>
      <$logo = "<img src='путь до картинки'>";/>
    <header class="main-header">
      <h1 class="visually-hidden">My site</h1>
    </header>
    <div class="main-content">
      <main class="content"><?= $content; ?></main>
    </div>
    <footer class="main-footer"> Essa</footer>
  </body>
</html>
