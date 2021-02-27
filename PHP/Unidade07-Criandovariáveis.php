<?php
	$_gasolina = 5.99;
?>


<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>
	<?php
	// arredondar para media
		echo " Arredondando para media $_gasolina = " . round($_gasolina) . "<br><br>";

	// arredondar para cima
        echo " Arredondando para cima $_gasolina = " . ceil($_gasolina) . "<br><br>";

	//arredondar para baixo
     echo " Arredondando para baixo $_gasolina = " . floor($_gasolina) . "<br><br>";

    ?>
 </body>
</html>