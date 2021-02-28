<?php

    $servidor = "localhost";
    $usuario = "anderson";
    $senha = 81718020;
    $banco = "web01";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

$consultas_produtos = "select * from produto";
$produto = mysqli_query($conecta,$consultas_produtos);

if(!$produto){
	die("falha na consulta");
}


?>

<html lang = "pt-BR">
 <head>
  <meta charset="UTF-8">
  <title>Unidade 7</title>
 </head>
 <body>


 </body>
</html>

<?php
    mysqli_close($conecta);
?>
