<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // guarda o login, senha e time enviados
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $time = $_POST['time'];

    // salva as informações na session
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['time'] = $time;
    $_SESSION['inicio_sessao'] = date("Y-m-d H:i:s");
    $_SESSION['ultima_requisicao'] = date("Y-m-d H:i:s");


    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2> Tela Login</h2>
    <form method="POST" action="">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br><br>
        <label for="time">Time:</label>
        <input type="text" id="time" name="time" required>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
    <p>Atenção, o preenchimento de todos os campos é obrigatório.</p>
</body>
</html>