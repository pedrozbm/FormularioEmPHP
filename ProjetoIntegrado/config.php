<?php

$dbserver = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario_pedro';

$conexao = mysqli_connect($dbserver,$dbUsername,$dbPassword,$dbName);

if(conexao->connect_errno)
{
    echo "erro";
}
else {
    echo "conexao efetuada com sucesso ";
}

?>