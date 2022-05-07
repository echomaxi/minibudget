<?php require_once('private/initialize.php'); ?>
<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2902a9f4fb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <title>Расходы</title>
</head>

<body>
    <div class="container">
        <h1>Запись успешно добавлена!</h1>
        <a href="index.php"><button class="btn btn-success">Обратно</button></a>
    </div>

    <?php

  $name = $_POST['name'];
  $price = $_POST['price'];
  $place = $_POST['place'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  $query = "INSERT INTO mbudget (name, price, place, date, time) VALUES('$name', '$price', '$place', '$date', '$time')";

  $result = mysqli_query($dbc, $query);
  if ($result) {
    return true;
  } else {
    // UPDATE failed
    echo mysqli_error($dbc);
    db_disconnect($dbc);
    exit;
  }

  ?>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>