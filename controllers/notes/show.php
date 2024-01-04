<?php

use Core\Database;

$config = require  base_path("config.php");
$db = new Database($config['database']);



$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id'],
])->findOrFail();

authorize($note['user_id'] === Database::CURRENT_USER);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);