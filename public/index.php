<?php require_once('../private/initialize.php'); ?>
<?php require_once('../private/shared/header.php'); ?>
<?php
$query = "SELECT * FROM mbudget ORDER BY id DESC";
$result = mysqli_query($dbc, $query);
?>

<div class="flex flex-col justify-center px-4 py-2 my-1 border-4 border-white bg-slate-300">
    <h2 class="text-2xl mb-4">Таблица Расходов</h2>
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
                <td class="py-1 px-2"><a href="
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

<?php require_once('../private/shared/footer.php'); ?>