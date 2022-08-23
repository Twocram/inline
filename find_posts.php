<?php
require "db_connect.php";
$find = $_GET['find'];
$search = $_GET['search'];

if (isset($find) && strlen($search) > 2) {
    $sql = "SELECT post.title, comment.body FROM `post` INNER JOIN `comment` ON `post`.`id` = `comment`.`post_id` WHERE (`comment`.`body` LIKE '%$search%')";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='post'>"
                . "<div class='post-title'>" . $row["title"] . "</div>" .
                "<div class='post-comment'>" . $row["body"] . "</div>" .
                "</div>";
        }
    } else {
        echo "По вашему запросу ничего не найдено";
    }
} else {
    echo "Строка должна содержать минимум 3 символа";
}
