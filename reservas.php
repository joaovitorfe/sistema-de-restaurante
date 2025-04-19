<?php
include('config.php');

$query = "SELECT * FROM reservas WHERE status_reserva = 'pendente' ORDER BY data_reserva";
$stmt = $pdo->prepare($query);
$stmt->execute();
$reservas = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Reservas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Gerenciar Reservas</h1>

    <table>
        <tr>
            <th>Nome</th>
            <th>Data/Hora</th>
            <th>Pessoas</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($reservas as $reserva): ?>
        <tr>
            <td><?= $reserva['nome_cliente'] ?></td>
            <td><?= $reserva['data_reserva'] ?></td>
            <td><?= $reserva['numero_pessoas'] ?></td>
            <td><?= $reserva['telefone_cliente'] ?></td>
            <td>
                <a href="confirmar_reserva.php?id=<?= $reserva['id'] ?>">Confirmar</a> | 
                <a href="cancelar_reserva.php?id=<?= $reserva['id'] ?>">Cancelar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
