<?php

include 'conexao.php';

//PEGAR OS DADOS DO FORMULÁRIO

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$setor = $_POST['setor'];
$senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

//VARIAL DO INSERT
$insert = "INSERT INTO tb_usuario value (null,'$nome','$usuario','$senha_cripto','$setor');";

//FUNÇÃO QUERY PARA MANDAR O BANCO DE DADOS

$conexao->query($insert);

if($query) {

}



?>