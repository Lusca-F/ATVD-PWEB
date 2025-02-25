<?php
$produtos = [1 => 'Produto 1', 2 => 'Produto 2', 3 => 'Produto 3'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Produtos</title>
  <style>
    ul { list-style: none; padding: 0; }
    li { margin: 10px 0; }
  </style>
</head>
<body>
  <h2>Escolha um produto para avaliar:</h2>
  <ul>
    <?php foreach ($produtos as $id => $nome): ?>
      <li><a href="avaliar_produto.php?id=<?php echo $id; ?>"><?php echo $nome; ?></a></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>

