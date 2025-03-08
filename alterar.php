<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $conteudo = $_POST['conteudo'];

    $sql = "UPDATE posts SET usuario = ?, conteudo = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssi', $usuario, $conteudo, $id);

    if ($stmt->execute()) {
        echo "Alterado com sucesso.";
    } else {
        echo "Erro: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="alterar.php">
    <input id="id" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
    <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario" required>
    <br>
    <label for="conteudo">Conteúdo:</label>
    <textarea id="conteudo" name="conteudo" required></textarea>
    <br>
    <input type="submit" value="Update Post">
</form>