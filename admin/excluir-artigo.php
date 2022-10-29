<?php

require '../config.php';
include '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->remover($_POST['id']);

    redireciona('/blog/admin/index.php');
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Excluir Artigo</title>
    <link rel="stylesheet" href="../nav.css" />
</head>

<body>
    <header>
      <nav>
        <a class="logo" href="../index.php"><img src="" alt="">Blog - Artigos estudos</a>
        <ul class="nav-list">
          <li><a href="../index.php">Início</a></li>
          <li><a href="../index.php">Administrativa</a></li>
        </ul>
      </nav>
    </header>
    <div id="container">
        <h1>Você realmente deseja excluir o artigo?</h1>
        <form method="post" action="excluir-artigo.php">
            <p>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <button class="botao" id="botton">Excluir</button>
            </p>
        </form>
    </div>
    <script>
      document.getElementById("botton").onclick = function () {
        location.href = "./index.php";
      };
    </script>
</body>

</html>