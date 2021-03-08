<?php require_once("../PHP - Banco de dados BASICO/conexao/conexao.php");


$consulta = "select * from produto";
$consulta .= " where NOME like '%";
$consulta .=$_GET["search"];
$consulta .="%' limit 0,8";
$produtos = mysqli_query($conecta,$consulta);


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


	<section>
		<ul class="container-menu-l">
				<li><a>Featured Brands</a></li>
				<li><a>Price</a></li>
				<li><a>Department</a></li>
				<li><a>Condition</a></li>
				<li><a>Seller</a></li>
			</ul>
	</section>

	<section class="container-principal">

			<?php
            while($linha = mysqli_fetch_assoc($produtos)){
                ?>

				<ul class="container-prod">
					<li><a href="Unidade05-Listagem-Detalhe.php?codigo=<?php echo $linha["IDPRODUTO"] ?>"><img src= "<?php echo $linha["IMAGEM"]  ?>" alt="<?php echo $linha["NOME"]  ?>"></a></li>
					<li><?php echo $linha["NOME"]  ?></li>
					<li><span class="texProd" id="textMarca"><strong>Marca: </strong></span> <?php echo $linha["MARCA"]  ?></li>
					<li><?php echo $linha["DESCRICAO"]  ?></li>
					<li><strong>Preço: <span id="textPreco"><?php echo $linha["VALOR"]  ?></span></strong></li>
				</ul>

                <?php
            }
            ?>


	</section>

	<article></article>
	<aside></aside>
    <?php
    include("_incluir/rodape.php")
    ?>
</main>
</body>
</html>

<?php mysqli_close($conecta) ?>