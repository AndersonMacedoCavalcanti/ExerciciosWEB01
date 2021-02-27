<?php
	$_nome = "Curso PHP Fundamental";
?>


<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>
	<?php
		// strlen - Retorna a quantidade de letras
		echo strlen ($_nome)." - ";

		// stripos - Retorna primeira ocorrencia
		echo stripos($_nome,"P")." - ";

		// strripos - Retorna ultima ocorrencia
        echo strripos($_nome,"P")." - ";

        // strtolower - Converte para eltras mini
		echo strtolower($_nome)." - ";

		// strtolower - Converte para eltras Maius
		echo strtoupper($_nome)." - ";

		// SUBSTR_COUNT - Conta quantas ocorrencias
		echo substr_count($_nome,"P")." - ";
	    echo substr_count($_nome,"PHP")." - ";

    ?>
 </body>
</html>