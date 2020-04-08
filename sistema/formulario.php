
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
</head>
<body>
	<strong>Cadastro de aluno</strong><br/><br/>
	<!-- diferença entre o método post e get, método post ele não mostra os argumentos na url e já o get mostra -->
	<form action="cadastro.php" method="post">
		Nome: <br/>
		<input type="text" name="aluno_nome"  id="aluno_nome"><br/>
		Curso: <br/>
		<input type="text" name="aluno_curso" id="aluno_curso"><br/><br/>
		<input type="submit" value="Cadastrar">
	</form>


</body>
</html>

<?php

?>