<?php 
include "conexao.php";
$conexao = conectar("localhost","root","","aula");
if ($_GET['funcao']=='editar'){
	$id = $_GET['funcao'];
	$consultaupdate="SELECT * from aluno where idaluno = '$id'";
	$con=mysqli_query($conexao,$consultaupdate);
while ($resultado = mysqli_fetch_array($con)) 
{
	$nome = $resultado['nome'];
	echo $nome;
	$idade = $resultado['idade'];
}

 ?>
<h4>atualuzar cadastro</h4> <br><br>
<form action="funcoes.php?funcao=editar&id=<?php echo $id ?>" method="POST">
	Nome <input type="text" name="nome" value="<?php echo $nome ?>" required=""><br>
	Idade <input type="number" name="idade"value="<?php echo $idade ?>" required=""><br>

	<input type="submit" value="Alterar" >
	
</form>
<?php desconectar($conexao);} ?>