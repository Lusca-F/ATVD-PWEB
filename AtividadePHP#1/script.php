<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
  $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

  if ($nome && $idade) {
    setcookie('nome', $nome, time() + 86400, "/"); // Cookie por 1 dia
    $_SESSION['idade'] = $idade;
    header('Location: boasvindas.php');
    exit();
  } else {
    echo "Dados inválidos. Por favor, volte e preencha o formulário corretamente.";
  }
}
?>