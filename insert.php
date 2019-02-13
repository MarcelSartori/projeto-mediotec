<?php

include("conexao.php");

// Dados da Notícia
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$sinopse = $_POST['sinopse'];
$genero = $_POST['genero'];
$editora = $_POST['editora'];
$foto = $_FILES['foto'];
$disponiveis = $_POST['disponiveis'];

echo '<pre>';
print_r($foto);
echo '</pre>';

// Upload de Foto
$pasta = 'fotos/';
$nome = $foto['name'];
$ext = end(explode('.', $nome));
$novo_nome = md5(date('d-m-Y h:i:s')).'.'.$ext;

move_uploaded_file($foto['tmp_name'], $pasta.$novo_nome);

$sql = 'INSERT INTO livro (autor, titulo, sinopse, genero, editora, foto, disponiveis) VALUES ('.$autor.', "'.$titulo.'", "'.$sinopse.'", "'.$genero.'", "'.$editora.'", "'.$novo_nome.'", "'.$disponiveis.'")';

$resultado = mysql_query($sql) or die(mysql_error());

if ($resultado) {
	header("Location: index.php?mensagem=sucesso");
} else {
	header("Location: index.php?mensagem=falha");
}