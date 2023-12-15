<?php
require_once('./../Model/db.model.php');
require_once('./../Model/usuario.model.class.php');
require_once('./../Model/imagem.class.php');

class Viagem{
    private $id;
    private $nome;
    private $descricao;
    private $caminho_imagem;
    private $id_usuario;


    function __get($name){
        return $this->$name;
    }

    function __set($name,$value){
        $this->$name = $value;
    }

    function __construct($nome, $descricao=null, $caminho_imagem=null, $id_usuario=null, $id=null){
        $this->nome = $nome;
        $this->descricao = ($descricao == '' ? null : $descricao);
        $this->caminho_imagem = $caminho_imagem == '' ? null : $caminho_imagem;
        $this->id_usuario = $id_usuario;
        $this->id = $id;
    }

    function create(){

        $user = $_SESSION['dados_usuario'];

        $img = new Imagem('./../uploads/', $_FILES['caminho_imagem']);
        
        $img->saveImage();

        $sql = 'INSERT INTO viagens(nome,descricao,caminho_imagem,id_usuario) VALUES(:a,:b,:c,:d,:e);';
        $con = conectar();
        $query = $con->prepare($sql);
        $query->bindParam(':a', $this->nome, PDO::PARAM_STR);
        $query->bindParam(':b', $this->descricao, PDO::PARAM_STR);
        $query->bindValue(':c', $img->caminho_imagem, PDO::PARAM_STR);
        $query->bindValue(':d', $user->id, PDO::PARAM_INT);
        return $query->execute();
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

    static function delete($id){
        $sql = 'DELETE FROM viagens WHERE id = :id';
        $con = conectar();
        $query = $con->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->rowCount();
    }

}



?>