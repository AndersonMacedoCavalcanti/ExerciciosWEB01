<?php

$_list = ["nome"=>"anderson",
		"sobrenome"=>"macedo"]

?>

<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>
	<?php

		foreach($_list as $_key => $_values){
			echo $_key . ": " . $_values . "<br>";
		}

    ?>
 </body>
</html>