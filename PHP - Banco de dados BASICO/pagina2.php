<?php require_once("../PHP - Banco de dados BASICO/conexao/conexao.php");
session_start();
?>


    <!doctype html>
    <html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Unidade 4</title>
	<link href="estilos/estiloUni04.css" rel="stylesheet">
	<link href="estilos/footer.css" rel="stylesheet">
	<link href="estilos/header.css" rel="stylesheet">

</head>
<body>
<main>

	<?php
    include("_incluir/cabecalho.php");
    ?>

	<p><?php echo $_SESSION["usuario"];?></p>
	<div>
		<p>Voce esta na pagina 2</p>
		<a href="logout.php">Pagina 2</a>
	</div>


    <section></section>
	<article></article>
	<aside></aside>
    <?php
    include("_incluir/rodape.php")
    ?>
</main>
</body>
</html>

<?php mysqli_close($conecta) ?>