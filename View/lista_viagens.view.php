<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viagens</title>
    <style>
        td img{
            width: 50px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Viagens Cadastrados</h1>

    <table>
        <tr><th>Foto</th> 
            <th>Nome</th> <th>Descrição</th> <th>Excluir</th>  </tr>
        <?php 
            $lista = Viagem::getAll();
            foreach ($lista as $viagem) {
                if($viagem->caminho_foto == null)
                    $viagem->caminho_foto = "./../uploads/default.png";

                echo "<tr>".
                "<td> <img src='$viagem->foto' alt='foto da viagem'> <td>".
                "<td> $viagem->nome </td>".
                "<td> $viagem->descricao </td>".
                "<td> <a href=\"./../Controller/viagem.controller.php?action=excluir&id=$viagem->id\">
                &#128465;
                </a> </td>".
                "</tr>";
            }
        ?>
    </table>

</body>
</html>