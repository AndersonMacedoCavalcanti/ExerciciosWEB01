<?php require_once("../PHP - Banco de dados BASICO/conexao/conexao.php");

	$codigo = $_GET["codigo"];

	$consulta = "select * from produto limit 0,8";
	$produtos = mysqli_query($conecta,$consulta);

	if(isset($_GET["codigo"]) && $_GET["codigo"] >= 0){
        $codigo = $_GET["codigo"];
	}else{
		Header("Location:Unidade04-ListagemdeProdutos.php");
	}


	while ($linha = mysqli_fetch_assoc($produtos)) {
        if ($linha["IDPRODUTO"] == $codigo) {
        	$nome =$linha["NOME"];
            $marca =$linha["MARCA"];
        	$descricao =$linha["DESCRICAO"];
        	$preco =$linha["VALOR"];
        	$img =$linha["IMAGEM"];
        }
	}

	?>


<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Unidade 4</title>
	<link href="estilos/listagemDetalhada.css" rel="stylesheet">
	<link href="estilos/footer.css" rel="stylesheet">
	<link href="estilos/header.css" rel="stylesheet">
</head>
<body>
<main>

	<?php
		include("_incluir/cabecalho.php");
	?>

	<section class="container-principal">

				<ul class="container-prod">
					<li><a><img src= "<?php echo $img ?>" alt="<?php echo $nome ?>"></a></li>
					<li><?php echo $nome  ?></li>
					<li><span class="texProd" id="textMarca"><strong>Marca: </strong></span> <?php echo $marca  ?></li>
					<li><?php echo  $descricao ?></li>
					<li><strong>Preço: <span id="textPreco"><?php echo $preco ?></span></strong></li>
				</ul>

		<section class="container-decrib">
			<section class="container-decrib-interno">
				<h1><strong>R$ <?php echo $preco ?></span></strong></h1>
				<p>Em até 12x sem juros no cartão de crédito com ame e receba R$ 16,50 de volta</p>
				<p><span><img id="imgCard" src="imagens-prod/1495815224-jd15_84582.ico"></span>R$ 1.649,99 em até 15x sem juros no cartão Americanas com Ame e receba R$ 16,50 de volta</p>

				<button  type="submit" name="Comprar" id="Comprar">
					<p><span><img class="imgButton" src="imagens-prod/shopping-basket256_24919.ico"></span>Comprar</p>
				</button>
				<button type="submit" name="Comprar" id="Salvar">
					<p><span><img class="imgButton" src="imagens-prod/icon-shoppingbag2_87956.ico"></span>Salvar</p>
				</button>

			</section>

		</section>


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