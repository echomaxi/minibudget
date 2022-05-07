<?php require_once('../../../private/initialize.php'); ?>
<!doctype html>
<html lang="ru">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Новая Основная Категория</title>
</head>

<body>
  <div class="container mx-auto px-4">
    <h1>Запись успешно добавлена!</h1>
    <a href="index.php"><button class="border-0 px-2 py-1 bg-slate-500 text-white hover:bg-slate-700 rounded cursor-pointer">Обратно</button></a>
  </div>

  <?php
    var_dump($prime_id);
    exit;
    $main_cat_name = $_POST['main_category'] ?? '';
    $prime_id = $_POST['prime_id'] ?? '';
    insertMainCategory($main_cat_name, $prime_id);
  ?>

</body>

</html>