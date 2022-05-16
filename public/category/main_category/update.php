<?php require_once('../../../private/initialize.php'); ?>
<?php
$id = $_GET['id'];
$main_item = [];
$main_item['main_cat_id'] = $id;
$main_item['main_cat_name'] = $_POST['item_name'];
// var_dump($prime_item);
// exit;
updateMainCategory($main_item);
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Админка</title>
</head>

<body class="bg-slate-300">
    <header>
        <a href="<?php echo '../../index.php' ?>">Панель управления</a>
    </header>

    <nav class="mt-2 ml-2">
        <div class="bg-slate-500 text-white">
            <ul class="flex flex-col">
                <li>
                    <a href="<?php echo '../../index.php' ?>">
                        Главная
                    </a>
                </li>
                <li>
                    <a href="<?php echo 'index.php' ?>">
                        Основные Категории
                    </a>
                </li>
                <li>
                    <a href="<?php echo '../main_category/index.php' ?>">
                        Общие Категории
                    </a>
                </li>
                <li>
                    <a href="<?php echo '../sub_category/index.php' ?>">
                        Подкатегории
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container mx-auto px-4">
            <h1 class="mt-4">Запись успешно изменена</h1>
            <a href="index.php"><button
                    class="border-0 px-2 py-1 bg-slate-500 text-white hover:bg-slate-700 rounded cursor-pointer mt-2">Обратно</button></a>
        </div>
    </main>

</body>

</html>