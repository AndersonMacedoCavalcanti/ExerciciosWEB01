<?php require_once("../PHP - Banco de dados BASICO/conexao/conexao.php");

	if( $_POST['email'] != null && $_POST['password'] != null){
		$email = $_POST['email'];
		$password = $_POST['password'];

        $consulta = "SELECT EMAIL, PASSWORD FROM LOGIN";
        $consulta .= " WHERE EMAIL = '{$email}'";
        $consulta .= " and PASSWORD = '{$password}'";

        if (!empty($conecta)) {
            $acesso = mysqli_query($conecta,$consulta);
            if(!$acesso){
            	die("Falha na consulta ao banco de dados");
            }

            $informacoes = mysqli_fetch_assoc($acesso);

            if(empty($informacoes)){
            	$mensagem = "Login sem sucesso";
            } else{
            	Header("Location: Unidade04-ListagemdeProdutos.php");
            }
}
	}


?>


    <!doctype html>
    <html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Unidade 4</title>
	<link href="estilos/login.css" rel="stylesheet">
	<link href="estilos/footer.css" rel="stylesheet">
	<link href="estilos/header.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;400&display=swap" rel="stylesheet">

</head>
<body>
<main>
	<section class="container-principal">
		<section>
			<h1>Login</h1>
			<form action="login.php" method="post">
				<label for="text">E-mail</label>
				<input type="email" name="email" id="email" placeholder="Digite seu e-mail" required="true">
				<?php if (isset($mensagem)){?> <div><p class="erroLogin">* Verifique o E-mail digitado</p></div><?php }?>
				<label for="password">Senha</label>
				<input type="password" name="password" id="password" placeholder="Digite sua senha" required="true">
                <?php if (isset($mensagem)){?> <div><p class="erroLogin">* Verifique a senha digitada</p></div><?php }?>
				<section class="container-btn">
					<button class="btn" id="btn-submit">
						<p>Entrar</p>
					</button>
				</section>
				<section class="options-login">
					<a href="">Cadastrar</a>
					<a href="">Trocar senha</a>
				</section>
			</form>
		</section>

	</section>

</main>
</body>
</html>

