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
        }

        form, input, textarea {
            margin-bottom: 15px;
            display: block;
        }

        div {
            margin-bottom: 15px;
        }

        div input {
            display: inline-block;
            margin-right: 10px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>Cadastro</h1>

    <form method="post" action="./../Controller/viagens.controller.php" enctype="multipart/form-data">
        <input required type="text" placeholder="Nome" name="nome">
        <textarea placeholder="Descricao" name="desc"></textarea>
        <input type="file" placeholder="Foto" name="foto">
        <input type="hidden" name="action" value="salvar">
        <input type="submit">
    </form>
</body>

</html>
