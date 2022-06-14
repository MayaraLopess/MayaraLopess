<?php

//conexao
include ("./conexao.php");

$nome = $_POST ['name'];
$nascimento = $_POST ['date'];
$email = $_POST ['email'];
$senha = $_POST ['password'];  

//nome da tabela q vai inserir 
$sql = "INSERT INTO cadastro (nome, nascimento, email, senha) VALUES ('$nome','$nascimento','$email','$senha')";

if(mysqli_query($conexao,$sql))
    echo "Cadastro realizado com sucesso!";

else
    echo "Erro!" . msqli_connect_error($conexao);

mysqli_close($conexao);
?>