<?php
//incluir o conexão do banco


include 'conexao.php';


//recebendo dados do formulário


$login = $_POST['usuario'];
$senha = $_POST['senha'];


//puxar os dados do banco
$select = "SELECT * FROM tb_usuario WHERE login = $login";


$resultado = $conexao->query($select);


$query = $resultado->fetch_assoc();


$usuario_banco = $query['login'];
$senha_banco = $query['senha'];


echo "usuario do formulario".$login;
echo "usuario do senha".$senha;
echo "usuario do senha do banco".$usuario_banco;
echo "usuario do usuario do banco".$senha_banco;



?>