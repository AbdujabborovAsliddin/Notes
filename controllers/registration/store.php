<?php

use Core\Validator;
use Core\App;
use Core\Database;

$email = $_POST['email'];
$name=$_POST['name'];
$password = $_POST['password'];


$errors = [];
if (!Validator::string($email)) {
    $errors['email'] = 'Please provide a valid email address';
}
if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a valid password';
}
if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}
$db = App::resolve(\Core\Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {

    header('location: /');
    exit();
} else {
    $db->query('insert into users(email, name, password) values(:email,:name, :password)', [
        'email' => $email,
        'name'=>$name,
        'password' => $password,

    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();
}