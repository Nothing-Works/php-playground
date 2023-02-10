<?php

require_once 'functions.php';
require_once 'Database.php';

//require_once 'router.php';
$config = require_once 'config.php';

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "select * from posts where id = ?";

$posts = $db->query($query, [$id])->fetchAll();

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}