<?php
session_start();
?>
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
       <h1> Olá, <?php 
        if(isset($_SESSION['nome']) == null) {
            ?> visitante </h1> <br>
            <a href="logina3.php">login</a><br>
        <?php } else {
            echo $_SESSION['nome'];?>
           <br><h3>
            <a href="cadastrar.php">Cadastrar </a><br>
            <a href="listar.php">Listar Usuários</a><br>
            <a href="logout.php">Sair </a><br>
        </h3>
        <?php } ?> 
    </center>
        </div>
</body>
</html>