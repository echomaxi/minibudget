<?php require_once('private/initialize.php'); ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM mbudget WHERE id='" . $id . "'";
$result = mysqli_query($dbc, $query);

$item_set = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles.css" rel="stylesheet">
    <title>Расходы</title>
</head>

<body>
    <div class="container">
        <h1>Редактирование записи</h1>
        <a href="index.php"><button class="btn btn-primary mb-3">Обратно</button></a>
        <form class="row gy-2 gx-3 align-items-center form" method="post"
            action="<?php echo 'update.php?id=' . $id; ?>">
            <div class="col mb-3">
                <label for="name">Название</label>
                <input type="text" class="form-control" name="name" value="<?php echo  $item_set['name']; ?>">
            </div>
            <div class="col mb-3">
                <label for="price">Сумма</label>
                <div class="input-group">
                    <div class="input-group-text">$</div>
                    <input type="number" step="0.01" class="form-control" name="price"
                        value="<?php echo  $item_set['price']; ?>">
                </div>
            </div>
            <div class="col mb-3">
                <label for="place">Место</label>
                <input type="text" class="form-control" name="place" value="<?php echo  $item_set['place']; ?>">
            </div>
            <div class="col mb-3">
                <label for="date">Дата</label>
                <input type="date" class="form-control" name="date" value="<?php echo  $item_set['date']; ?>">
            </div>
            <div class="col mb-3">
                <label for="time">Время</label>
                <input type="time" class="form-control" name="time" value="<?php echo  $item_set['time']; ?>">
            </div>
            <div class="col-auto mb-3">
                <button type="submit" class="btn btn-warning">Изменить</button>
            </div>
        </form>
    </div>
</body>

</html>