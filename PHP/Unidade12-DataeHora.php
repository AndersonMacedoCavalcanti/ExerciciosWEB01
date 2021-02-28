
<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>

 </head>
 <body>
	<?php
	setlocale(LC_TIME, "portuguese");
	date_default_timezone_set("Brazil/East");

	 $_agora = getdate();
	 $_segundo =$_agora["seconds"];
	 $_minutos = $_agora["minutes"];
	 $_hora=$_agora["hours"];

	 $_dia=$_agora["mday"];
	 $_mes = strftime("%B");
	 $_ano=$_agora["year"];

	 echo $_dia . " " . $_mes . " de " . $_ano;

    ?>
 </body>
</html>