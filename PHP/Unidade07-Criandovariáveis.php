<?php
	$_salario = 800;
	$_meses = 3;
?>


<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>
	<?php

	//Multiplicacao e Divisao
	echo $_salario * $_meses."<br>";
    echo $_salario / 2 . "<br>";

    //Exponencial
	echo "Exponencial: ". pow(2,3) . "<br>";

	//Raix Quadrada
	echo "Raiz quadrada: " . sqrt(36) . "<br>";

	//Randomico Generica
	echo "Numeros Genericos: " . rand() . "<br>";

	//Randomicos entre intervalo
    echo "Numeros Genericos: " . rand(0,10) . "<br>";

    //Valor absoluto
	echo "Numero abs: " . abs(-50) . "<br>"


    ?>
 </body>
</html>