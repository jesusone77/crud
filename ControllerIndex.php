<?php
namespace ControllerIndex;

include 'ControllerDatabase.php';
use ControllerDatabase;



function main() {

    // // if (!isset($titulo,$autor,$no_page) || !isset($action)) {
    // //     return;
    // // }

    // $index = new Index;
    // $db = new ControllerDatabase();
    // // $code = $db->insert($index);
    // $code = $db->select();
    // print_r($code);
    // // $titulo = $index->getTitulo();
    // // $autor = $index->getAutor();
    // // $no_page = $index->getNoPage();
    // // echo 'Titutlo: '.$titulo.' Autor : '.$autor.' No. Pagina: '.$no_page;


}

if(!empty($_POST)) {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $no_page = $_POST["no_page"];
    $action = $_POST["action"];
    // echo " ".$titulo." ".$autor." ".$no_page." ".$action." ";
main();
}
Class ControllerIndex {

    public $titulo;
    public $autor;
    public $no_page;
    public $action;

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

    function read(){
        $db = new ControllerDatabase();        
        return $data = $db->select();
    }
}


    // echo ($titulo.' '.$autor.' '.$no_page);

