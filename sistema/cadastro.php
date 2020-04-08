<?php
	//pegar as variáveis pelo metódo post
	
	// incluir um arquivo da mesma pasta
	include ('config.php');
	
	// verificar validade dos dados
	if (!$_POST["aluno_nome"])
		echo "É necessário preencher os campos";
	else if (!$_POST["aluno_curso"])
		echo "É necessário fornecer o curso.";
	else{

	// passar dados do post para a variável
	$nome  = strtolower ($_POST["aluno_nome"]);
	$curso = strtolower ($_POST["aluno_curso"]);

	// inserir os registros no banco de dados
	if (mysqli_query ($conexao,"insert into tb_aluno (nome_aluno, curso_aluno) 
				   values ('$nome','$curso')") or die ("Erro. ")) 
		echo "Cadastro realizado com sucesso!<br/><br/>";

	// imprimir dados fornecidos. 
	echo "Aluno: ". $nome."<br/>";
	echo "Curso: ". $curso;
	}
?>

<br/><button><a href="formulario.php">Voltar</a></button>