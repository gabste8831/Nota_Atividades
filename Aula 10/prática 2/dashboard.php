<?php
session_start();

// verificação dos dados de session
if (!isset($_SESSION['login']) || !isset($_SESSION['time'])) {
    echo "<script>alert('Os dados da sessão foram perdidos, favor reinicie o processo'); window.location.href = 'login.php';</script>";
    exit();
}

// atualiza o horário da última requisição
$_SESSION['ultima_requisicao'] = date("Y-m-d H:i:s");

// calculo do tempo total de sessão
$inicioSessao = strtotime($_SESSION['inicio_sessao']);
$ultimaRequisicao = strtotime($_SESSION['ultima_requisicao']);
$tempoSessao = gmdate("H:i:s", $ultimaRequisicao - $inicioSessao);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['login']); ?>!</h2>
    <p><strong>Login:</strong> <?php echo htmlspecialchars($_SESSION['login']); ?></p>
    <p><strong>Senha:</strong> <?php echo htmlspecialchars($_SESSION['senha']); ?></p>
    <p><strong>Time:</strong> <?php echo htmlspecialchars($_SESSION['time']); ?></p>
    <p><strong>Data/Hora de Início da Sessão:</strong> <?php echo $_SESSION['inicio_sessao']; ?></p>
    <p><strong>Data/Hora da Última Requisição:</strong> <?php echo $_SESSION['ultima_requisicao']; ?></p>
    <p><strong>Tempo de Sessão:</strong> <?php echo $tempoSessao; ?></p>
    <br>
    <a href="logout.php">Sair</a>
    <br>
</body>
<footer>
    <p>Obrigado pela conexão!</p>
</footer>
</html>