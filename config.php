<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '1006';
    $dbName = 'cadastro-form';


    $conexao = new mysqli($dbHost,  $dbUsername,  $dbPassword, $dbName);

    if ($conexao->connect_errno) {

        echo 'Erro';
    } else {
        echo 'conexão efetuada com sucesso!';
    }

    if(isset($_POST['submit'])) {
   

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cpf = ($_POST['cpf']);
    $password = ($_POST['password']);

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, cpf, senha) 
    VALUES ('$name', '$email', '$cpf', '$password')");

}