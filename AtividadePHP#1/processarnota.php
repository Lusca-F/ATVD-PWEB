<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $produto_id = intval($_POST['produto_id']);
  $nota = intval($_POST['nota']);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avaliação Recebida</title>
  <style>
    body { text-align: center; margin-top: 50px; font-family: Arial, sans-serif; }
  </style>
</head>
<body>
  <h1>Obrigado por avaliar o Produto <?php echo $produto_id; ?> com a nota <?php echo $nota; ?>.</h1>
</body>
</html>
