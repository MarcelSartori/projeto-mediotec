<?php

include("conexao.php");

$id = $_GET['Id'];

$sql = 'DELETE FROM livro WHERE Id = '.$id;

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado) {
	header("Location: index.php?mensagem=sucesso");
} else {
	header("Location: index.php?mensagem=falha");
}