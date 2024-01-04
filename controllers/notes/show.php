<?php

use Core\App;
use Core\Database;


$db=APP::resolve('Core\Database');



$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id'],
])->findOrFail();

authorize($note['user_id'] === Database::CURRENT_USER);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
