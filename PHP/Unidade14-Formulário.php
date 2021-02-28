
<?php

	if(isset($_POST["submit"])){
        echo $_nome =  isset($_POST["nome"])?$_POST["nome"].  "<br>":"Nao definido" . "<br>";
        echo $_nome =  isset($_POST["email"])?$_POST["email"] . "<br>":"Nao definido" . "<br>";

    }


?>


<html lang = "pt-BR">
	 <head>
		  <meta charset="UTF-8">
		  <title>Unidade 14</title>

		 <style>
			 label{
				 display: block;
				 margin: 5px;
				 font-size: 18px
			 }

			 input{
				 display: block;
				 padding: 10px;
				 margin-bottom: 15px;
				 border:cornflowerblue 1px solid;
			 }

			 #submit{
				 color:white;
				 background-color:cornflowerblue;
				 border: cornflowerblue 1px solid;
				 border-radius: 5px;
				 box-shadow: 5px 5px 10px #cccccc;
				 font-size: 15px
			 }


		 </style>

	 </head>
	 <body>

	 <form action="Unidade14-Formulário.php" method="POST">

		 <label for="nome">Nome Completo</label>
		 <input type="text" name="nome" id="nome" required>

		 <label for="email">Nome Completo</label>
		 <input type="email" name="email" id="email"  required>

		 <input type="submit" name="submit" id="submit">


	 </form>


	 </body>
</html>