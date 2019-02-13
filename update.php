<?php

include('conexao.php');

// Recebo os dados do Registro

$id = $_POST['Id'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$sinopse = $_POST['sinopse'];
$foto = $_FILES['foto'];
$genero = $_POST['genero'];
$editora = $_POST['editora'];
$disponiveis = $_POST['disponiveis'];



// Verifica se a foto foi enviada
if ($foto['error'] == 4){ // Imagem não enviada

	$sql_livro = "SELECT * FROM livro WHERE Id = ".$id;
	$resultado_livro = mysql_query($sql_livro);
	$livro = mysql_fetch_array($resultado_livro);

	$novo_nome = $livro['foto'];

} else {

	// Upload de Foto
	$pasta = 'fotos/';
	$nome = $foto['name'];
	$ext = end(explode('.', $nome));
	$novo_nome = md5(date('d-m-Y h:i:s')).'.'.$ext;

	move_uploaded_file($foto['tmp_name'], $pasta.$novo_nome);
}

$sql = 'UPDATE livro SET autor = '.$autor.', titulo = "'.$titulo.'", sinopse = "'.$sinopse.'", foto = "'.$novo_nome.'", genero = "'.$genero.'", editora = '.$editora.', disponiveis = "'.$disponiveis.'" WHERE Id = '.$id;

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado) {
	header("Location: index.php?mensagem=sucesso");
} else {
	header("Location: index.php?mensagem=falha");
}