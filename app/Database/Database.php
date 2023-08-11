<?php

namespace App\Database;

class Database
{
    // Declaración de una propiedad
    private $servername = '127.0.0.1';
    private $username = 'root';
    private $db_port = '';
    private $db_name = '';
    private $password = '';
    function conecct() {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=app", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}
?>