<?php

#############################

// Arquivo que faz a verificação do Usuário no banco de dados

#############################


// Incluo o arquivo de conexão
include('conexao.php');

// Recebo os dados do formulário via POST
$login = $_POST['login'];
$senha = md5($_POST['senha']);

// Verifico se o usuário existe
$sql = 'SELECT count(Id) as login, senha FROM user_admin WHERE login = "'.$login.'"';
$resultado = mysql_query($sql) or die(mysql_error());
$usuario = mysql_fetch_array($resultado);

// Verifico se o usuário existe
if ($usuario['total'] == 1){
	// Verifico se a senha está correta
	if ($usuario['senha'] == $senha){
		echo "Conectado com sucesso! Seja bem vindo ";
	} else {
		echo "A senha digitada não confere!";
	}
} else {
	echo "Usuário não encontrado";
}