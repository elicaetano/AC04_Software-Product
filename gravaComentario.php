<?php 
header("content-type:text/html;charset=utf8");

include "conexao.php";

$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];



$sql="INSERT INTO comentario (nome, email,telefone,assunto,mensagem) VALUES ('$nome', '$email','$telefone','$assunto', '$mensagem')";

mysqli_query($conn,$sql);

mysqli_close($conn);

 ?>

<script>

	alert(" Registro armazenado com sucesso");
	window.location.href='navegacao.html'; </script>";

 </script>