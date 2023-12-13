<?php

class Imagem{
    private $pasta;
    private $arquivo;
    private $nomeDefinitivo = null;

    function __construct($pasta, $arquivo){
        $this->pasta = $pasta;
        $this->arquivo = $arquivo;
    }

    function __get($name){
        return $this->$name;
    }


    function salvaImagemUpload(){

        if($this->arquivo["tmp_name"] == null) return false;

        if(!file_exists($this->pasta)){
            mkdir($this->pasta,0777, true);
        }

        $nomeUnico = time().uniqid(rand());

        $destino = $this->pasta . $nomeUnico. basename($this->arquivo['name']);

        $this->nomeDefinitivo = $destino;

        return
        move_uploaded_file($this->arquivo['tmp_name'], $destino);
    }

}