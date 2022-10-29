<?php

require 'config.php';
require 'src/Artigo.php';

$obj_artigo = new Artigo($mysql);
$artigo = $obj_artigo->encontrarPorId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="nav.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylepg.css">
  </head>

<body>
    <header>
      <nav>
        <a class="logo" href="index.html"><img src="" alt="">Blog - Artigos estudos</a>
        <ul class="nav-list">
          <li><a href="#">Início</a></li>
          <li><a href="#">Artigos</a></li>
        </ul>
      </nav>
    </header>

    <div id="container">
        <h1>
            <?php echo $artigo['titulo']; ?>
        </h1>
        <p>
            <?php echo nl2br($artigo['conteudo']); ?>
        </p>
        <div>
            <a class="botao botao-block" href="index.php">Voltar</a>
        </div>
    </div>
</body>

</html>