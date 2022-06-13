<?php require_once('../../private/initialize.php'); ?>
<?php require_once('../../private/shared/header.php'); ?>
<?php
$prime_cat = getPrimeCategory();
$main_cat = getMainCategory();
$sub_cat = getSubCategory();
?>

<div class="flex flex-col items-start px-4 py-2 my-1 border-4 border-white bg-slate-300">
    <a href="../index.php"><button
            class="border-0 px-2 py-1 bg-slate-500 text-white hover:bg-slate-700 rounded cursor-pointer my-2">Обратно</button></a>
    <h2 class="text-2xl mb-4">Добавить запись</h2>
    <form action="new.php" method="post">
        <label for="name">Название</label>
        <input type="text" name="name" id="name" class="mb-2"><br>

        <label for="primce">Цена</label>
        <input type="text" name="price" id="price" class="mb-2"><br>

        <label for="prime">Тип</label>
        <select name="prime" id="prime">
            <?php while ($prime_item = mysqli_fetch_assoc($prime_cat)) { ?>
            <option value="<?php echo $prime_item['prime_id']; ?>" class="mb-2"><?php echo $prime_item['prime_name']; ?>
            </option>
            <?php } ?>
        </select><br>

        <label for="main">Основная Категория</label>
        <select name="main" id="main" class="mb-2">
            <?php while ($main_item = mysqli_fetch_assoc($main_cat)) { ?>
            <option value="<?php echo $main_item['main_cat_id']; ?>" class="mb-2">
                <?php echo $main_item['main_cat_name']; ?></option>
            <?php } ?>
        </select><br>

        <label for="sub">Общая Категория</label>
        <select name="sub" id="sub" class="mb-2">
            <?php while ($sub_item = mysqli_fetch_assoc($sub_cat)) { ?>
            <option value="<?php echo $sub_item['sub_cat_id']; ?>" class="mb-2"><?php echo $sub_item['sub_cat_name']; ?>
            </option>
            <?php } ?>
        </select><br>
        <label for="date">Дата</label>
        <input type="date" name="date" id="date">
        <label for="time">Время</label>
        <input type="time" name="time" id="time" class="mb-2"> <br>

        <input type="submit" value="Добавить" class="bg-cyan-900 hover:bg-cyan-700 px-2 py-1 rounded text-white">
    </form>
</div>


<?php require_once('../../private/shared/footer.php'); ?>