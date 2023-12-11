<?php
require_once('./../Model/usuario.model.class.php');
session_start();

function redirectUser()
{

    if (isset($_SESSION['dados_usuario'])) {
        require('./../View/viagens.view.php');
    } else {
        require('./../View/login.view.php');
    }

}

function signin()
{
    $msg = '';

    $user = new Usuario();
    $user->usuario = $_POST['usuario'];
    $user->senha = md5($_POST['senha']);

    if ($user->signin()) {

        $_SESSION['dados_usuario'] = $user;

        require('./../View/viagens.view.php');
    } else {
        $msg = 'Usuário ou senha incorretos';
        require('./../View/handler.view.php');
    }

}

if ($_SERVER['REQUEST_METHOD'] == 'GET')
    redirectUser();
else
    signin();



?>