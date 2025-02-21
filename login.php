<?php
include('config.php');

if (isset($_POST['username']) && isset($_POST['senha'])) {
    //quantidade de caracteres
    if(strlen($_POST['username']) == 0){
        echo "preencha seu username";
    }else if (strlen($_POST['senha']) == 0){
        echo "preencha seu senha";
    }else{
        //testar com o CON se n funcionar com newPDO
        $username = $con -> real_scap_string ($_POST ['username']);
        $senha = $con -> real_scap_string ($_POST ['senha']);

        $sql_code = "SELECT * FROM usuario WHERE username = '$username' AND senha = '$senha'";
        $sql_query = $con -> query ($sql_code) or die("falha na execução");

        $quantidade = $sql_query -> num_rows;

        if($quantidade==1){
            //vai ser pegos os dados e jogados na variavel username
            $username = $sql_query-> fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION ['username'] = $username ['username'];
            header("Location: home.php");

        }
        else{
            echo "falha ao logar. seu email ou senha estao incorretos";
        }
    }
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
</head>
<body>
    <a href="parte1.php">voltar</a>
    <div>
        <h1>login</h1>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="username">
            <br><br>
            <input type="password" name="senha" placeholder="senha">
            <br><br>
            <input type="submit" name="submit" value="enviar">
        </form>
    </div>
</body>
</html>
