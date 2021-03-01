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
     <img src="https://www.biletik.aero/upload/medialibrary/807/807f262b60da392f1e09aa6d33f20a9b.png" alt="Picture" width="500" height="600">
    <header class="main-header">
      <h1 class="visually-hidden">My site</h1>
    </header>
    <div class="main-content">
      <main class="content"><?= $content; ?></main>
    </div>
    <footer class="main-footer"> Essa</footer>
  </body>
</html>
