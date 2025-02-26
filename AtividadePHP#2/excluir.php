include 'db.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

$sql = "DELETE FROM contatos WHERE id = :id";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    echo "Registro excluído com sucesso!";
} else {
    echo "Erro ao excluir registro.";
}
?>
