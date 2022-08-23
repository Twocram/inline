<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline test</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="container">
        <form method="post" class="add-form">
            <input type="submit" name="add_data" class="add-form__btn" value="Добавить данные">
            <?php require "load_data.php"; ?>
        </form>

        <form method="get" class="search-form">
            <input type="text" name="search" id="search" class="search-form__input">
            <input type="submit" name="find" value="Найти" class="search-form__btn">
        </form>

        <?php require "find_posts.php"; ?>
    </div>


</body>

</html>