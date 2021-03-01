<?php require_once("../PHP - Banco de dados BASICO/conexao/conexao.php");

	$consultas_produtos = "select * from produto";
	$produto = mysqli_query($conecta,$consultas_produtos);

	if(!$produto){
			echo "falha na consulta";
		}

?>


<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Unidade 4</title>
	<link href="estilos/estiloUni04.css" rel="stylesheet">
</head>
<body>
<main>
	<header>
		<nav class="container-nav">
			<section class="nav-item-logo">
			<img src="../HTML/imagens/conversation_chat_deal_agreement_icon_124665.png" alt="logo">
			</section>
			<ul class="nav-item">
				<li><a href="">Home</a></li>
				<li><a href="">Contato</a></li>
				<li><a href="">Quem somos</a></li>
				<li><a href="">Trabelhe conosco</a></li>
			</ul>

		</nav>
	</header>
	<section class="container-principal">

		<?php

		while($linha = mysqli_fetch_assoc($produto)){
			?>

			<ul>
				<li><?php echo $linha["IDPRODUTO"]?>
				<li><?php echo $linha["NOME"]?>
				<li><?php echo $linha["VALOR"]?>
			</ul>


			<?php
		}

        ?>



	</section>
	<article></article>
	<aside></aside>
	<footer>
		<section class="grid-container">
			<div class="grid-item1">
				<ul>
					<li><a href="">Carros</a></li>
					<li><a href="">SUVs & Crossovers</a></li>
					<li><a href="">Performance</a></li>
					<li><a href="">Picapes</a></li>
				</ul>
			</div>
			<div class="grid-item2">
				<ul>
					<li><a href="">Monte o Seu</a></li>
					<li><a href="">Concessionárias Ford</a></li>
					<li><a href="">Serviços Financeiros </a></li>
					<li><a href="">Venda Direta</a></li>
				</ul>
			</div>
			<div class="grid-item3">
				<ul>
					<li><a href="">Tutoriais Ford</a></li>
					<li><a href="">SYNC®</a></li>
					<li><a href="">Serviços Ford</a></li>
					<li><a href="">Recall</a></li>
				</ul>
			</div>
		</section>
		<section class="social-container">
			<div class="social-item">
				<a href="#"><img src="../HTML/imagens/facebook_fb_logo_icon_181508.png" alt="logo facebook"></a>
				<a href="#"><img src="../HTML/imagens/whatsapp_logo_icon_181506.png" alt="logo whatsapp"></a>
				<a href="#"><img src="../HTML/imagens/twitter_logo_icon_181501.png" alt="logo twitter"></a>
				<a href="#"><img src="../HTML/imagens/youtube_logo_icon_181507.png" alt="logo youtube"></a>
			</div>
		</section>
		<section class="copyright">
			<small>Copyright © 2021 Ford Motor Company</small>
		</section>
	</footer>
</main>
</body>
</html>

<?php mysqli_close($conecta) ?>