<?php
require_once('./../Model/db.model.php');
require_once('./../Model/usuario.model.class.php');
require_once('./../Model/imagem.class.php');

class Viagem{
    private $id;
    private $nome;
    private $descricao;
    private $caminho_imagem;

    function __get($name){
        return $this->$name;
    }

    function __set($name,$value){
        $this->$name = $value;
    }

    function __construct($nome, $descricao=null, $caminho_imagem=null){
        $this->nome = $nome;
        $this->descricao = ($descricao == '' ? null : $descricao);
        $this->caminho_imagem = $caminho_imagem == '' ? null : $caminho_imagem;
    }

    static function getAll(){
        $sql = "SELECT * FROM viagens ORDER BY nome";
        $listaFinal = array();

        $con = conectar();
        $query = $con->prepare($sql);
        $query->execute();

        while ( $reg = $query->fetch() ) {
            $viagem = new Viagem(
                $reg['nome'], $reg['descricao'], $reg['caminho_imagem']);

            $listaFinal[] = $viagem; 
        }

        return $listaFinal;
    }

}



?>