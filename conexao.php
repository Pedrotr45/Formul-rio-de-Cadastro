<?php

$servidor = "localhost";
$usuario  = "root";
$senha   =  "";
$dbname  = "cliente";

$conexao= mysqli_connect($servidor,$usuario,$senha,$dbname);

 if(!$conexao) {
    die("houve um erro".mysqli_connect_errno());

 }else{
    echo 'banco de dados conectado com sucesso!';
 }

?>