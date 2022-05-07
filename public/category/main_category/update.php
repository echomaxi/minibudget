<?php require_once('private/initialize.php'); ?>
<?php $id = $_GET['id']; ?>

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
        <h1>Запись успешно изменена!</h1>
        <a href="index.php"><button class="btn btn-primary">Обратно</button></a>
        <?php
        $item = [];
        $item['id'] = $id;
        $item['name'] = $_POST['name'] ?? '';
        $item['price'] = $_POST['price'] ?? '';
        $item['place'] = $_POST['place'] ?? '';
        $item['date'] = $_POST['date'] ?? '';
        $item['time'] = $_POST['time'] ?? '';

        $sql = "UPDATE mbudget SET ";
        $sql .= "name='" . $item['name'] . "', ";
        $sql .= "price='" . $item['price'] . "', ";
        $sql .= "place='" . $item['place'] . "', ";
        $sql .= "date='" . $item['date'] . "', ";
        $sql .= "time='" . $item['time'] . "' ";
        $sql .= "WHERE id='" . $item['id'] . "' ";
        $sql .= "LIMIT 1";

        $result = mysqli_query($dbc, $sql);
        if ($result) {
            return true;
        } else {
            // UPDATE failed
            echo mysqli_error($dbc);
            db_disconnect($dbc);
            exit;
        }
        // $result = mysqli_query($dbc, $sql) or die('Query request failed!');

        ?>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>