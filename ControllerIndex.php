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
    $autor = $index->getTitulo();
    $autor = $index->getAutor();
    $no_page = $index->getNoPage();
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

    function getTitulo(){
        return $this->titulo;
    }

    function getAutor(){
        return $this->autor;
    }

    function getNoPage(){
        return $this->no_page;
    }

    function getAction(){
        return $this->action;
    }

    function Create() {

    }
    
}


    // echo ($titulo.' '.$autor.' '.$no_page);

