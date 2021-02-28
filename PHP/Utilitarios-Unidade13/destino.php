<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <body>
    <img>

        <?php

      echo $_nome =  isset($_POST["nome"])?$_POST["nome"].  "<br>":"Nao definido" . "<br>";
      echo $_nome =  isset($_POST["email"])?$_POST["email"] . "<br>":"Nao definido" . "<br>";


        ?>
    </body>
</html>