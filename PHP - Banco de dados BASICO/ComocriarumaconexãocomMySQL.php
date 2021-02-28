<?php

	require_once("../PHP - Banco de dados BASICO/conexao/conexao.php");

	if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

	$consultas_produtos = "select * from produto";
	$produto = mysqli_query($conecta,$consultas_produtos);

	if(!$produto){
		die("falha na consulta");
	}

?>


<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>
     <?php
     while($registros = mysqli_fetch_assoc($produto)){ // pode usar assoc no lugar de row para mostrar como indice o nome das colunuas
         print_r($registros);
         echo "<br>";

     }
     ?>
 </body>
</html>

