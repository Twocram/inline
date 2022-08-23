<?php

define("SERVER", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DB_NAME", "inline");

$connection = new mysqli(SERVER, USER, PASSWORD, DB_NAME);

if($connection->connect_error) {
    die("Не удалось подключиться к БД: " . $connection->connect_error);
}
