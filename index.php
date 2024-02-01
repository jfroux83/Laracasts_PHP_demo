<?php

require 'functions.php';
// require 'router.php';

// Connect to our MySQL database
$dsn = "mysql:host=localhost;port=3306;dbname=laracasts_myapp;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', '');

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}
