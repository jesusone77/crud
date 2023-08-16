<?php
namespace ControllerIndex;

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$no_page = $_POST["no_page"];
$action = $_POST["action"];
// echo " ".$titulo." ".$autor." ".$no_page." ".$action." ";

function main($titulo,$autor,$no_page,$action) {

    if (!isset($titulo,$autor,$no_page) || !isset($action)) {
        return;
    }

    $index = new Index;
    $autor = $index->get_titulo();
    $autor = $index->get_autor();
    $no_page = $index->get_no_page();
    echo 'Titutlo: '.$titulo.' Autor : '.$autor.' No. Pagina: '.$no_page;
}

main($titulo,$autor,$no_page,$action);

Class Index {

    private $titulo;
    private $autor;
    private $no_page;
    private $action;

    function __construct() {
        $this->titulo = $_POST["titulo"]; 
        $this->autor = $_POST["autor"];
        $this->no_page = $_POST["no_page"];
        $this->action = $_POST["action"];
    }

    function get_titulo(){
        return $this->titulo;
    }

    function get_autor(){
        return $this->autor;
    }

    function get_no_page(){
        return $this->no_page;
    }

    function get_action(){
        return $this->action;
    }

    // function Create() {

    // }
    
}


    // echo ($titulo.' '.$autor.' '.$no_page);

