<!DOCTYPE html>
  <html lang="ru">
  <head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="main-header">
      <h1 class="visually-hidden">Дневник погоды</h1>
    </header>
    <div class="main-content">
      <main class="content"><?= $content; ?></main>
    </div>
    <footer class="main-footer"> Дневник наблюдения за погодой. Все права защищены</footer>
  </body>
</html>
<div class="content__main-col">
  <h2 class="visually-hidden">Последние записи</h2>
  <a class="button" href="/gif/add">Добавить новую</a>
  <ul class="items-list"> 
    <?php foreach ($items as $item): ?> 
      <?=renderTemplate('inc/item.php', ['item' => $item]);?> 
    <?php endforeach; ?> 
  </ul> 
</div>
<li class="list-item"> 
  <div class="picture"> 
    <img src="uploads/preview_<?=$item['path'];?>"> 
  </div> 
  <h3 class="desc-title"> 
    <a href="/view?id=<?=$item['id'];?>"><?=$item['title'];?></a> 
  </h3> 
  <div class="desc-data"> 
    <span class="temp"><?=$item['temp'];?></span> 
  </div> 
</li>
<?php 
// двумерный массив со списком записей 
$items_list = []; 
 
// HTML код главной страницы 
$page_content = renderTemplate('main.php', ['items' => $items_list]); 
 
// окончательный HTML код 
$layout_content = renderTemplate('layout.php', 
['content' => $page_content, 'title' => 'Дневник наблюдений за погодой']); 

// вывод на экран итоговой страницы 
print($layout_content);