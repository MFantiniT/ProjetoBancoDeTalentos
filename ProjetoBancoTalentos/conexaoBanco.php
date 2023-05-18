<?php

$host = 'localhost';
$user = 'root';
$password = '';
$nameDB = 'recrutamento';

$conn = new mysqli($host, $user, $password, $nameDB);

if($conn->connect_errno){
    echo "Erro de conexão<br>";
    echo "Código de erro: " . $conn->connect_errno . "<br>";
    echo "Mensagem de erro: " . $conn->connect_error . "<br>";
}

