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
	<?php unset($_SESSION["usuario"])?> //desconecta
	// session_destroy(); - Destroi todas as sessoes sem precisar dizer qual
	<div>
		<p>Voce esta na pagina de logout</p>
		<a href="pagina2.php">Pagina 2</a>
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