<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
        body{
            font-family:Arial, Helvetica, sans-serif ;
            background-image: linear-gradient(90deg, orange, purple);
        
        }
        div{
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
                top: 50%;
                left: 50%; 
                transform: translate(-50%,-50%);
                padding: 80px;
                border-radius: 15px;
                color: #fff;
        }
        input{

        padding: 15px;
        border: nome;
        outline: nome;
        font-size: 12px;
        }

        button{
           border: nome; 
           padding: 10px; 
           width: 100%;
           border-radius: 10px;
           font-size: 10;
        }
        button:hover{
            background-color: gray;
            cursor: pointer;

        }
    </style>
<body>
    <div>
<center>
    <h2>CADASTRO</h2>
    <form id= "cadastro" action= "cadastro.php" method= "POST">
        nome: <input type= "text" name= "nome" required><br><br>
        login: <input type= "text" name= "login" required><br><br>
        senha: <input type= "password" name= "senha" required><br><br>
        <input type= "submit" id= "cadastrar" value= "cadastrar"><br><br>
        // redirecionamento para que o usuario não precise ficar saindo 
        // e fazendo login sempre, para poder naver e fazer alterações 
        <a href="index.php">Voltar </a><br>
</center>
    </div>
</body>
</html>