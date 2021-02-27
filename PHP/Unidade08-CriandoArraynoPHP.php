<?php
	
	$_lista = array("joao","marcus","gustavo");

?>


<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>
	<?php

	echo in_array("joao",$_lista); // retorna 1 ou 0
	echo "<br>";
	echo array_search("gustavo",$_lista); //retorna a posicao do elemento

    ?>
 </body>
</html>