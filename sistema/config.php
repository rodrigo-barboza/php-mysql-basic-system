<?php
	// php version: 7.2.28
	
	// definição das configurações do banco
	$host = "localhost";
	$user = "root";
	$pasw = "";
	$tabl = "banco1";
	
	// o php tem uma função nativa para conexão com banco de dados
	// mysqli_connect ("seu banco", "usuario", "senha") or die ("mostrar");
	$conexao = mysqli_connect($host, $user, $pasw) or die ("Could not connect.");
	// definir com qual tabela iremos estabelecer a conexão
	$datab   = mysqli_select_db ($conexao, $tabl) or die ("Did not find the table.");

?>