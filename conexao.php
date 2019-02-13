<?php

// Conexão com o MySQL

// Conectando ao Servidor do banco
mysql_connect('localhost', 'root', '') or die('Erro ao conectar: '.mysql_error());

// Selecionar o Banco
mysql_select_db('biblioteca') or die('Erro ao conectar: '.mysql_error());