CREATE DATABASE restaurante;

USE restaurante;

CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    data_reserva DATETIME NOT NULL,
    numero_pessoas INT NOT NULL,
    telefone_cliente VARCHAR(15),
    status_reserva ENUM('pendente', 'confirmada', 'cancelada') DEFAULT 'pendente'
);
