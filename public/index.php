<?php require_once('../private/initialize.php'); ?>
<?php
$query = "SELECT * FROM mbudget ORDER BY id DESC";
$result = mysqli_query($dbc, $query);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Главная</title>
</head>

<body class="bg-slate-300">

    <header>
        <a href="<?php echo 'index.php' ?>">Панель управления</a>
    </header>


    <nav class="mt-2 ml-2">
        <div class="bg-slate-500 text-white">
            <ul class="flex flex-col">
                <li>
                    <a href="<?php echo 'index.php' ?>">
                        Главная
                    </a>
                </li>
                <li>
                    <a href="<?php echo 'category/prime_category/index.php' ?>">
                        Основные Категории
                    </a>
                </li>
                <li>
                    <a href="<?php echo 'category/main_category/index.php' ?>">
                        Общие Категории
                    </a>
                </li>
                <li>
                    <a href="<?php echo 'category/sub_category/index.php' ?>">
                        Подкатегории
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main>

        <div class="container mx-auto px-4 my-4">
            <h2>Таблица Расходов</h2>
            <table class="table-auto text-left border-separate">

                <thead>
                    <tr>
                        <th class="p-1">Название</th>
                        <th class="p-1">Сумма</th>
                        <th class="p-1">Категория</th>
                        <th class="p-1">Дата</th>
                        <th class="p-1">Время</th>
                        <th class="p-1">Действия</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($item = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                            <?php echo $item['name']; ?>
                        </td>
                        <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                            <?php echo $item['price']; ?></td>
                        <td class=" py-1 px-2 border-dashed border-sky-700 border rounded">
                            <?php echo $item['place']; ?></td>
                        <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                            <?php echo $item['date']; ?></td>
                        <td class=" py-1 px-2 border-dashed border-sky-700 border rounded">
                            <?php echo $item['time']; ?></td>
                        <td class="py-1 px-2 border-dashed border-sky-700 border rounded"><a href="
                                    <?php echo 'edit.php?id=' . h(u($item['id'])); ?>"
                                class="bg-cyan-900 hover:bg-cyan-700 px-2 py-1 rounded text-white">
                                Изменить</a>
                            <a href="<?php echo 'delete.php?id=' . h(u($item['id'])); ?>"
                                class="bg-rose-900 hover:bg-rose-700 px-2 py-1 rounded text-white">Удалить</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>

        </div>

    </main>

</body>

</html>