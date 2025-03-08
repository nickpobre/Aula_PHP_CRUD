<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $conteudo = $_POST['conteudo'];

    $sql = "INSERT INTO posts (usuario, conteudo) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $conteudo);

    if ($stmt->execute()) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<form method="post" action="">
    Usuário: <input type="text" name="usuario"><br>
    Conteúdo: <textarea name="conteudo"></textarea><br>
    <input type="submit" value="Enviar">
</form>