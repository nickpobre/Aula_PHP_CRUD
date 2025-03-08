<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postId = $_POST['post_id'];

    if (!empty($postId)) {
        $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->bind_param("i", $postId);

        if ($stmt->execute()) {
            echo "Post deletado com sucesso.";
        } else {
            echo "Erro: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Forneça um ID valido.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Excluir</title>
</head>
<body>
    <form method="POST" action="excluir.php">
        <label for="post_id">ID:</label>
        <input type="text" id="post_id" name="post_id" required>
        <button type="submit">Excluir</button>
    </form>
</body>
</html>