<?php

// Incluindo a Conexão com o BD
include("conexao.php");

// Crio minha consultao ao banco
$config1 = "SELECT * FROM autor ORDER BY Nome ASC";
$config2 = "SELECT * FROM genero ORDER BY Nome ASC";
$config3 = "SELECT * FROM editora ORDER BY Nome ASC";

// Armazeno o resultado do comando na variável $resultado
$resultado1 = mysql_query($config1);
$resultado2 = mysql_query($config2);
$resultado3 = mysql_query($config3);

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro de Livros</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="ckeditor/ckeditor.js"></script>
  </head>
  <body>
    
    <div class="container-fluid">

      <div class="col-md-12">

        <?php include('menu.php') ?>

      </div>

        <div class="form-group">
            <label for="titulo">Título do Livro</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite aqui o Título">
          </div>

        <div class="col-md-12">

          <form action="insert.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
             <label for="autor">Autor</label>
              <select name="autor" id="autor" class="form-control">
          
                <?php

               while ($autor = mysql_fetch_array($resultado1)) {
                
                  echo '<option value="'.$autor['Id'].'">'.$autor['Nome'].'</option>';

                }

                ?>

             </select>
            </div>

        <div class="col-md-12">

          <form action="insert.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="genero">Genero</label>
              <select name="genero" id="genero" class="form-control">
          
                <?php

                while ($genero = mysql_fetch_array($resultado2)) {
                
                  echo '<option value="'.$genero['Id'].'">'.$genero['Nome'].'</option>';

                }

                ?>

              </select>
            </div>

        <div class="col-md-12">

          <form action="insert.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="editora">Editora</label>
              <select name="editora" id="editora" class="form-control">
          
                <?php

                while ($editora = mysql_fetch_array($resultado3)) {
                
                  echo '<option value="'.$editora['Id'].'">'.$editora['Nome'].'</option>';

                }

                ?>

              </select>
            </div>  

        <div class="form-group">
              <label for="fonte">Foto do livro</label>
              <input type="file" class="form-control" id="foto" name="foto">
            </div>

          <div class="form-group">
            <label for="sinopse">Sinópse do Livro</label>
            <textarea type="text" class="form-control" rows="10" id="sinopse" name="sinopse" placeholder="Digite aqui o sinopse do livro"></textarea>
            <script>
                CKEDITOR.replace('sinopse');
            </script>
          </div>

        <div class="form-group">
              <label for="disponiveis">Livros disponiveis:</label>
              <input type="number" class="form-control" id="disponiveis" name="disponiveis" placeholder="Digite quantos disponiveis">
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar livro</button>

        </form>

      </div>

    </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>