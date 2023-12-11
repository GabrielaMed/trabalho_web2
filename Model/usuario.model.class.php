<?php
require_once('./../Model/db.model.php');

class Usuario
{
    private $id;
    private $usuario;
    private $senha;

    function __set($prop, $valor)
    {
        $this->$prop = $valor;
    }

    function __get($prop)
    {
        return $this->$prop;
    }

    function signin()
    {
        $sql = "SELECT * FROM usuarios 
        WHERE usuarios.usuario = :usuario AND usuarios.senha =s :senha";
        //conecta ao BD
        $con = conectar();
        $query = $con->prepare($sql);
        $query->bindParam(':usuario', $this->usuario);
        $query->bindParam(':senha', $this->senha);
        $query->execute();

        if ($dados = $query->fetch()) {
            $this->id = $dados['id'];
            return true;
        } else {
            return false;
        }
    }
}


?>