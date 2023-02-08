<?php

require_once 'functions.php';
require_once 'Database.php';

//require_once 'router.php';

$db = new Database();
$posts = $db->query("select * from posts where id = 1")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}