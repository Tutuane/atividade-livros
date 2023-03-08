<?php
  require_once('Estante.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
  <body style="align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;">

    
 
      <div class="text-align: center">
        <h2>Listagem de Livros<h2>
      </div>

      <table class="table">
        <thead>
          <tr>
              <th scope="col">Nome Livro</th>
              <th scope="col">Nome Autor</th>
              <th scope="col">Nome Editora</th>
              <th scope="col">Detalhes</th>
              <th scope="col"></th>
          </tr>
        </thead>

      <tbody>
        <?php

          $livro = $estante->pegarLivro(0);
          $autor = $livro->getAutor();
          $editora = $livro->getEditora();

            echo "<tr>";
            echo "<td>{$livro->getTitulo()}</td>";
            echo "<td>{$autor->getNome()}</td>";
            echo "<td>{$editora->getNome()}</td>";
            echo "</tr>";

            
        ?>
      </tbody>
      </table>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>