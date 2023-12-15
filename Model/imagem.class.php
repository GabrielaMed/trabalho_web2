<?php

class Imagem{
    private $pasta;
    private $arquivo;
    private $caminho_imagem = null;

    function __construct($pasta, $arquivo){
        $this->pasta = $pasta;
        $this->arquivo = $arquivo;
    }

    function __get($name){
        return $this->$name;
    }


    function saveImage(){

        if($this->arquivo["tmp_name"] == null) return false;

        if(!file_exists($this->pasta)){
            mkdir($this->pasta,0777, true);
        }

        $nomeUnico = time().uniqid(rand());

        $destino = $this->pasta . $nomeUnico. basename($this->arquivo['name']);

        $this->caminho_imagem = $destino;

        return
        move_uploaded_file($this->arquivo['tmp_name'], $destino);
    }

}

?>