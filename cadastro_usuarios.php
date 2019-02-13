<?php

//inclue a conexão com o banco de
include('conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro de usuarios</title>

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
      		<form action="insert_usuarios.php" method="post">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Digite aqui o seu Nome">
          </div>

        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Digite aqui o login">
          </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="">
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite aqui o Email">
          </div>
        
          <button type="submit" class="btn btn-primary">Cadastrar usuario</button>

        </form>

      </div>

    </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>