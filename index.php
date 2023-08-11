<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Hola</h5>
</body>
</html>

<?php 

use App\Database as Database;

// class index 
// {
//     // echo('hola');
//     function __construct(){
//         echo '<h1>Hola</h1>';
//         $db = new Database;
//         $db->conecct();
//     }
// }


class Index {
    public $saludo = "Hola! <br>";
    // Con el constructor disparamos un echo cada vez que se instancia la clase
    function __construct(){
        echo $this->saludo;
    }
    // Si llamamos a este método, volvemos a instanciar la clase
    public function saludar(){
        $objeto = new Database;
        return $objeto;
    }
}
$obj = new Database(); // Devuelve Hola!
$obj->saludar(); // Devuelve Hola!
?>