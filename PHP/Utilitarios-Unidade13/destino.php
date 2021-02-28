<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <img>

        <?php
            $_salada = array("../imagens/laranja.jpg","../imagens/maca.jpg","../imagens/abacate.jpg");
            $_codig = $_GET["codigo"]; // pegar o codigo da url

        ?>

        <img src="<?php echo $_salada[$_codig] ?>">


    </body>
</html>