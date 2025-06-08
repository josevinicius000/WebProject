<?php
include('connection.php');

if(isset($_POST['cpf']) || isset($_POST['senha'])) {

    if(strlen($_POST['cpf']) == 0) {
        echo "Preencha seu CPF";
    } else if (strlen($_POST['password']) == 0) {
        echo "Preencha sua senha";
    } else {
        
        $cpf = $mysqli->real_escape_string($_POST['cpf']);
        $password = $mysqli->real_escape_string($_POST['password']);

        $SQL = "SELECT * FROM users WHERE cpf = " . $cpf . " AND password = " . $password;

        $sql_qry = $mysqli->query($SQL) or die("Falha na execução do código SQL: " . $mysqli->error);

        $response = $sql_qry->num_rows;

        if($response == 1){
            
            $user = $sql_qry->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['iduser'] = $user['idusers'];
            $_SESSION['username'] = $user['username'];

            header("Location: index.php?acess=" . $user['acess'] );

        } else {
            echo "Falha ao logar! CPF ou senha incorretos";
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/room_icon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            background-image: linear-gradient(90deg, blue, white);
        }
        .login-screen {
            background-color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            font-family: 'Montserrat Alternates', sans-serif;

        }
        input{
            border-color:  rgba(128, 128, 128, 0.644);
            border-radius: 15px;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: blue;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            padding: 15px;
            width: 100%;
        }
        button:hover{
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="login-screen">
        <h1>Login</h1>
        <form action="" method="POST"> 
            <input type="text" name="cpf" placeholder="CPF">
            <br><br>
            <input type="password" name="password" placeholder="Senha">
            <br><br>
            <button>Entrar</button>
            <br><br>
            <a href="user_add.php">Cadastrar novo usuário</a>
        </form>
    </div>
</body>
</html>