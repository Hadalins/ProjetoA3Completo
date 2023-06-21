<!-- listar.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Usuários</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, orange, purple);
        }
        div {
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
    </style>
</head>
<body>
    <div>
        <h1>Listagem de Usuários</h1>

        <?php
        // Aqui você deve incluir o código necessário para recuperar os usuários do banco de dados
        include("conexao.php");

        $query = "SELECT nome, nome FROM login";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($resultado)) {
                $id = $row['nome'];
                $nome = $row['nome'];
                echo "<li>" . $nome . ' - <a href="alterarsenha.php?id=' . $id . '">Alterar Senha</a></li>';
            }
            echo "</ul>"; 
        } else {
            echo "Nenhum usuário cadastrado.";
        }

        mysqli_close($conexao);
        ?>

        <br>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>


