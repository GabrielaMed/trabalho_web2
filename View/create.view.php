<?php
require('./../View/header.view.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Viagens</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="file"] {
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: orchid;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: darkorchid;
        }

        textarea {
            resize: vertical;
        }
    </style>
</head>

<body>
    <h1>Cadastro</h1>

    <form method="post" action="./../Controller/viagens.controller.php" enctype="multipart/form-data">
        <input required type="text" placeholder="Nome" name="nome">
        <textarea placeholder="Descricao" name="desc"></textarea>
        <input type="file" placeholder="Foto" name="caminho_imagem">
        <input type="hidden" name="action" value="salvar">
        <input type="submit">
    </form>
</body>

</html>
