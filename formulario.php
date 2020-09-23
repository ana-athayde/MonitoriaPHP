<script type="text/javascript">
function Alerta() {
	alert("Operação realizada com sucesso");
}	

</script>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Exemplo UPDATE<br></h3> <h4>Cadastro de Alunos na base de dados</h4> <br><br>
<form action="funcoes.php?funcao=gravar" method="POST">
	Nome <input type="text" name="nome" required=""><br>
	Idade <input type="number" name="idade" required=""><br>

	<input type="submit" value="cadastrar" onclick="Alerta()">
	<input type="button" value="Ver dados cadastrados" onclick="location.href='visualizar.php'">


</form>

</body>
</html>