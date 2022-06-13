<?php require_once('../private/initialize.php'); ?>
<?php require_once('../private/shared/header.php'); ?>
<?php
// $get_all_records = "SELECT * FROM all_transactions ORDER BY id DESC";
$get_all_records = "SELECT * FROM all_transactions AS a LEFT JOIN prime_category AS p ON a.prime_cat_id = p.prime_id LEFT JOIN main_category AS m ON a.main_cat_id = m.main_cat_id  LEFT JOIN sub_category AS s ON a.sub_cat_id = s.sub_cat_id ORDER BY id DESC";
$result = mysqli_query($dbc, $get_all_records);
// var_dump($result);
// exit;

?>

<div class="flex flex-col items-start px-4 py-2 my-1 border-4 border-white bg-slate-300">
    <h2 class="text-2xl mb-4">Таблица Расходов</h2>
    <a href="transactions/add.php" class="bg-cyan-900 hover:bg-cyan-700 px-2 py-1 rounded text-white">Добавить</a>
    <table class="table-auto text-left border-separate">
        <thead>
            <tr>
                <th class="p-1">Название</th>
                <th class="p-1">Сумма</th>
                <th class="p-1">Подкатегория</th>
                <th class="p-1">Категория</th>
                <th class="p-1">Тип</th>
                <th class="p-1">Дата</th>
                <th class="p-1">Время</th>
                <th class="p-1">Действия</th>
            </tr>
        </thead>
        <tbody>
            <!-- <?php while ($item = mysqli_fetch_assoc($result)) { ?> -->
            <tr>
                <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                    <?php echo $item['name']; ?>
                </td>
                <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                    <?php echo $item['price']; ?>
                </td>
                <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                    <?php echo $item['sub_cat_name']; ?>
                </td>
                <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                    <?php echo $item['main_cat_name']; ?>
                </td>
                <td class=" py-1 px-2 border-dashed border-sky-700 border rounded">
                    <?php echo $item['prime_name']; ?></td>
                <td class="py-1 px-2 border-dashed border-sky-700 border rounded">
                    <?php echo $item['date']; ?></td>
                <td class=" py-1 px-2 border-dashed border-sky-700 border rounded">
                    <?php echo $item['time']; ?></td>
                <td class="py-1 px-2"><a href="
                                    <?php echo 'edit.php?id=' . h(u($item['id'])); ?>"
                        class="bg-cyan-900 hover:bg-cyan-700 px-2 py-1 rounded text-white">
                        Изменить</a>
                    <a href="<?php echo 'delete.php?id=' . h(u($item['id'])); ?>"
                        class="bg-rose-900 hover:bg-rose-700 px-2 py-1 rounded text-white">Удалить</a>
                </td>
            </tr>
            <!-- <?php } ?> -->
        </tbody>

    </table>

</div>

<?php require_once('../private/shared/footer.php'); ?>