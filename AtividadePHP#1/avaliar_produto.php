<?php
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avaliar Produto</title>
  <style>
    form { text-align: center; margin-top: 50px; }
    select, input[type="submit"] { padding: 8px; margin-top: 10px; }
  </style>
</head>
<body>
  <h2>Avalie o Produto <?php echo $id; ?></h2>
  <form action="processarnota.php" method="POST">
    <input type="hidden" name="produto_id" value="<?php echo $id; ?>">
    <label for="nota">Nota (1 a 5):</label>
    <select name="nota" id="nota" required>
      <?php for ($i = 1; $i <= 5; $i++): ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      <?php endfor; ?>
    </select>
    <br>
    <input type="submit" value="Enviar Avaliação">
  </form>
</body>
</html>

<?