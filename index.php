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
use App\Database\Database;
//include 'App\Database\Database.php';

class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo '<br>'.$this->var.'</br>';
    }
}
$user = new SimpleClass;
$user->displayVar();

$db = new Database;
$db->displayVar();

?>