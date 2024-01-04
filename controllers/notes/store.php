<?php

use Core\Validator;
use Core\Database;

$errors = [];
use Core\App;


$db=APP::resolve('Core\Database');


$check_valid = Validator::string($_POST['body'], 1, 10);

if (!$check_valid) {
    $errors['body'] = 'No more than 10 characters is required';
}

if (!empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);

}

if (empty($errors)) {
    $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => Database::CURRENT_USER
    ]);

    header('location: /notes');
    exit();
}
