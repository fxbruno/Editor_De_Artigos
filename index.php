<?php

require 'config.php';

include 'src/Artigo.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

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
  </head>

<body>
    <header>
      <nav>
        <a class="logo" href="index.php"><img src="" alt="">Blog - Artigos estudos</a>
        <ul class="nav-list">
          <li><a href="#">Início</a></li>
          <li><a href="admin/index.php">Administrativa</a></li>
        </ul>
      </nav>
    </header>
    <main>
        <div id="container">
            <?php foreach ($artigos as $artigo) : ?>
            <h1 class= "topico">
                <a href="artigo.php?id=<?php echo $artigo['id']; ?>">
                    <?php echo $artigo['titulo']; ?>
                </a>
            </h1>
          
            <?php endforeach; ?>
        </div>

    </main>
</body>
</html>