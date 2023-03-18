<?php

if(isset($_POST['nome'])) {

   // print_r('nome:'.$_POST['nome']);
   // print_r('<br>');
   // print_r('Email:'.$_POST['Email']);
   // print_r('<br>');
   // print_r('password:'.$_POST['password']);
   // print_r("<br>");
   // print_r('confirm'.$_POST['confirm']);

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    $result = mysqli_query($conexao,"INSERT INTO user(nome,Email,password,confirm) 
    VALUES('$nome','$Email','$password','$confirm')");
}


?>