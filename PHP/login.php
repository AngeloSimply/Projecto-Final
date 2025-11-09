<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = trim($_POST["user"]);
    $pass = trim($_POST["pass"]);

    $sql = "SELECT * FROM usuarios WHERE nome = :user";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":user", $user);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($pass, $usuario["senha"])) {
            $_SESSION["usuario"] = $usuario["nome"];
            header("Location: ../index.php");
            exit;
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Usuário não encontrado!";
    }
}
?>
