<?php
session_start();

// Verificar se o usuário está logado
// coloque este codigo para verificar se o usuário está logado
if (!isset($_SESSION['usuario_email'])) {
    header("Location: index.php");  // Se não estiver logado, redireciona para a página de login
    exit();
}

$email = $_SESSION['usuario_email'];  // Obtém o e-mail do usuário logado
$tipo = $_SESSION['usuario_tipo'];  // Pegando o tipo

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>Bem-vindo, <?php echo htmlspecialchars($email); ?>!</h1>
         <p>Você está logado como: <strong><?php echo htmlspecialchars($tipo); ?></strong></p>
        <a href="logout.php" class="btn bg-green-600 rounded-lg text-white font-semibold text-lg hover:bg-green-700 transition ">Sair</a>
    </div>
</body>
</html>
