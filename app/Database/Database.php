<?php

namespace App\Database\Database;

// class Database
// {
//     // Declaración de una propiedad
//     private $servername = '127.0.0.1';
//     private $username = 'root';
//     private $db_port = '';
//     private $db_name = '';
//     private $password = '';
//     public function conectar() {
//       try {
//         $conn = new PDO("mysql:host=$servername;dbname=app", $username, $password);
//         // set the PDO error mode to exception
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         echo "Connected successfully";
//       } catch(PDOException $e) {
//         echo "Connection failed: " . $e->getMessage();
//       }
//     }
// }

class Database
{
    // property declaration
    public $var = 'asdfasdf';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}
?>