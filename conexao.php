<?php

$usuario = 'root';
$senha = 'vertrigo';
$database = 'meu-site';
$host = '127.0.0.1';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}