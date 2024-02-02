<?php

$config = require 'config.php';
$db = new Database($config['database'], 'root', 'karools');

$heading = 'My Notes';

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->get();

require 'views/notes.view.php';
