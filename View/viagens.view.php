<?php
require('./../View/header.view.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
            
            body{
                background-color: #f5f5f5;
            }
    
            h1{
                text-align: center;
                margin-top: 20px;
            }
    
            div{
                width: 100%;
                height: 100%;
                box-sizing: border-box;
                padding: 1rem;
                text-align: center;
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 5px;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
            }

            a{
                display: block;
                width: 200px;
                height: 50px;
                text-align: center;
                line-height: 50px;
                background-color: #f5f5f5;
                border: 1px solid #ccc;
                border-radius: 5px;
                text-decoration: none;
                color: #000;
            }
    
            a:hover{
                transition: all 0.5s ease-in-out;
                background-color: #ccc;
            }
    </style>

</head>
<body>
    <h1>HOME</h1>

    <div>
        <a href="./../Controller/viagens.controller.php?action=cadastro">Cadastrar</a>
        <a href="./../Controller/viagens.controller.php?action=lista">Listar</a> 
    </div>

    

</body>
</html>