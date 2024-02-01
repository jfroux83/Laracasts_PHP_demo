<?php

// Connect to our MySQL database and execute a query
class Database
{
  public $connection;

  public function __construct()
  {
    $dsn = "mysql:host=localhost;port=3306;dbname=laracasts_myapp;charset=utf8mb4";
    $this->connection = new PDO($dsn, 'root', 'karools');
  }

  public function query($query)
  {
    $statement = $this->connection->prepare($query);
    $statement->execute();

    return $statement;
  }
}
