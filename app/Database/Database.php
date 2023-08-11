<?php

namespace App\Database;
use \mysqli;
class Database
{
    // Declaración de una propiedad

    public $conn = '';

    public function conectar() {
   
        $servername = 'localhost';
        $username = 'root';
        $db_port = '';
        $db_name = '';
        $password = '';
              
        // Create connection
        $this->$conn = new mysqli($servername, $username, $password);
              
        // Check connection
        if ($this->$conn->connect_error) {
          die("Connection failed: " . $this->$conn->connect_error);
        }
        echo "Connected successfully";
    }

    public function select() {
      $sql = "SELECT username FROM user";
      $result = $this->$conn->mysqli($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
      } else {
        echo "0 results";
      }
      $this->$conn->close();
    }
}

?>