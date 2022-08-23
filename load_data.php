<?php
require "db_connect.php";


$posts_url = "https://jsonplaceholder.typicode.com/posts";
$comments_url = "https://jsonplaceholder.typicode.com/comments";

$posts_arr = json_decode(file_get_contents($posts_url));
$comments_arr = json_decode(file_get_contents($comments_url));


$posts_added = true;
$comments_added = true;

foreach ($posts_arr as $value) {
    $sql = "INSERT INTO post (id, title, body) VALUES ('$value->id', '$value->title', '$value->body')";
    if (!mysqli_query($connection, $sql)) {
        echo "Не удалось добавить посты: " . mysqli_error($connection) . "</br>";
        $posts_added = false;
    }
}

foreach ($comments_arr as $value) {
    $sql = "INSERT INTO comment (id, post_id, name, email, body) VALUES ('$value->id', '$value->postId', '$value->name', '$value->email', '$value->body')";
    if (!mysqli_query($connection, $sql)) {
        echo "Не удалось добавить комментарии: " . mysqli_error($connection) . "</br>";
        $comments_added = false;
    }
}

if ($posts_added && $comments_added) {
    echo "Загружено " . count($posts_arr) . " записей и " . count($comments_arr) . " комментариев";
} else {
    echo "Не удалось добавить данные";
}


mysqli_close($connection);
