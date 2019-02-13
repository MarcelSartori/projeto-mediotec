<?php

include("conexao.php");

// Dados da Notícia
$login = $_POST['login'];
$Nome = $_POST['Nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = 'INSERT INTO usuarios (login, Nome, email, senha) VALUES ("'.$login.'", "'.$Nome.'", "'.$email.'", "'.$senha.'")';

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado) {
	header("Location: index.php?mensagem=sucesso");
} else {
	header("Location: index.php?mensagem=falha");
}