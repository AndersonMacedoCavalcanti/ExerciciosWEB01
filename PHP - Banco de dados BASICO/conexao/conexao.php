<?php

$usuario = "anderson";
$senha = 81718020;
$conecta = new PDO("mysql:host=localhost;dbname=web01",$usuario,$senha);

if (!$conecta) {
    echo "Failed to connect to MySQL: ";
}

