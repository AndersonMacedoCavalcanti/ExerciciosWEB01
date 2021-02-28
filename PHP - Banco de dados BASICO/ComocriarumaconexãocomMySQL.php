<?php

    $servidor = "localhost";
    $usuario = "anderson";
    $senha = 81718020;
    $banco = "web01";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

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
	<ol>
	    <?php
	        while($registros = mysqli_fetch_row($produto)){ // pode usar assoc no lugar de row para mostrar como indice o nome das colunuas
	    ?>
		    <li><?php echo $registros[1]?></li>

	    <?php
	        }
	    ?>
	</ol>

    <?php
    mysqli_close($conecta); // sempre fechar as conexoes
    ?>


 </body>
</html>

