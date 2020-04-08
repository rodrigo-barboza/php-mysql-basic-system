<?php
	// aqui serão listados os registros do banco de dados 
	include ('config.php');

	// seleciona da tabela tb_aluno a partir da conexão do meu BD
	$sql = mysqli_query ($conexao,"select * from tb_aluno") or die ("Erro");

	// serve para contar quantos registros do banco de dados a consulta retornou
	$linhas = mysqli_num_rows ($sql);

	// $val de referencia = função que pega todos os campos da consulta
	while ($dados = mysqli_fetch_assoc($sql)){
		if ($dados["nome_aluno"]=="rodrigo leandro"){
		echo $dados["id_aluno"].ucwords($dados["nome_aluno"])."<br/>";
		echo ucwords($dados["curso_aluno"])."<br/><br/>";
		}
	}
?>