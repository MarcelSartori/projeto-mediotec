<?php

// Incluindo a Conexão com o BD
include("conexao.php");

// Recebo o ID da notícia
$id = $_GET['Id'];

// Crio minha consultao ao banco
$sql = "SELECT * FROM livro WHERE Id = ".$id;

// Armazeno o resultado do comando na variável $resultado
$resultado = mysql_query($sql);
$livro = mysql_fetch_array($livro);

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
    <h1><?php echo $livro['titulo'] ?></h1>
    <p>Sinopse: <?php echo $livro['sinopse'] ?></p>
    <p>Genero: <?php echo $livro['genero'] ?></p>
    <p>Editora: <?php echo $livro['editora'] ?></p>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>