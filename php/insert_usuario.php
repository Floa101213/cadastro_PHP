<?php
//conexão do banco
include 'conexao.php';

//pegar os dados do formulário

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$setor = $_POST['setor'];
$senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

//VARIAVEL DO INSERT
$insert = "INSERT INTO tb_usuario value(null,'$nome','$usuario','$senha_cripto','$setor');";

//função query para mandar para o banco de dados

$query = $conexao->query($insert);

if ($query) {
    echo "<script>alert('Usuário cadastrado com sucesso!'); window.location.href='../index.html';</script>";
}


?>