
<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>

 </head>
 <body>
	<?php
	date_default_timezone_set("Brazil/East");
	 $_agora = getdate();
	 $_hora = $_agora["hours"] . ":" . $_agora["minutes"]  . ":" . $_agora["seconds"] . "<br><br>";
	 $_data = ($_agora["mday"]<10 ? "0" . $_agora["mday"] : $_agora["mday"]) . "/" . ($_agora["mon"]<10 ? "0" . $_agora["mon"] : $_agora["mon"])  . "/" . $_agora["year"] . "<br><br>";

	 echo $_hora;
	 echo $_data;
    ?>
 </body>
</html>