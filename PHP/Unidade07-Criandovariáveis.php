<?php
	$_salario = 8000;
	$_gasolina = 5.55;
?>


<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>
	<?php
	// testar se e numerico
	echo "O $_salario e um numero? " . is_numeric($_salario) . "<br>";
    echo "O $_gasolina e um numero? " . is_numeric($_gasolina) . "<br><br>";

    //testar se e interiro
    echo "O $_salario e um inteiro? " . is_integer($_salario) . "<br>";
    echo "O $_gasolina e um inteiro? " . is_integer($_gasolina) . "<br><br>";

	//tear se e float
    echo "O $_salario e um float? " . is_float($_salario) . "<br>";
    echo "O $_gasolina e um float? " . is_float($_gasolina) . "<br>";

    ?>
 </body>
</html>