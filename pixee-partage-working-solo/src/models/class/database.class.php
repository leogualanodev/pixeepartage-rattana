<?php

class Database
{
  private $host = '127.0.0.1';
  private $port = '3306';
  private $database = 'pixeepartage';
  private $nameDB = 'root';
  private $password = '';
  // private $nameDB;
  // private $password;
  public $pdo;

  public function __construct()
  {
    $this->pdo = new PDO(
      'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->database,
      $this->nameDB,
      $this->password,
      // $this->nameDB = getenv('DB_NAME'),
      // $this->password = getenv('DB_PWD'),
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8;'
      ]
    );
  }
}