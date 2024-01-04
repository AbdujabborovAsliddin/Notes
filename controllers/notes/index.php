<?php
use Core\Database;
$errors=[];
$config=require base_path("config.php");
$db = new Database($config['database']);

$user_id=Database::CURRENT_USER;
$notes=$db->query('select * from notes where user_id= :user_id',[
    'user_id'=>$user_id
])->get();

if(empty($notes)){
    $errors['body']="You don't have notes yet";
}


$user_name=$db->query('select name from users where id= :id',[
    'id'=>$user_id
])->findOrFail();








view("notes/index.view.php", [
    'heading' => $user_name['name']."'s Notes",
    'notes'=>$notes,
    'errors'=>$errors
]);
