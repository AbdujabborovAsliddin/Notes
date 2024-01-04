<?php

use Core\App;
use Core\Database;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete"])) {
        $db = APP::resolve('Core\Database');
        // Delete button was clicke
        $db->query('delete from notes where id=:id', [
            'id' => $_POST['id'],
        ]);
        header('location: /notes');
        exit();
    }
}



//
//
//$note= $db->query("select * from notes where id = :id", [
//    'id' => $_POST['id'],
//])->findOrFail();
//
//authorize($note['user_id'] === Database::CURRENT_USER);
//

//
//header('location: /notes');
//exit();
