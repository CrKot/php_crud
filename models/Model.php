<?php
  namespace Model;
  use mysqli;

  class Model
  {
    private $host = 'db';
    private $username = 'root';
    private $password = 'example';
    private $dbname = 'oldSchool';
    private $connection;

    public function __construct()
    {
      $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
//      $query = "CREATE TABLE crud_php (
//        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//        name VARCHAR(20),
//        phone BIGINT,
//        text VARCHAR(90)
//    )";
//      $this->connection->query($query);
      return $this->connection;
    }

    public function save(string $name,int $phone,string $text): void
    {
      $query = "INSERT INTO crud_php SET name='$name', phone='$phone', text='$text'";
      $this->connection->query($query);
    }

    public function getAll(): array
    {
      $query = "SELECT * FROM crud_php";
      $res = $this->connection->query($query);
      if (!empty($res)) {
        $data = [];
        while ($rows = mysqli_fetch_assoc($res)) {
          $data[] = $rows;
        }
        return $data;
      }
      return [];
    }

    public function delete(int $id): void
    {
      $query = "DELETE FROM crud_php WHERE id=$id";
      $this->connection->query($query);
    }

    public function update(int $id,string $name,string $phone,string $text): void
    {
      $query = "UPDATE crud_php SET name='$name', phone='$phone', text='$text' WHERE id='$id'";
      $this->connection->query($query);
    }
  }
