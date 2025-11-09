<?php
// register.php
require_once 'db.php';
session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $confirma = $_POST['confirma'] ?? '';

    // validações básicas
    if ($nome === '') $errors[] = 'O nome é obrigatório.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email inválido.';
    if (strlen($senha) < 6) $errors[] = 'A senha deve ter no mínimo 6 caracteres.';
    if ($senha !== $confirma) $errors[] = 'As senhas não coincidem.';

    // inserir no banco se tudo ok
    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $errors[] = 'Este email já está registrado.';
        } else {
            $hash = password_hash($senha, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
            $stmt->execute([$nome, $email, $hash]);
            header('Location: login.php?sucesso=1');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registrar - CVLite</title>
  <link rel="stylesheet" href="css/loginC.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <div class="main-tela">
    <!-- botão voltar -->
    <a href="index.php" class="btn-voltar" title="Voltar ao menu principal">
      <i class="bi bi-arrow-left-circle-fill"></i>
    </a>

    <div class="login-esq">
      <h1>
        <span>Crie a sua conta</span><br>
        E aproveite todos os recursos da CVLite
      </h1>
      <img src="Midias/SVGs//sign up.svg" alt="Registrar imagem">
    </div>

    <div class="login-dir">
      <form class="card-login" method="POST" action="register.php" autocomplete="off">
        <img src="Midias/Logo/Logo-CVLiteUPDATE.png" class="c-logo" alt="logo CVLite">

        <?php if (!empty($errors)): ?>
          <div class="erro">
            <?php foreach ($errors as $e) echo "<p>$e</p>"; ?>
          </div>
        <?php endif; ?>

        <div class="dateUser">
          <label for="nome">Nome completo:</label>
          <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
        </div>

        <div class="dateUser">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" placeholder="Seu email" required>
        </div>

        <div class="dateUser">
          <label for="senha">Senha:</label>
          <input type="password" name="senha" id="senha" placeholder="Crie uma senha" required>
        </div>

        <div class="dateUser">
          <label for="confirma">Confirmar senha:</label>
          <input type="password" name="confirma" id="confirma" placeholder="Repita a senha" required>
        </div>

        <button type="submit" class="btn-login">Registrar</button>

        <p class="small-txt">
          Já tem uma conta? <a href="login.php">Fazer login</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
