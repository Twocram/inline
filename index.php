<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline test</title>
</head>

<body>
    <form action="load_data.php" method="post">
        <button>Добавить данные</button>
    </form>
    <hr>

    <form method="get">
        <input type="text" name="search" id="search">
        <input type="submit" name="find" value="Найти">
    </form>

    <?php
    require "db_connect.php";
    $find = $_GET['find'];
    $search = $_GET['search'];

    if (isset($find) && strlen($search) > 2) {
        $sql = "SELECT post.title, comment.body FROM `post` INNER JOIN `comment` ON `post`.`id` = `comment`.`post_id` WHERE (`comment`.`body` LIKE '%$search%')";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>"
                    . "title: " . $row["title"] .
                    "<div>" . "comment body:" . $row["body"] . "</div>" .
                    "</div>";
            }
        } else {
            echo "По вашему запросу ничего не найдено";
        }
    } else {
        echo "Строка должна содержать минимум 3 символа";
    }

    ?>

</body>

</html>