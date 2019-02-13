<?php

// Incluindo a Conexão com o BD
include("conexao.php");

// Dados da Notícia
$id = $_GET['Id'];
$sql_livro = "SELECT * FROM livro WHERE Id = ".$id;
$resultado_livro = mysql_query($sql_livro);
$livro = mysql_fetch_array($resultado_livro);

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
    <title>Edição de Livro</title>

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
    
    <div class="container">

      <div class="col-md-12">

        <?php include('menu.php') ?>

      </div>

      <div class="form-group">
        <label for="titulo">Título do Livro</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite aqui o Título" value="<?php echo $livro['titulo']; ?>">
      </div>


      <div class="col-md-12">

        <form action="update.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="autor">Selecione o Autor</label>
            <select name="autor" id="autor" class="form-control">
          
              <?php

              while ($autor = mysql_fetch_array($resultado1)) {
                
                if ($autor['Id'] == $livro['autor']) {
                  echo '<option value="'.$autor['Id'].'" selected>'.$autor['Nome'].'</option>';
                } else {
                  echo '<option value="'.$autor['Id'].'">'.$autor['Nome'].'</option>';
                }

              }

              ?>

            </select>
          </div>


      <div class="col-md-12">

        <form action="update.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="genero">Selecione o Genero</label>
            <select name="genero" id="genero" class="form-control">
          
              <?php

              while ($genero = mysql_fetch_array($resultado2)) {
                
                if ($genero['Id'] == $livro['genero']) {
                  echo '<option value="'.$genero['Id'].'" selected>'.$genero['Nome'].'</option>';
                } else {
                  echo '<option value="'.$genero['Id'].'">'.$genero['Nome'].'</option>';
                }

              }

              ?>

            </select>
          </div>


      <div class="col-md-12">

        <form action="update.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="editora">Selecione a Editora</label>
            <select name="editora" id="editora" class="form-control">
          
              <?php

              while ($editora = mysql_fetch_array($resultado3)) {
                
                if ($editora['Id'] == $livro['editora']) {
                  echo '<option value="'.$editora['Id'].'" selected>'.$editora['Nome'].'</option>';
                } else {
                  echo '<option value="'.$editora['Id'].'">'.$editora['Nome'].'</option>';
                }

              }

              ?>

            </select>
          </div>

          <div class="row">

            <div class="col-md-4">
              <img src="fotos/<?php echo $livro['foto']; ?>" class="img-responsive img-rounded">
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label for="foto">Se você deseja alterar a foto, selecione um novo arquivo</label>
                <input type="file" class="form-control" id="foto" name="foto">
              </div>
            </div>

          </div>

          <div class="form-group">
            <label for="sinopse">Sinopse do Livro</label>
            <textarea type="text" class="form-control" rows="10" id="sinopse" name="sinopse" placeholder="Digite aqui a Sinopse do livro"><?php echo $livro['sinopse']; ?></textarea>
            <script>
                CKEDITOR.replace('sinopse');
            </script>
          </div>

          <div class="form-group">
            <label for="disponiveis">Livros disponiveis</label>
            <input type="text" class="form-control" id="disponiveis" name="disponiveis" placeholder="Digite aqui quantos livros disponiveis" value="<?php echo $livro['disponiveis']; ?>">
          </div>

          <input type="hidden" name="Id" value="<?php echo $id; ?>">
          <button type="submit" class="btn btn-primary">Atualizar o Livro</button>

        </form>

      </div>

    </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>