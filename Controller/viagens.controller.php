<?php
require_once('./../Model/viagem.model.class.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
    createViagem();
else
    getViagens();

    function createViagem(){

        if(!isset($_POST["action"])){
            throw new Exception("Error! Sem action no POST.");
        }
        else if($_POST["action"] == "salvar"){
            if (!isset($_POST["action"], $_POST["nome"], $_POST["desc"], $_POST["sexo"], $_FILES["foto"])) {
                throw new Exception("Error! Campos obrigatórios não preenchidos.");
            }

            $obj = new Viagem(
                $_POST["nome"],
                $_POST['desc'],
                $_FILES['caminho_imagem']
            );
    
            $deuCerto = $obj->create();
    
            if($deuCerto){
                include('./../View/lista-viagem.view.php');
                exit();
            }
            else{
                $msg = 'Error! Não foi possível cadastrar a viagem.';
                include('./../View/handler.view.php');
            }
        }
    }

function getViagens(){

    if(!isset( $_GET['action'])){
        $msq = 'Parâmetro inexistente';
        include('./../View/handler.view.php');
    }
    else if($_GET['action'] == 'cadastro'){
        require('./../View/create.view.php');
    }
    else if($_GET['action'] == 'lista'){
        require('./../View/lista-viagens.view.php');
    }
    else if($_GET['action'] == 'excluir'){
        Viagem::delete($_GET['id']);
        require('./../View/lista-viagens.view.php');
    }
    else{
        $msq = 'Parâmetro incorreto';
        include('./../View/handler.view.php');
    }
}



?>