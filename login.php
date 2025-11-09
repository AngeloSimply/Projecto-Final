<?php
// login.php
session_start();
require_once 'db.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email inválido.';
    if ($senha === '') $errors[] = 'Senha é obrigatória.';

    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($senha, $user['senha'])) {
            session_regenerate_id(true);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nome'];
            header('Location: dashboard.php');
            exit;
        } else {
            $errors[] = 'Email ou senha incorretos.';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tela de Login - CVLite</title>
  <link rel="stylesheet" href="css/loginC.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <div class="main-tela">
    <!-- botão voltar dentro do main, cantinho superior esquerdo -->
    <a href="index.php" class="btn-voltar" title="Voltar ao menu principal">
      <i class="bi bi-arrow-left-circle-fill"></i>
    </a>

    <div class="login-esq">
      <h1>
        <span>Faça Log in</span><br>
        Para Voltares a Utilizar os nossos Recursos
      </h1>
      <img src="Midias/SVGs/login.svg" alt="perfil">
    </div>

    <div class="login-dir">
      <form class="card-login" method="POST" action="PHP/login.php" autocomplete="off">
        <img src="Midias/Logo/Logo-CVLiteUPDATE.png" class="c-logo" alt="logo CVLite">

        <?php if (!empty($_GET['erro'])): ?>
          <p class="erro"><?php echo htmlspecialchars($_GET['erro']); ?></p>
        <?php endif; ?>

        <div class="dateUser">
          <label for="user">Nome do Usuário:</label>
          <input type="text" name="user" id="user" placeholder="Nome do Usuário" required>
        </div>

        <div class="dateUser">
          <label for="pass">Palavra Passe:</label>
          <input type="password" name="pass" id="pass" placeholder="Senha" required>
        </div>

        <button type="submit" class="btn-login">Entrar</button>

        <p class="small-txt">
          Não tem uma conta? <a href="register.php">Registrar-se</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
