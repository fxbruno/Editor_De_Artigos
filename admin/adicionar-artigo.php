<?php

require '../config.php';
require '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->adicionar($_POST['titulo'], $_POST['conteudo']);

    redireciona('/blog/admin/index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="stylesheet" href="../nav.css" />
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
</head>

<body>
    <header>
      <nav>
        <a class="logo" href="../index.php"><img src="" alt="">Blog - Artigos estudos</a>
        <ul class="nav-list">
          <li><a href="../index.php">Início</a></li>
          <li><a href="/index.php">Administrativa</a></li>
        </ul>
      </nav>
    </header>
    <div id="container">
        <h1>Adicionar Artigo</h1>
        <form action="adicionar-artigo.php" method="POST">
            <p>
                <label for="">Digite o título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" />
            </p>
            <p>
                <label for="">Digite o conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo"></textarea>
            </p>
            <p>
                <button class="botao" url="http://127.0.0.1/Projeto%20artigo/index.php">Criar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>