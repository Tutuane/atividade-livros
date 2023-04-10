<?php
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<br>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../listaLivros.php">Minha Biblioteca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cadastraLivro.php">Novos Livros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastraEditora.php">Novas Editoras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../listaEditora.php">Editoras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastraAutor.php">Novos Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../listaAutores.php">Autores</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="text-align: center;">
<h1>Cadastro Livro</h1>
</div>

<form action="DAO/salvarEditora.php" method="POST">
    <input type="hidden" name="acao" value="cadastrarEditora">
    <div class="mb-3">
        <label>Titulo</label>
        <input type = "text" name = "titulo" class = "form-control">
        <label>ISBN</label>
        <input type = "text" name = "isbn" class = "form-control">
        <label>Numero de páginas</label>
        <input type = "text" name = "nPaginas" class = "form-control">
        <label>Ano da Publicação</label>
        <input type = "text" name = "anoPublicacao" class = "form-control">
        <label>Número da Edição</label>
        <input type = "text" name = "numEdicao" class = "form-control">

        <label>Editora</label>
        <select class="form-select" aria-label="Default select example" name = "editora">        
            <?php
              require_once("dao/config.php");

              $sql = "SELECT * FROM editoras";
              $res = $conn->query($sql);
              $qtd = $res->num_rows;
              if($qtd>0){
                  while($row = $res->fetch_object()){
                    print "<option>".$row->nome."One</option>";
                  }

              }
              print "</table>";
            ?>
        </select>

        <label>Autor</label>
        <select class="form-select" aria-label="Default select example" name = "editora" multiselect>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

    </div>
    <div class="mb-3">
        <button type="submit" class="btn-primary">Salvar</button>
    </div>
</form>

<body>
<html>


