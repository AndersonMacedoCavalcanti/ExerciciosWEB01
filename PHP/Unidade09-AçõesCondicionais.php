<?php
$_dia = "sexta";
?>

<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>
	<?php

		switch ($_dia){
			case "segunda":
				echo "segunda";
				break;
			case "sexta":
				echo "sexta";
				break;
			default:
				echo "nada";
		}

    ?>
 </body>
</html>