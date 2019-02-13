<!DOCTYPE html>
<html lang="pt-BR">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Admin</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.grid.css" rel="stylesheet">
		<link href="css/bootstrap.reboot.css" rel="stylesheet">
		<link href="css/bootstrap.theme.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="container">
			<div class="col-lg-6 col-lg-offset-3">

	            <form class="form-signin" action="login.php" method="post">
		            <h2 class="form-signin-heading" class="center">Por Favor, insira o login</h2>
		            <label for="login" class="sr-only">Login:</label>
		            <input type="text" name="login" class="form-control" placeholder="Login" required autofocus>
		            <label for="senha" class="sr-only">Senha:</label>
		            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
		            <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
	            </form>

			</div> <!-- /col-lg-6 -->
	    </div> <!-- /container -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.bundle.js"></script>
	</body>
</html>