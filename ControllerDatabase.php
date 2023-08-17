<?php

// echo 'hola';

Class ControllerDatabase {

    private $conn;
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

        return $conn;
    }
    
    function insert($data) {
        $conn = $this->connection();

        $sql = "INSERT INTO libros (autor, titulo, nopag) 
        VALUES ('$data->autor','$data->titulo','$data->no_page')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    function select() {
        $conn = $this->connection();

        $sql = "SELECT * FROM libros";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
        return $result;
    }
}


    // echo ($titulo.' '.$autor.' '.$no_page);