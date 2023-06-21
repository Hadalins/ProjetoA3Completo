<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
   <!-- esse é o comando para comentar em HTML 
adicionar linha para digitar e-mail 
E-mail: <input type="email" name="email"> <br>
-->
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
        <h1> ### Login ###</h1>
    <form id="login" action="logado.php" method="POST" >
       Login: <input type="text" name="login"> <br>
    <br>
       Senha: <input type="password" name="senha"> <br>
    <br>
       <input type="submit" name="entrar" value="entrar">
    </form>
    </center>
      </div>
</body>
</html>