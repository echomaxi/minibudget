<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Главная</title>
</head>

<body class="bg-slate-500">

    <header class="bg-slate-500 text-white px-4 py-2 border-4 border-white mx-1">
        <a href="<?php echo 'index.php' ?>">Панель управления</a>
    </header>

    <div class="flex px-1">

        <nav class="mr-1 w-1/6">
            <div class="bg-slate-500 text-white">
                <ul class="flex flex-col border-4 border-white px-4 py-2 my-1">
                    <li>
                        <a href="<?php echo 'index.php' ?>"
                            class="underline decoration-sky-500 decoration-2 hover:text-sky-400">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo 'category/prime_category/index.php' ?>" class="hover:text-sky-400">
                            Основные Категории
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo 'category/main_category/index.php' ?>" class="hover:text-sky-400">
                            Общие Категории
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo 'category/sub_category/index.php' ?>" class="hover:text-sky-400">
                            Подкатегории
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="w-5/6">