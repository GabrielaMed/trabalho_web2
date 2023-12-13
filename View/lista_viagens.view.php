<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Viagens</title>
  <style>
    .main {
      background-color: #f0f0f0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
      width: 100%;
    }

    h1 {
      text-align: center;
    }

    .main-card {
      display: flex;
      flex-wrap: wrap; 
      justify-content: center;
    }

    .card {
      max-width: 400px;
      width: 100%; 
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      margin: 10px; 
      position: relative;
    }

    .card img {
      width: 100%;
      height: auto;
      max-height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 16px;
    }

    .trip-name {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 8px;
    }

    .description {
      font-size: 14px;
      color: #555;
      margin-bottom: 16px;
    }

    .icon-container {
       position: absolute;
      top: 10px;
      right: 10px;
      /* text-align: right; Align the icon to the right within the container */
    }

    .icon {
      color: red;
      font-size: 24px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="main">
    <h1>Viagens</h1>

    <div class="main-card">
      <?php
      $lista = Viagem::getAll();
      foreach ($lista as $viagem) {
        if ($viagem->caminho_imagem == null)
          $viagem->caminho_imagem = "./../uploads/default.png";

        echo
        "<div class='card'>" .
          "<img src='$viagem->caminho_imagem' alt='foto da viagem'>" .
          "<div class='card-content'>" .
          "<div class='trip-name'>$viagem->nome</div>" .
          "<div class='description'>$viagem->descricao</div>" .
          "<div class='icon-container'>" .
          "<span class='icon'><a href=\"./../Controller/viagens.controller.php?action=excluir&id=$viagem->id\">
          &#10060;
          </a></span>" .
          "</div>" .
          "</div>" .
          "</div>";
      }
      ?>
    </div>

  </div>
</body>

</html>
