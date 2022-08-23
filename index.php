<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline test</title>
</head>

<body>
    <form method="post">
        <button name="add_data">Добавить данные</button>
        <?php require "load_data.php"; ?>
    </form>
    <hr>

    <form method="get">
        <input type="text" name="search" id="search">
        <input type="submit" name="find" value="Найти">
    </form>

    <?php require "find_posts.php"; ?>

</body>

</html>