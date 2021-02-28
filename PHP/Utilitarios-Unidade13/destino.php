<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <img>

        <?php
            $_dados = $_POST; // pegar o codigo da url
	        $_nome = $_POST["nome"]; // pegar o codigo da url
            $_email = $_POST["email"]; // pegar o codigo da url

            echo $_nome . "<br><br>";

            echo $_email . "<br><br>";

        ?>

        <pre>
	        <?php
	            print_r($_dados);
	        ?>
        </pre>


    </body>
</html>