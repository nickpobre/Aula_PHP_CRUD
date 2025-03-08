<?php
include 'database.php';

if (isset($_GET['username']) && !empty($_GET['username'])) {
    $username = $_GET['username'];

    $stmt = $conn->prepare("SELECT * FROM posts WHERE usuario = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Usuario: " . $row['usuario'] . "<br>";
            echo "Conteudo: " . $row['conteudo'] . "<br><br>";
        }
    } else {
        echo "esse usuario não tem posts : " . $username;
    }
    $stmt->close();
}
?>

<form action="selecionar.php" method="get">
    <input type="text" name="username">
    <input type="submit" value="Selecionar">
</form>