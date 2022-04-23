<?php require_once('initialize.php'); ?>
<?php
$id = $_GET['id'];
$query = "DELETE FROM mbudget WHERE id = $id LIMIT 1";
$result = mysqli_query($dbc, $query);
if(!$result) {
    echo mysqli_error($dbc);
    db_disconnect($dbc);
}

?>
<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Готово</title>
</head>

<body>
    <div class="container">
        <h1>Запись успешно удалена!</h1>
        <a href="index.php"><button class="btn btn-success">Обратно</button></a>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>