<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // guarda o login e senha que foram enviados
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // salva as informações na session
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['inicio_sessao'] = date("Y-m-d H:i:s");
    $_SESSION['ultima_requisicao'] = date("Y-m-d H:i:s");

    // retorna ao dashboard
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
    <h2>Tela Login</h2>
    <form method="POST" action="">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>