include 'db.php';

if ($pdo) {
    echo "Conexão bem-sucedida ao banco de dados!";
} else {
    echo "Falha na conexão ao banco de dados.";
}