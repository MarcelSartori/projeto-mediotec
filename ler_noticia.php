<?php

// Incluindo a Conexão com o BD
include("conexao.php");

// Dados da Notícia
$id = $_GET['Id'];
$sql = "SELECT * FROM livro WHERE Id = ".$id;
$resultado = mysql_query($sql) or die(mysql_error());
$livro = mysql_fetch_array($resultado);

// Aqui vai ler os dados de outras tabelas
// Nesta esta a do autor
$id_autor = $_GET['Id'];
$sql_autor = "SELECT * FROM autor WHERE Id = ".$id_autor;
$resultado_autor = mysql_query($sql_autor) or die(mysql_error());
$autor = mysql_fetch_array($resultado_autor);

// Nesta esta a do genero
$id_genero = $_GET['Id'];
$sql_genero = "SELECT * FROM genero WHERE Id = ".$id_genero;
$resultado_genero = mysql_query($sql_genero) or die(mysql_error());
$genero = mysql_fetch_array($resultado_genero);

// Nesta esta a da editora
$id_editora = $_GET['Id'];
$sql_editora = "SELECT * FROM editora WHERE Id = ".$id_editora;
$resultado_editora = mysql_query($sql_editora) or die(mysql_error());
$editora = mysql_fetch_array($resultado_editora);

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Biblioteca Vilmar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">

      <div class="col-md-12">
        <?php include("menu.php") ?>
      </div>

      <div class="col-md-12">
        <?php
          echo '<h1>'.$livro['titulo'].'</h1>';


          echo '<h1>'.$autor['Nome'].'</h1>';


          echo '<h1>'.$genero['Nome'].'</h1>';


          echo '<h1>'.$editora['Nome'].'</h1>';


          echo '<img src="fotos/'.$livro['foto'].'" class="img-responsive img-rounded">';

          
          echo '<p>'.$livro['sinopse'].'</p>';
          

          echo '<h1>'.$livro['disponiveis'].'</h1>';


        ?>
      </div>
      

    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>