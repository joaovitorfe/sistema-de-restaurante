<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "UPDATE reservas SET status_reserva = 'cancelada' WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

    echo "<p>Reserva cancelada com sucesso!</p>";
    echo '<a href="reservas.php">Voltar para o gerenciamento de reservas</a>';
}
?>
