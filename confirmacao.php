<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "UPDATE reservas SET status_reserva = 'confirmada' WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

    echo "<p>Reserva confirmada com sucesso!</p>";
    echo '<a href="reservas.php">Voltar para o gerenciamento de reservas</a>';
}
?>
