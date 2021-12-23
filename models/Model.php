<?php
  namespace Model;
  use mysqli;

  class Model
  {
    private $host = '127.0.0.1';
    private $username = 'root';
    private $password = 'example';
    private $dbname = 'oldSchool';
    private $connection;

    public function __construct()
    {
      $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
      return $this->connection;
    }

    public function save($name, $phone, $text)
    {
      $query = "INSERT INTO crud_php (name, phone, text) VALUES ('$name, $phone, $text')";
      $res = $this->connection->query($query);
    }

    public function getAll()
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
      return 'fail';
    }

    public function delete($id)
    {
      $query = "DELETE FROM crud_php WHERE id=$id";
      $res = $this->connection->query($query);
    }

    public function update($id, $name, $phone, $text)
    {
      $query = "UPDATE crud_php SET name='$name', phone='$phone', text='$text' WHERE id='$id'";
      $res = $this->connection->query($query);
    }
  }
