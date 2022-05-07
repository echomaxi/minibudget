<?php require_once('private/initialize.php'); ?>
<?php
$query = "SELECT * FROM mbudget ORDER BY id DESC";
$result = mysqli_query($dbc, $query);
?>
<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="styles.css" rel="stylesheet">
    <title>Расходы</title>
</head>

<body>
    <div class="container">
        <h1>Ведение расходов</h1>
        <form class="row gy-2 gx-3 align-items-center form" method="post" action="add.php">
            <div class="col mb-3">
                <input type="text" class="form-control" name="name" placeholder="На что потратил?">
            </div>
            <div class="col mb-3">
                <div class="input-group">
                    <div class="input-group-text">$</div>
                    <input type="number" step="0.01" class="form-control" name="price" placeholder="Сколько потратил?">
                </div>
            </div>
            <div class="col mb-3">
                <input type="text" class="form-control" name="place" placeholder="Куда в общем?">
            </div>
            <div class="col mb-3">
                <input type="date" class="form-control" name="date">
            </div>
            <div class="col mb-3">
                <input type="time" class="form-control" name="time">
            </div>
            <div class="col-auto mb-3">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">На что?</th>
                    <th scope="col">Сколько?</th>
                    <th scope="col">В общем?</th>
                    <th scope="col">Когда?</th>
                    <th scope="col">Во сколько?</th>
                    <th scope="col">Правки</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($item = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['price']; ?></td>
                    <td><?php echo $item['place']; ?></td>
                    <td><?php echo $item['date']; ?></td>
                    <td><?php echo $item['time']; ?></td>
                    <td><a href="<?php echo 'edit.php?id=' . h(u($item['id'])); ?>" class="btn btn-warning">Изменить</a>
                    </td>
                    <td><a href="<?php echo 'delete.php?id=' . h(u($item['id'])); ?>" class="btn btn-danger">Удалить</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>