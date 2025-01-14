
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
    <a class="navbar-brand" href="listaLivros.php">Minha Biblioteca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cadastros/cadastraLivro.php">Novos Livros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastros/cadastraEditora.php">Novas Editoras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaEditora.php">Editoras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastros/cadastraAutor.php">Novos Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaAutores.php">Autores</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="text-align: center;">
<h1>Autores</h1>
</div>

<?php
    require_once("dao/config.php");

    $sql = "SELECT * FROM autores";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    print "<table class='table table-hover table-striped'>";
    print "<tr>";
    print "<td>"."Nome";
    print "<td>"."Email";
    print "<td>"."Website";
    print "<td>";
    print "</tr>";

    if($qtd>0){
        while($row = $res->fetch_object()){
          print "<tr>";
          print "<td>".$row->nome;
          print "<td>".$row->email;
          print "<td>".$row->website;
          print "<td>
          <button onclick=\"location.href='editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
          <button class='btn btn-danger'>Excluir</button>
          </td>";
          print "</tr>";
        }

    }
    print "</table>";
?>

<body>
<html>


