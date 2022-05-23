<?php require_once('../../../private/initialize.php'); ?>
<?php
$sub_id = $_GET['id'];
$sub_item = getSubCategory_by_id($sub_id);
$main_cat_id = $sub_item['main_cat_id'];
$main_cat_item = getMainCategory_by_id($main_cat_id);
?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Подкатегории</title>
</head>

<body class="bg-slate-500">
    <header class="bg-slate-500 text-white px-4 py-2 border-4 border-white mx-1">
        <a href="<?php echo '../../index.php' ?>">Панель управления</a>
    </header>
    <div class="flex px-1">
        <nav class="mr-1 w-1/6">
            <div class="bg-slate-500 text-white">
                <ul class="flex flex-col border-4 border-white px-4 py-2 my-1">
                    <li>
                        <a href="<?php echo '../../index.php' ?>" class="hover:text-sky-400">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo 'index.php' ?>" class="hover:text-sky-400">
                            Основные Категории
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo '../main_category/index.php' ?>" class="hover:text-sky-400">
                            Общие Категории
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo '../sub_category/index.php' ?>"
                            class="underline decoration-sky-500 decoration-2 hover:text-sky-400">
                            Подкатегории
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main сlass="w-5/6">
            <div class="flex flex-col justify-center px-4 py-2 my-1 border-4 border-white bg-slate-300">
                <h2 class="text-2xl mb-4">Изменение записи</h2>
                <a href="index.php"><button
                        class="border-0 px-2 py-1 bg-slate-500 text-white hover:bg-slate-700 rounded cursor-pointer mt-2">Обратно</button></a>
                <form action="<?php echo 'update.php?id=' . $sub_id ?>" method="post" class="my-4">
                    <label for="sub_item_name">Имя подкатегории</label><br>
                    <input type="text" name="sub_item_name" id="sub_item_name"
                        value="<?php echo $sub_item['sub_cat_name'] ?>"><br>
                    <label for="main_item_name" class="mt-2">Основная Категория</label><br>
                    <select name="main_item_name" id="main_item_name" class="my-2">
                        <option value="<?php echo $main_cat_item['main_cat_id']; ?>">
                            <?php echo $main_cat_item['main_cat_name']; ?>
                        </option>
                    </select>
                    <input type="submit" value="Изменить"
                        class="bg-cyan-900 hover:bg-cyan-700 px-2 py-1 rounded text-white">
                </form>
            </div>
        </main>
    </div>
</body>

</html>