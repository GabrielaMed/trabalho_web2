<?php
require_once('./../Model/viagem.model.class.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
    null;
else
    getViagens();


function getViagens(){

    if(!isset( $_GET['action'])){
        $msq = 'Parâmetro inexistente';
        include('./../View/handler.view.php');
    }
    else if($_GET['action'] == 'lista'){
        require('./../View/lista_viagens.view.php');
    }
    else{
        $msq = 'Parâmetro incorreto';
        include('./../View/handler.view.php');
    }
}



?>