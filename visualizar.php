<?php  
include "conexao.php";
$conexao = conectar("localhost","root","","aula");
//header('Content-type: Text/html; charset=ISO-8859-1');
$consulta = "SELECT * from aluno";
$con = mysqli_query($conexao,$consulta);
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>vizualizar</title>
</head>
<body >
	<h3>Buscando dados na tabela Aluno</h3><br><br>
	<table border="2">
		<tr>
			<td><center><B>Identificador</B></center></td>
			<td><center><B>Nome</B></center></td>
			<td><center><B>Idade</B></center></td>
			<td><center><B>Editar</B></center></td>
			<td><center><B>Excluir</B></center></td>
			
		</tr>

	<?php 
	while ($resultado=mysqli_fetch_array($con)) { 
		//pegar o identificador do aluno e mandar para a pagina de ediçao
		$id=$resultado['idaluno'];

	 ?>
		<tr>
			<td><center><?php echo $resultado['idaluno']  ?></center></td>
			<td><center><?php echo $resultado['nome']  ?></center></td>
			<td><center><?php echo $resultado['idade']  ?></center></td>
			<td><center><a href="editar.php?funcao=editar&id=<?php echo $id ?>">Editar</center></td>
			<td><center><a href="excluir.php?funcao=excluir&id=<?php echo $id ?>">Excluir</center></td>
		</tr>
	<?php } ?>	
	</table>
	<?php desconectar($conexao)  ?>
  <br>

	<input type="button" value="Cadastrar" onclick="location.href='formulario.php'">
</body>
</html>