<?php
function conectar()
{
    $server = 'localhost';
    $driver = 'pgsql';
    $bd = 'trabalho';
    $loginBD = 'postgres';
    $senhaBD = 'postgres';
    $conexao = null;
    try {
        $conexao = new PDO("$driver:host=$server;dbname=$bd", $loginBD, $senhaBD);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo 'Erro de Conexão: ' . $e->getMessage();
    }
    return $conexao;
}




?>