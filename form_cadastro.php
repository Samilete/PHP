<?php
    if (isset($_POST['submit'])){
        //print_r($_POST['nome']);
        //print_r($_POST['senha']);
        include_once('config.php');

        $username=$_POST['username'];
        $senha=$_POST['senha'];

        $result=  NEW PD0 ($con, "INSERT INTO usuario (userneme,senha) VALUES ('$username'.'$senha')");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <a href="home.php">voltar</a>
    <div class="box">
        <form action="form.cadastro.php" method="POST">
            <fieldset>
                <legend> Formulario de usuario </legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="username" id="username" class="inputuserneme" required>
                    <label for="username"> Username </label>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" id="password" class="inputpassword" required>
                    <label for="password"> Senha </label>
                </div>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
</body>
</html>