<?php require_once('../../../private/initialize.php'); ?>
<?php
$query = "SELECT * FROM mbudget ORDER BY id DESC";
$result = mysqli_query($dbc, $query);
$mainCategory_set = getMainCategory();
$subCategory_set = getSubCategory();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Подкатегории</title>
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
                    <a href="<?php echo '../prime_category/index.php' ?>">
                        Основные Категории
                    </a>
                </li>
                <li>
                    <a href="<?php echo '../main_category/index.php' ?>">
                        Общие Категории
                    </a>
                </li>
                <li>
                    <a href="<?php echo 'index.php' ?>">
                        Подкатегории
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container mx-auto my-4 px-4">
            <h2 class="text-2xl mb-4">Подкатегории</h2>
            <form action="add.php" method="post">
                <label for="name">Название</label>
                <input type="text" name="sub_cat_name" id="sub_cat_name" class="mb-2"><br>
                <label for="sub_cat_name">Общая Категоря</label>
                <select name="main_cat" id="main_cat">
                    <?php foreach ($mainCategory_set as $main_item) { ?>
                    <option value="<?php echo $main_item['main_cat_id']; ?>"><?php echo $main_item['main_cat_name']; ?>
                    </option>
                    <?php } ?>
                </select>
                <input type="submit" value="Добавить"
                    class="border-0 px-2 py-1 bg-slate-500 text-white hover:bg-slate-700 rounded cursor-pointer">
            </form>
            <div>
                <table class="table-auto text-left border-separate">

                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Общая Категория</th>
                            <th>Действия</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($sub_cat_item = mysqli_fetch_assoc($subCategory_set)) { ?>
                        <?php $main_item = getMainCategory_by_id($sub_cat_item['main_cat_id']); ?>
                        <tr>
                            <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                                <?php echo $sub_cat_item['sub_cat_name']; ?></td>
                            <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                                <?php echo $main_item['main_cat_name']; ?></td>
                            <td class="py-1 px-2 border-dashed border-sky-700 border rounded"><a
                                    href="<?php echo 'edit.php?id=' . h(u($main_cat_item['main_cat_id'])); ?>"
                                    class="bg-cyan-900 hover:bg-cyan-700 px-2 py-1 rounded text-white">Изменить</a>
                                <a href="<?php echo 'delete.php?id=' . h(u($main_cat_item['main_cat_id'])); ?>"
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