<?php  
include "conexao.php";
$gravarnome = $_POST['nome'];
$gravaridade = $_POST['idade'];

$conexao = conectar("localhost","root","","aula");
$consulta = "INSERT into aluno (nome,idade)";


if ($_GET['funcao']=='gravar') {
$sqlgravar = mysqli_query($conexao,$consulta);

header("Location: visualizar.php");

}
if ($_GET['editar']=='editar'){
	$id=$_GET['id'];
	$consulta = "UPDATE aluno set nome = '$gravarnome', idade = '$gravaridade' where idaluno='$id'";
	$sqlalterar = mysqli_query($conexao,$conexao)
	header("Location:visualizar.php")

}

?>