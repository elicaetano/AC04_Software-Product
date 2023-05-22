<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Consulta Doador</title>
		<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">


</head>

<body>

	<?php
		
		include "conexao.php";
	?>
     

	<div class="centroConsultaDoador">
		<header class="cabelhoDoencaSangue">
			<div class="logoDoencaSangue">
				<a href="principal.html"><img src="assets/image/logo.png"></a>
			</div>	
			
			<div class="hemocentroLinks">
			     <nav class="nav nav-pills nav-fill">
					  <a style="color:black;" class="nav-item nav-link " href="hemocentro.html">Conheca o Hemocentro</a>&nbsp; &nbsp; &nbsp;
					  <a style="color:black;"class="nav-item nav-link" href="navegacao.html">Seja um Doador</a>&nbsp; &nbsp; &nbsp;
					  <a style="color:black;"class="nav-item nav-link" href="doencaSangue.html">Doenças do Sangue</a>&nbsp; &nbsp; &nbsp;
					  <a style="color:black;"class="nav-item nav-link" href="perguntas.html">Perguntas Frequentes</a>&nbsp; &nbsp; &nbsp;
					  <a style="color:black;"class="nav-item nav-link" href="contato.html">Contato</a>&nbsp; &nbsp; &nbsp;
				 </nav>
			 </div>
		</header><br>

<h1>Consulte o tipo de Sangue que você Precisa</h1><br><br>


<div class="img">
	<img src="assets/image/gt.png">
</div>

	<form action=" consultaPessoal.php" method="get">
	   <select id="tblsangue" name= "tiposangue" style="font-size: 30px">
		<option value="" selected=""> Tipo Sanguíneo</option>
		<option value="O+"> O+</option>
		<option value="O-"> O-</option>
		<option value="A-"> A-</option>
		<option value="B-"> B-</option>
		<option value="A+"> A+</option>
		<option value="B+"> B+</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
	   </select>
	    <input type="submit" name="botao" value="VERIFICAR" class = "verificar">
		<button style="color:red;font-size:27px;" type="button"><a href="navegacao.html">Voltar</a></button>

    </form>

</div>

</body>
</html>