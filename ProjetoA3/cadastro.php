<?php
include('conexao.php');
$nome = isset($_POST['nome']) ? $_POST['nome'] :'';
$login = isset($_POST['login']) ? $_POST['login'] :'';
$senha = isset($_POST['senha']) ? $_POST['senha'] :'';

$insert = "INSERT INTO login (nome, login, senha)
VALUES ('$nome', '$login', '$senha')";

$query = mysqli_query($conexao, $insert);

if ($query) {
    echo "Usuário adicionado com sucesso!";
    echo '<a href="listar.php">Listar Usuários</a>';
    header('Location: listar.php'); // Redireciona para a página listar.php após cadastrar o usuário
    exit();
} else {
    echo "Erro ao adicionar usuário.";
}

mysqli_close($conexao);
?>