<?php require_once('../../../private/initialize.php'); ?>
<?php
$primeCategory_set = getPrimeCategory();
?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Основные Категории</title>
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
            <div class="my-4">
                <h2 class="text-2xl mb-4">Основные Категории</h2>

                <form action="add.php" method="POST">
                    <input type="text" name="prime_name">
                    <input type="submit" value="Добавить"
                        class="border-0 px-2 py-1 bg-slate-500 text-white hover:bg-slate-700 rounded cursor-pointer"></input>
                </form>

                <table class="table-auto text-left border-separate">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($prime_cat_item = mysqli_fetch_assoc($primeCategory_set)) { ?>
                        <tr>
                            <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                                <?php echo $prime_cat_item['prime_name']; ?></td>
                            <td class="py-1 px-2 border-dashed border-sky-700 border rounded"><a
                                    href="<?php echo 'edit.php?id=' . h(u($prime_cat_item['prime_id'])); ?>"
                                    class="bg-cyan-900 hover:bg-cyan-700 px-2 py-1 rounded text-white">Изменить</a>
                                <a href="<?php echo 'delete.php?id=' . h(u($prime_cat_item['prime_id'])); ?>"
                                    class="bg-rose-900 hover:bg-rose-700 px-2 py-1 rounded text-white">Удалить</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </main>
</body>

</html>