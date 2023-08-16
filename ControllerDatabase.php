<?php
namespace ControllerDatabase;

use mysqli;

function main() {

    $db = new Database;

}

main();

Class Database {

    private $server;
    private $user_name;
    private $database_name;
    private $password;

    function __construct() {
        $this->server = "localhost"; 
        $this->user_name = "root";
        $this->database_name = "biblioteca";
        $this->password = "";
    }

    function connection() {
        // Create connection
        $conn = new mysqli($this->server, $this->user_name, $this->password, $this->database_name);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
    }
    
    function desConnection() {
        
    }
}


    // echo ($titulo.' '.$autor.' '.$no_page);

