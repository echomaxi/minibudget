<?php require_once('../../../private/initialize.php'); ?>
<?php
$primeCategory_set = getPrimeCategory();
$mainCategory_set = getMainCategory();
?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Общие Категории</title>
</head>

<body class="bg-slate-500">
    <header class="bg-slate-500 text-white px-4 py-2 border-4 border-white mx-1>
        <a href=" <?php echo '../../index.php' ?>">Панель управления</a>
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
                        <a href="<?php echo '../prime_category/index.php' ?>" class="hover:text-sky-400">
                            Основные Категории
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo 'index.php' ?>"
                            class="underline decoration-sky-500 decoration-2 hover:text-sky-400">
                            Общие Категории
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo '../sub_category/index.php' ?>" class="hover:text-sky-400">
                            Подкатегории
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="w-5/6">
            <div class="flex flex-col justify-center px-4 py-2 my-1 border-4 border-white bg-slate-300">
                <h2 class="text-2xl mb-4">Общие Категории</h2>

                <form action="add.php" method="post">
                    <label for="main_category">Название новой общей категории</label>
                    <input type="text" name="main_category" id="main_category" class="mb-2"><br>

                    <label for="prime_category">Основная категория</label>
                    <select name="prime_category" id="prime_category">
                        <option value="">Выбирай</option>

                        <?php foreach ($primeCategory_set as $prime_item) { ?>
                        <option value="<?php echo $prime_item['prime_id']; ?>">
                            <?php echo $prime_item['prime_name']; ?>
                        </option>
                        <?php } ?>

                    </select>
                    <input type="submit" value="Добавить"
                        class="border-0 px-2 py-1 bg-slate-500 text-white hover:bg-slate-700 rounded cursor-pointer">
                </form>

                <table class="table-auto text-left border-separate">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Основоная Категория</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($main_cat_item = mysqli_fetch_assoc($mainCategory_set)) { ?>
                        <?php $prime_item = getPrimeCategory_by_id($main_cat_item['prime_cat_id']); ?>
                        <tr>
                            <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                                <?php echo $main_cat_item['main_cat_name']; ?></td>
                            <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                                <?php echo $prime_item['prime_name']; ?></td>
                            <td class="py-1 px-2"><a class="bg-cyan-900 hover:bg-cyan-700 px-2 py-1 rounded text-white"
                                    href="<?php echo 'edit.php?id=' . h(u($main_cat_item['main_cat_id'])); ?>">Изменить</a>
                                <a href="<?php echo 'delete.php?id=' . h(u($main_cat_item['main_cat_id'])); ?>"
                                    class="bg-rose-900 hover:bg-rose-700 px-2 py-1 rounded text-white">Удалить</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>