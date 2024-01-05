<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = APP::resolve('Core\Database');
$note=[];

$note = $db->query("select * from notes where id = :id", [
    'id' => $_POST['id'],
])->findOrFail();

authorize($note['user_id'] === Database::CURRENT_USER);

$errors = [];
$check_valid = Validator::string($_POST['body'], 1, 10);

if (!$check_valid) {
    $errors['body'] = 'No more than 10 characters is required';
}


if (count($errors)) {
    return view('notes/edit.view.php', [
        'note' => $note,
        'heading' => 'edit Note',
        'errors' => $errors,

    ]);
}
$db->query('update notes set body =:body where id= :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);
header('location:/notes');
die();