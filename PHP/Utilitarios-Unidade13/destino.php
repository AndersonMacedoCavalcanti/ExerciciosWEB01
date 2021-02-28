<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <body>
    <img>

        <?php

        if(isset($_POST["nome"])){
            $_nome = $_POST["nome"];
        }else{
            echo  $_nome = "Nao definido" . "<br>";
        }

        if(isset($_POST["email"])){
            $_nome = $_POST["email"];
        }else{
            echo $_email = "Nao definido";
        }


        ?>
    </body>
</html>