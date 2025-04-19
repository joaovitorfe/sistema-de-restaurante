# Sistema de Reservas para Restaurante

Este é um sistema simples de reservas para um restaurante, onde os clientes podem reservar mesas, e os administradores podem gerenciar e confirmar essas reservas. Criado por JOAO VITOR GALVAO FERREIRA

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação para o backend.
- **MySQL**: Banco de dados para armazenar as reservas.
- **HTML/CSS**: Estruturas e estilos para o frontend.
- **JavaScript**: Para validação simples do formulário.

## Pré-requisitos

Para rodar este projeto, você precisa ter os seguintes programas instalados:

- **Servidor Web com PHP** (exemplo: [XAMPP](https://www.apachefriends.org/index.html) ou [WAMP](https://www.wampserver.com/))
- **MySQL** ou **MariaDB** (geralmente já vem com o XAMPP ou WAMP).
- **Navegador Web** (Google Chrome, Firefox, etc.)

## Passos para Rodar o Projeto

### 1. Configuração do Banco de Dados

1. Abra o **phpMyAdmin** ou outro cliente de banco de dados MySQL.
2. Crie um novo banco de dados chamado `restaurante`.
3. Importe o arquivo `db.sql` para criar a tabela de reservas.

   **db.sql**:
   ```sql
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
