<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coleta os dados do formulário
    $nome_cliente = $_POST['nome_cliente'];
    $data_reserva = $_POST['data_reserva'];
    $numero_pessoas = $_POST['numero_pessoas'];
    $telefone_cliente = $_POST['telefone_cliente'];

    // Insere a reserva no banco de dados !!!
    $query = "INSERT INTO reservas (nome_cliente, data_reserva, numero_pessoas, telefone_cliente) 
              VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$nome_cliente, $data_reserva, $numero_pessoas, $telefone_cliente]);

    echo "<p>Reserva realizada com sucesso!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Reservas - Restaurante</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Reserva de Mesa</h1>
    <form action="index.php" method="POST">
        <label for="nome_cliente">Nome</label>
        <input type="text" id="nome_cliente" name="nome_cliente" required><br>

        <label for="data_reserva">Data e Hora</label>
        <input type="datetime-local" id="data_reserva" name="data_reserva" required><br>

        <label for="numero_pessoas">Número de Pessoas</label>
        <input type="number" id="numero_pessoas" name="numero_pessoas" required><br>

        <label for="telefone_cliente">Telefone</label>
        <input type="text" id="telefone_cliente" name="telefone_cliente"><br>

        <button type="submit">Reservar</button>
    </form>
</body>
</html>
