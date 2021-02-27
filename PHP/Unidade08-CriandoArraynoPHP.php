<?php
	$_salada = [
			"vitamina"=>"laranja","pesego",
			"suco"=>"uva"];

	$_lista = array("joao","marcus","gustavo");

	$_numerso = [47,29,42,04,27,21];
?>


<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>
	<?php

	array_push($_salada,"teste");
    array_pop($_salada);

	foreach( array_keys($_salada) as $_value ){
		echo $_value . " - ";
	}

    echo "<br>";

    foreach( $_salada as $_value ){
        echo $_value . " - ";
    }

	echo "<br>";

    array_push($_lista,"teste");
    array_unshift($_lista,"teste");
    array_pop($_lista);



    foreach( $_lista as $_value ){
        echo $_value . " - ";
    }

    echo "<br>";
    echo "<br>";



    sort($_numerso); // ou rsort

    print_r($_numerso);

    echo "<br>";

    echo min($_numerso);
    echo "<br>";

    echo max($_numerso);



    ?>
 </body>
</html>