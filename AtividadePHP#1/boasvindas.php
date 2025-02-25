<?php
session_start();
$nome = isset($_COOKIE['nome']) ? $_COOKIE['nome'] : 'Visitante';
$idade = isset($_SESSION['idade']) ? $_SESSION['idade'] : 'desconhecida';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boas-vindas</title>
  <style>
    body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
  </style>
</head>
<body>
  <h1>Olá, <?php echo $nome; ?>! Você tem <?php echo $idade; ?> anos.</h1>
</body>
</html>