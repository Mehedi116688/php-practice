<?php
$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query('INSERT INTO notes(title, user_id) VALUES(:title, :user_id)', [
        'title' => $_POST['title'],
        'user_id' => 1
    ]);
}
require 'views/note-create.view.php';

